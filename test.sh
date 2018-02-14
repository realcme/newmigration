#!/usr/bin bash

function getWebsiteContent(){
partnername=$1
url="http://$partnername.realcme.net/cms"
content=$(wget $url -q -O -)
path="ready/$1theme/fullhtml.php"
echo $content > $path
echo $partnername
}



#ls -d /Applications/XAMPP/xamppfiles/htdocs/migration/ready/*/ > templates.txt
for filename in $(cat templates.txt)
do
file="$filename""page.blade.php"
foldername=$(basename $filename)
filename="ready/$foldername""theme/fullhtml.php"
filename2="ready/$foldername""theme/headerhtml.php"


startline=$(cat -n $filename | grep " <div id=\"page-inner\">" | awk '{print $1;}')
endline=$(cat -n $filename | grep "<!-- \/#page-inner, \/#page -->" | awk '{print $1;}')

    if [  -d "ready/$foldername" ]; then
        if [  -f "ready/$foldername""theme/fullhtml.php" ]; then
            if  [[ "$startline" =~ ^[0-9]+$ ]]; then
                sed -n "$startline,$endline p" $filename > $filename2
            fi
        fi
    fi
done

