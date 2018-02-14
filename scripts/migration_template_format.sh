#!/usr/bin/env bash
ls -d /Applications/XAMPP/xamppfiles/htdocs/latest/public/partners/learner/*/ > directories.txt
#sed 's,/,,g' directories.txt

for foldername in $(cat directories.txt)
do
foldername2=$(basename $foldername)
filename=$foldername"page.tpl.php"
foldername3=$(echo $foldername2 | sed -e 's/\//-/g')



if [  -f $filename ]; then
startline=$(cat -n $filename | grep "<body" | awk '{print $1;}')
endline=$(cat -n $filename | grep "</body>" | awk '{print $1;}')
hendline=$startline

    if  [[ "$startline" =~ ^[0-9]+$ ]]; then
    sed -n "$startline,$endline p" $filename > /Applications/XAMPP/xamppfiles/htdocs/latest/resources/views/learner/partners/$foldername3/template.blade.php
    fi

else
    mkdir /Applications/XAMPP/xamppfiles/htdocs/latest/resources/views/learner/partners/$foldername3
fi


done

#@section('content')
#@endsection