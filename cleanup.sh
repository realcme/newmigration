#!/usr/bin bash
echo "Starting the Cleanup work"
#Step 5
#Footers: Remove unneseccary tags like </body> and </html>

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


echo "Ending the Cleanup work"