<?php

/*
  $folder = $_SERVER['DOCUMENT_ROOT'] .FOLDER. '/images/variants/v1/ceiling/';
  $files1 = scandir($folder);
  //print_r($files1 );
  $n = 0;
  foreach($files1 as $i => $file){
  if(strlen($file) >4 ){
  echo '<div class="ceiling ceiling-'.$n.'" style="display:none">';
  echo file_get_contents($folder.$file);
  echo '</div>';
  $n++;
  }
  }
 * 
 */

foreach ($data[0]['ceiling'] as $n => $arr) {
	//print_r(SVG_SELLING_FOLDER.$arr['svg']);
	echo '<div class="ceiling ceiling-' . $n . '" style="display:none">';
	echo file_get_contents(SVG_SELLING_FOLDER.$arr['svg']);
	echo '</div>';
}