#!/usr/bin bash
partner_scripts=$(ls -f partners_scripts/*)
for filename in $partner_scripts
do
echo $filename
done