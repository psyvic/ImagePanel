#!/usr/bin/env php
   <?php
   // imagepanel.php for imagepanel in /home/vic/Desktop/piscine/PHP/ImagePanel/aizpur_v/ImagePanel
   // 
   // Made by AIZPURUA Victor Hugo
   // Login   <aizpur_v@etna-alternance.net>
   // 
   // Started on  Fri Apr  7 09:23:04 2017 AIZPURUA Victor Hugo
// Last update Sat Apr  8 10:40:22 2017 AIZPURUA Victor Hugo
   //
echo $argc;
if (($argv[1] != "-g") && ($argv[1] != "-p") && ($argv[1] != "-j") && ($argc > 4))
  {
  echo "Error, option not supported/Too many arguments\n";
  echo "Please use this format:\n";
  echo "php imagepanel.php [-g|-p|-j] url base\n";
  echo "-g:images outputed will be in format gif\n";
  echo "-p:images outputed will be in format png\n";
  echo "-j:images outputed will be in format jpeg\n";
  }
else if (file_get_contents($argv[2]) == NULL)
  echo "Please enter a valid url\n";
else
  {
    $file = (file_get_contents($argv[2]));
    $re = '/<img[^>]+src="(http[^"]+.(?:GIF|gif|JPEG|jpeg|jpg|JPG|PNG|pgn';
    $re = $re . '))"[^>]*>/';
    $k = 0;
    preg_match_all($re, $file, $images);
    mkdir("$argv[3]");
    while (isset($images[1][$k]))
      {
	$new_image = imagecreatefromjpeg($images[1][$k]);
	if ($argv[1] == "-g")
	  imagegif($new_image, "./$argv[3]/$argv[3]$k");
	else if ($argv[1] == "-p")
	  imagepng($new_image, "./$argv[3]/$argv[3]$k");
	else
	  imagejpeg($new_image, "./$argv[3]/$argv[3]$k");
	$k = $k + 1;
      }
    echo "$k images copied";
    echo "\n";
  }

