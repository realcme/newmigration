#!/usr/bin/env bash
ls -d /opt/realcme/learner/www/cms/sites/all/themes/zen/*/ > directories.txt
#sed 's,/,,g' directories.txt

for foldername in $(cat directories.txt)
do

foldername2=$(basename $foldername)

echo $foldername
echo $foldername2

  #ssh jontoshmatov@ec2-52-90-29-135.compute-1.amazonaws.com "mkdir -p /home/jontoshmatov/migration/$foldername"
  rsync -azP $foldername jontoshmatov@ec2-52-90-29-135.compute-1.amazonaws.com:/var/www/html/latest/public/partners/learner/$foldername2

done