#!/usr/bin/env bash
ls -f /Applications/XAMPP/xamppfiles/htdocs/latest/resources/views/learner/pages/certifications/ > directories2.txt
#sed 's,/,,g' directories.txt

for foldername in $(cat directories2.txt)
do


mv /Applications/XAMPP/xamppfiles/htdocs/latest/resources/views/learner/pages/certifications/$foldername /Applications/XAMPP/xamppfiles/htdocs/latest/resources/views/learner/pages/certifications/${foldername//tpl/blade}

done



#resources/views/learner/pages/certifications/certificate-aace-amapracat1-default.tpl.php