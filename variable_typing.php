<?php
  $number = 12345 * 67890;
  // (string, start, length);
  // Automatic conversion from a number to a string
  echo substr($number, 3, 1);
  echo "\n"; // Need to find a better way to do a newline

  $pi = "3.1415927";
  $radius = 5;
  echo $pi * ($radius * $radius);
?>