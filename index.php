<?php
function filter_content($content){
    $contentText = '';
    $output = preg_match_all('/\<div.+id=\"page-inner\"\>(.*)\<\/div\>/is',$content,$matches);
    $contentText = isset($matches[1][0])?$matches[1][0]:'';
    return $contentText;
}

function callWeb($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60);
    $content = curl_exec($curl);

    if (curl_exec($curl) === false) {
        return false;
    } else {
        return filter_content($content);
    }
}



//print filter_content( curl_exec($curl) );



$files = scandir('ready');
foreach($files as $file) {
    if ($file!='.' && $file!='..') {
        $partnername = $file;
        $file = str_replace('theme','', $file);
        $url = "http://$file.realcme.net/cms/";
        $html = callWeb($url);
        if ($html){
            $err = file_put_contents("ready/$partnername/header.blade.php");
            echo $err."<br>";
        }
    }
    break;
}