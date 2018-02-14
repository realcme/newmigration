#!/usr/bin bash

function getWebsiteContent(){
partnername=$1
url="http://$partnername.realcme.com/cms"
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
getWebsiteContent $foldername
done

