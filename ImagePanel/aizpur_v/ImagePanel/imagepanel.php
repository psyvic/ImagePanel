#!/usr/bin/env php
<?php
// imagepanel.php for imagepanel in /home/vic/Desktop/piscine/PHP/ImagePanel/aizpur_v/ImagePanel
// 
// Made by AIZPURUA Victor Hugo
// Login   <aizpur_v@etna-alternance.net>
// 
// Started on  Fri Apr  7 09:23:04 2017 AIZPURUA Victor Hugo
// Last update Sat Apr  8 09:11:15 2017 AIZPURUA Victor Hugo
//


$file = (file_get_contents($argv[1]));
$re = '/<img[^>]+src="(http[^"]+.(?:GIF|gif|JPEG|jpeg|jpg|JPG|PNG|pgn';
$re = $re . '))"[^>]*>/';
$i = $argc - 1;
$k = 0;
preg_match_all($re, $file, $images);
mkdir("$argv[2]");
while (isset($images[1][$k]))
  {
    $new_image = imagecreatefromjpeg($images[1][$k]);
    imagejpeg($new_image, "./$argv[2]/$argv[2]$k");
    $k = $k + 1;
  }
echo "$k images copied";
echo "\n";

