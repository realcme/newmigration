#!/bin/bash
#Company: Healthcourse, Inc
#Department: IT
#Developer: Jon Toshmatov

#Declaring variables
echo 'Import all the files from the server (yes/no):'
read importfiles
if [ -z "$importfiles" ]
  then
    importfiles=no
fi



#clear the screen
printf "\033c"
echo "\033[31m                                                                              R E A L C M E"

cat << "EOF"
                                                                                   _,.
                                                                                 ,` -.)
                                                                                '( _/'-\\-.
                                                                               /,|`--._,-^|            ,
                                                                               \_| |`-._/||          ,'|
                                                                                 |  `-, / |         /  /
                                                                                 |     || |        /  /
                                                                                  `r-._||/   __   /  /
                                                                              __,-<_     )`-/  `./  /
                                                                             '  \   `---'   \   /  /
                                                                                 |           |./  /
                                                                                 /           //  /
                                                                             \_/' \         |/  /
                                                                              |    |   _,^-'/  /
                                                                              |    , ``  (\/  /_
                                                                               \,.->._    \X-=/^
                                                                               (  /   `-._//^`
                                                                                `Y-.____(__}
                                                                                 |     {__)
                                                                                       ()`
EOF
echo "\033[31m                                                                             by Jon Toshmatov"
echo " "
echo  "                                                                           \033[33;5mP L E A S E  W A I T\033[0m"
echo  "                                                                                \033[33;5m.........\033[0m"
#Progress bar of completion
echo 'Establishing connection to the server \r'
echo  '##                        (1%)\r'

echo "STEP 1:"
echo "====================================================================="
#Step 1
if [  $importfiles == yes ]; then
echo "Connecting to RealCME Files on Production"
    #Migrate all the templates from 244 server to local
    rsync -azP jontoshmatov@107.21.181.244:/opt/realcme/learner/www/cms/sites/all/themes/zen/* /Applications/XAMPP/xamppfiles/htdocs/migration/templates/

    #Progress bar of completion
    echo 'Migrating the templates \r'
    echo  '##                        (10%)\r'

    #Migrate all the certs from 244 to local
    rsync -azP jontoshmatov@107.21.181.244:/opt/realcme/learner/www/cms/sites/all/themes/cmecertificatetheme/* /Applications/XAMPP/xamppfiles/htdocs/migration/certifications/
fi

echo "STEP 2:"
echo "====================================================================="
echo "Copying templates"
#Step 2
#TEMPLATES
ls -d /Applications/XAMPP/xamppfiles/htdocs/migration/templates/*/ > templates.txt

#Progress bar of completion
echo 'Migrating the templates \r'
echo  '##                        (20%)\r'

for foldername in $(cat templates.txt)
do
foldername2=$(basename $foldername)
filename=$foldername"page.tpl.php"
foldername3=$(echo $foldername2 | sed -e 's/\//-/g')
createfile=no

 if [  $createfile == yes ]; then
     if [  -f $filename ]; then
    startline=$(cat -n $filename | grep "<body" | awk '{print $1;}')
    endline=$(cat -n $filename | grep "</body>" | awk '{print $1;}')
    hendline=$startline

        if  [[ "$startline" =~ ^[0-9]+$ ]]; then
        sed -n "$startline,$endline p" $filename > templates/$foldername3/template.blade.php
        fi
     fi
 fi

#cat $filename >> templates/$foldername3/template.blade.php

text=$(echo "
<?php
\$cert_img_url=\$page_settings['cert_img_url'];
\$certificate=\$page_settings['certificate'];
\$language=\$page_settings['language'];
\$head_title=\$page_settings['head_title'];
?>
")
printf '%s\n' 0a $text . x | ex templates/$foldername3/template.blade.php

done

echo "STEP 3:"
echo "====================================================================="
echo "Copying certs"
#Step 3
#CERTIFICATES
ls /Applications/XAMPP/xamppfiles/htdocs/migration/certifications | grep .tpl.php   > certificates.txt

for filename in $(cat certificates.txt)
do
createfile=yes

 if [  $createfile == yes ]; then
     if [  -f certifications/$filename ]; then
    startline=$(cat -n certifications/$filename| grep "<body" | awk '{print $1;}')
    endline=$(cat -n certifications/$filename | grep "</body>" | awk '{print $1;}')
    hendline=$startline
        if  [[ "$startline" =~ ^[0-9]+$ ]]; then
            sed -n "$startline,$endline p" certifications/$filename > certifications2/$filename
        else
            cat certifications/$filename > certifications2/$filename
        fi
     fi
 fi
done

echo "STEP 4:"
echo "====================================================================="
echo "Creating footers"
#Step 4
#Footers
ls -d templates/*/ > templates_footer.txt
COUNTER=1
for ffilename in $(cat templates_footer.txt)
do
    file="$ffilename""page.tpl.php"
    foldername=$(basename $ffilename)
    if [  -f $file ]; then
        fstartline=$(cat -n $file| grep "<div id=\"header\">" | awk '{print $1;}')
        fendline=$(cat -n $file | grep "/#header -->" | awk '{print $1;}')

        #check if start and end lines are int
        if  [[ "$fstartline" =~ ^[0-9]+$ ]]; then
            #create a folder if it does not exists
            if [ ! -d "footers/$foldername" ]; then
                mkdir footers/$foldername
            fi
            newfile=footers/$foldername/header.blade.php
            if  [[ "$fendline" =~ ^[0-9]+$ ]]; then
                COUNTER=$[$COUNTER +1]
                sed -n "$fstartline,1000000 p" $file > $newfile
            fi
        fi
    fi
done



echo "STEP 5:"
echo "====================================================================="
echo "Creating headers"
#Step 6
#Headers
COUNTER=1
for ffilename2 in $(cat templates_footer.txt)
do
    file2="$ffilename2""page.tpl.php"
    foldername3=$(basename $ffilename2)

    if [  -f $file2 ]; then
        fstartline2=$(cat -n $file2| grep "<div id=\"header\">" | awk '{print $1;}')
        fendline2=$(cat -n $file2 | grep "/#header -->" | awk '{print $1;}')
        #check if start and end lines are int
        if  [[ "$fstartline2" =~ ^[0-9]+$ ]]; then
            newfile2=footers/$foldername3/header.blade.php
            if  [[ "$fendline2" =~ ^[0-9]+$ ]]; then
                rm $newfile2
                sed -n "$fstartline2,$fendline2 p" $file2 > $newfile2
                mydata=$(cat $newfile2 | sed 's/print t(/print (/g');
                echo $mydata > $newfile2
            fi
        fi
    fi
done


echo "STEP 6:"
echo "====================================================================="
echo "Removing unnecassary tags"

ls -d footers/*/ > footers.txt
for filename in $(cat footers.txt)
do
file="$filename""footer.blade.php"
foldername=$(basename $filename)

if [  -f $file ]; then
  newfile=footers/$foldername/footer.blade.php
  mydata=$(cat $newfile | sed 's/\<\/body>//g');
  mydata=$(echo $mydata | sed 's/\<\/html>//g');
  echo $mydata > $file
fi
done

#resources/views/learner/master.blade.php
#resources/views/learner/partners/internal/header
#resources/views/learner/partners/internal/footer
echo "STEP 7:"
echo "====================================================================="
echo "Copy from migration to latest"

for filename in $(cat footers.txt)
do
file="$filename""footer.blade.php"
foldername=$(basename $filename)

if [  -f $file ]; then
  footer_file=$(cat footers/$foldername/footer.blade.php)
  footer_new=/Applications/XAMPP/xamppfiles/htdocs/latest/resources/views/learner/partners/footers/$foldername
  footer_file2="$footer_new/footer.blade.php"

    if [ ! -d "$footer_new" ]; then
        mkdir $footer_new
    fi
    echo $footer_file > $footer_file2
fi
done

#Header
for filename in $(cat footers.txt)
do
file="$filename""header.blade.php"
foldername=$(basename $filename)

if [  -f $file ]; then
  header_file=$(cat footers/$foldername/header.blade.php)
  header_new=/Applications/XAMPP/xamppfiles/htdocs/latest/resources/views/learner/partners/headers/$foldername
  header_file2="$header_new/header.blade.php"

    if [ ! -d "$header_new" ]; then
        mkdir $header_new
    fi
    echo $header_file > $header_file2
fi
done


#/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/rmeitheme/css/style.css
#copy imgs, css, js
ls -d /Applications/XAMPP/xamppfiles/htdocs/migration/templates/*/ > templates.txt
for filename in $(cat templates.txt)
do
file="$filename""page.blade.php"
foldername=$(basename $filename)

if [  -f $file ]; then
  header_file=$(cat footers/$foldername/header.blade.php)
  header_new=/Applications/XAMPP/xamppfiles/htdocs/latest/resources/views/learner/partners/headers/$foldername
  header_file2="$header_new/header.blade.php"

    if [ ! -d "$header_new" ]; then
        mkdir $header_new
    fi
    echo $header_file > $header_file2
fi
done

echo "renaming the logo.gif to logo.png"
ls -d /Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/*/ > templates_imgs.txt
for partnername in $(cat templates_imgs.txt)
do
logo="$partnername""img/logo.gif"
newlogo=$(basename "$logo")
newlogo=$(echo $newlogo | sed 's/.gif/.png/g');
newlogofile="$partnername""img/$newlogo"

if [ -f "$logo" ]; then
 mv "$logo" "$newlogofile"
fi

done


echo "STEP 10:"
echo "====================================================================="
echo "Copying img, css and js"

ls -d /Applications/XAMPP/xamppfiles/htdocs/migration/templates/*/ > templates.txt
for filename in $(cat templates.txt)
do
file="$filename""page.blade.php"
foldername=$(basename $filename)


    if [ ! -d "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername" ]; then
       # mkdir "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername"
       echo 303
    fi
    if [ ! -d "/Applications/XAMPP/xamppfiles/htdocs/latest/public/css/partners/learner/$foldername/css" ]; then
       # mkdir "/Applications/XAMPP/xamppfiles/htdocs/latest/public/css/partners/learner/$foldername/css"
       echo 307
    fi
    if [ ! -d "/Applications/XAMPP/xamppfiles/htdocs/latest/public/js/partners/learner/$foldername/js" ]; then
       # mkdir "/Applications/XAMPP/xamppfiles/htdocs/latest/public/js/partners/learner/$foldername/js"
       echo 311
    fi
    if [ ! -d "/Applications/XAMPP/xamppfiles/htdocs/latest/public/img/partners/learner/$foldername/img" ]; then
       # mkdir "/Applications/XAMPP/xamppfiles/htdocs/latest/public/img/partners/learner/$foldername/img"
       echo 315
    fi

     if [ -d "$filename""css/" ]; then
      cp -R "$filename""css/" "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername/css/"
     fi

     if [ -d "$filename""js/" ]; then
      cp -R "$filename""js/" "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername/js/"
     fi

     if [ -d "$filename""img/" ]; then
      cp -R "$filename""img/" "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername/img/"
     fi

     if [ -f "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername/style.css" ]; then
        cp  "$filename""style.css" "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername/style.css"
     fi
     if [ -f "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername/print.css" ]; then
        cp  "$filename""print.css" "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername/print.css"
     fi
     if [ -f "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername/layout.css" ]; then
        cp  "$filename""layout.css" "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldername/layout.css"
     fi
     #Delete .svn folders
     rm -R "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldernamepublic/js/.svn"
     rm -R "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldernamepublic/img/.svn"
     rm -R "/Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/$foldernamepublic/css/.svn"
done



echo "STEP 11:"
echo "====================================================================="
echo "Run all then partners scripts"
partner_scripts=$(ls -f partners_scripts/*)
for filename in $partner_scripts
do
sh $filename
done
cp /Applications/XAMPP/xamppfiles/htdocs/migration/jon.sh /Applications/XAMPP/xamppfiles/htdocs/latest/storage/shell/final_migration.sh
cp -R /Applications/XAMPP/xamppfiles/htdocs/migration/partners_scripts/* /Applications/XAMPP/xamppfiles/htdocs/latest/storage/shell/partners_scripts
#newfilename=$(echo $filename | sed 's/\.tpl.php`/.blade.php/g')
#cat certifications2/$filename > certifications/blades/$newfilename


text=$(echo "
<?php
\$name=\$page_settings['name'];
\$head_title="\"Head Title\"";
\$certificate=[
'begin_date'=>'01/01/2017',
'dateearned'=>'01/01/2017',
'expiration_date'=>'01/01/2017',
'creditearned'=>'01/01/2017',
'course_title'=>'title',
]
?>
")


#silence the output by adding &>/dev/null at the end of command
#sed -Ei 's/body/div/g' certifications/blades/$newfilename &>/dev/null


#Inserting the $text in first line of the file
#printf '%s\n' 0a $text . x | ex certifications/blades/$newfilename



#Progress bar of completion
echo 'Converting the templates \r'
echo  '#####                     (33%)\r'

#sleep 2
echo 'Migrating the certificates \r'
echo  '#############             (66%)\r'

#sleep 3
echo 'Finalizing integration with Laravel \r'
echo  '#######################   (100%)\r'
echo  '\n'
#sleep 4


#clear the screen
#printf "\033c"
echo " "
echo " "
echo "\033[31m Thank you for your patience"
echo "\033[31m The migration is completed successfully"
echo " "
echo " "
echo " ============================================================================== "

echo "\033[31m           0000\033[0m_____________0000________0000000000000000__000000000000000000+\n\033[31m         00000000\033[0m_________00000000______000000000000000__0000000000000000000+\n\033[31m        000\033[0m____000_______000____000_____000_______0000__00______0+\n\033[31m       000\033[0m______000_____000______000_____________0000___00______0+\n\033[31m      0000\033[0m______0000___0000______0000___________0000_____0_____0+\n\033[31m      0000\033[0m______0000___0000______0000__________0000___________0+\n\033[31m      0000\033[0m______0000___0000______0000_________000___0000000000+\n\033[31m      0000\033[0m______0000___0000______0000________0000+\n\033[31m       000\033[0m______000_____000______000________0000+\n\033[31m        000\033[0m____000_______000____000_______00000+\n\033[31m         00000000\033[0m_________00000000_______0000000+\n\033[31m           0000\033[0m_____________0000________000000007;"

#setting text color to red
echo "\033[31m"
echo " ============================================================================== "