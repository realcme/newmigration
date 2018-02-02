#!/bin/bash


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


#Step 1
if [  $importfiles == yes ]; then
#Migrate all the templates from 244 server to local
rsync -azP jontoshmatov@107.21.181.244:/opt/realcme/learner/www/cms/sites/all/themes/zen/* /Applications/XAMPP/xamppfiles/htdocs/migration/templates/

#Progress bar of completion
echo 'Migrating the templates \r'
echo  '##                        (10%)\r'

#Migrate all the certs from 244 to local
rsync -azP jontoshmatov@107.21.181.244:/opt/realcme/learner/www/cms/sites/all/themes/cmecertificatetheme/* /Applications/XAMPP/xamppfiles/htdocs/migration/certifications/
fi
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


#Step 4
#Footers
ls -d templates/*/ > templates_footer.txt
COUNTER=1
for ffilename in $(cat templates_footer.txt)
do
file="$ffilename""page.tpl.php"
foldername=$(basename $ffilename)
if [  -f $file ]; then
fstartline=$(cat -n $file| grep "<div id=\"footer\"" | awk '{print $1;}')
fendline=$(cat -n $file | grep "</html>" | awk '{print $1;}')

#check if start and end lines are int
if  [[ "$fstartline" =~ ^[0-9]+$ ]]; then
#create a folder if it does not exists
if [ ! -d "footers/$foldername" ]; then
mkdir footers/$foldername
fi
newfile=footers/$foldername/footer.blade.php
echo $newfile
if  [[ "$fendline" =~ ^[0-9]+$ ]]; then
COUNTER=$[$COUNTER +1]
sed -n "$fstartline,1000000 p" $file > $newfile
echo $COUNTER
fi
fi
fi
done


newfilename=$(echo $filename | sed 's/\.tpl.php`/.blade.php/g')
cat certifications2/$filename > certifications/blades/$newfilename


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
printf '%s\n' 0a $text . x | ex certifications/blades/$newfilename



done
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
printf "\033c"
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