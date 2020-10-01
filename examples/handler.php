<?php

// цель обработчика, удалять логи старше 2-х дней
$today = getdate();
$hours48 = 60*60*24*2;
$dayBeforeYesterday = $today[0] - $hours48;

$dir = getcwd();

if (is_dir($dir)) {
  if ($dirOpen = opendir($dir)) {

    while (($file = readdir($dirOpen)) != false) {
      $fileDateCreate = filemtime($file);
      
      if ($dayBeforeYesterday > $fileDateCreate) {
        unlink($file);
      }
    }
    closedir($dirOpen);
  }
}