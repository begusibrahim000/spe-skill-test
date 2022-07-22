<?php

function find($integers) {
  $odds = [];
  $evens = [];
  foreach ($integers as $item) {
    if ($item % 2) array_push($odds, $item);
    else array_push($evens, $item);
  }
  return count($evens) === 1 ? $evens[0] : $odds[0];
}

echo find([2, 4, 0, 100, 4, 11, 2602, 36]);
echo "|";
echo find([160, 3, 1719, 19, 11, 13, -21]);
echo "|";
echo find([11, 13, 15, 19, 9, 13, -21]);
