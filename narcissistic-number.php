<?php

function narcissistic(int $number): bool {
  $array   = str_split($number);
  $nlenght = count($array);
  $sum = 0;

  foreach($array as $n){
    $sum += pow((int)$n, $nlenght);
  }
	
	if(($sum==$number) == 1) {
    return true;
	}else {
	  return false;
	}
	
}


echo narcissistic(153);
echo narcissistic(111);
