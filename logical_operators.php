<?php
  if ($hour > 12 && $hour < 14) dolunch();
  $j = 5;
  $k = 10;
  $j == 3 && $k == 2;
  $j == 3 and $k == 2; // Low-precedence
  $j < 5 || $j > 10;
  $j < 5 or $j > 10; // Low-precedence
  !($j == $k); // Not
  $j xor $k; // Exclusive or
  // xor returns a true value if either value is true, but a false value if both
  // inputs are true or both inputs are false.

  // Example when ONLY AND or OR are acceptable
  mysql_select_db($database) or die("Unable to select database");
?>