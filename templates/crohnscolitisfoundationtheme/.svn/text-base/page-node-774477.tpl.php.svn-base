<?php

global $brand;

$url =  'http://' . $_SERVER['SERVER_NAME'];
$tmp = explode(".", parse_url($url, PHP_URL_HOST));
$extension = end($tmp);

$location = 'http://'.$brand.'.realcme.';

switch ($extension) {
    case 'org':
        echo 'REDIRECT FOR THIS NID IS ACTIVE FOR .COM';
        break;
    case 'net':
        echo 'REDIRECT FOR THIS NID IS ACTIVE FOR .COM';
        break;
        break;
    case 'com':
        $nid = 843493;
        $uri = 'cms/node/';
        header('Location: '.$location.$extension.'/'.$uri.$nid);
        break;
}

exit;

