#!/usr/bin/env php
<?php
// imagepanel.php for imagepanel in /home/vic/Desktop/piscine/PHP/ImagePanel/aizpur_v/ImagePanel
// 
// Made by AIZPURUA Victor Hugo
// Login   <aizpur_v@etna-alternance.net>
// 
// Started on  Fri Apr  7 09:23:04 2017 AIZPURUA Victor Hugo
// Last update Fri Apr  7 17:33:13 2017 AIZPURUA Victor Hugo
//

$file = (file_get_contents($argv[1]));
$img = "#<img .* src=\"(.*)\"#isU";
$i = 2;
preg_match_all($img, $file, $images);
var_dump($images);
echo "$argc";
echo "\n";
echo "$argc";
echo "\n";
mkdir('$argv[$i]);