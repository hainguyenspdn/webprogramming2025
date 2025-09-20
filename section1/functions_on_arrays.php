<?php
$fruits = ["Apple","Banana"];
array_unshift($fruits,"Orange","Mango");
$element = array_shift($fruits);

count($fruits);
in_array("Orange",$fruits);
sort($fruits);

function square($n){
  return $n*$n;
}
function isOdd($n){
  return $n % 2 == 1;
}
$numbers = [4,5,6,7];
// $newNumbers = array_map("square",$numbers);
$newNumbers = array_filter($numbers,'isOdd');
// print_r($newNumbers);
// $fruits?
// $element?

$words = ["Hello","VietNam","!"];
$result1 = implode($words);

$csv = "12,5,7,4";
$result2 = explode(",",$csv);

print_r($result2);
?>