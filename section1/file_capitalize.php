<?php
  $file_path = "./name.txt";
  $output_file = "./name_capitalize.txt";
  if(file_exists($file_path)){
    $file_handle = fopen($file_path,"r");
    $outputfile_handle = fopen($output_file,"w");
    do{
      $line = fgets($file_handle);
      $uppercaseLine = mb_strtoupper($line);
      fwrite($outputfile_handle,$uppercaseLine);
      echo $uppercaseLine."<br/>";
    }
    while($line!=false);
    fclose($file_handle);
    fclose($outputfile_handle);
  }
?>