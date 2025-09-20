<?php
  $filePath = "./numbers.txt";
  if(file_exists($filePath)){
    $content = file_get_contents($filePath);
    $number_array = explode(",",$content);
    $sum = 0;
    foreach($number_array as $number){
      $sum += $number;
    }
    echo "Sum: $sum";
  }
?>