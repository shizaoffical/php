<?php

// operator in php 
// 1.Arithamatics operator
// 2.Comperision operator
// 3.logical operator
// 4.Assigment operator
 $a =100;
 $b = 200;
 // 1.Arithamatics operator
 echo  "for a + b The Result is  " . ($a + $b) ."<br>";
 echo  "for a - b The Result is  " . ($a - $b) ."<br>";
 echo  "for a * b The Result is  " . ($a * $b) ."<br>";
 echo  "for a / b The Result is  " . ($a / $b) ."<br>";
 echo  "for a % b The Result is  " . ($a % $b) ."<br>";
 echo  "for a ** b The Result is  " . ($a ** $b) ."<br>";

// 4.Assigment operator
// $x =$a;
// echo  "for x is the value " . $x . "<br>";
$a += 48;
echo "for the value of a " . $a . "<br>";
$a -= 48;
echo "for the value of a " . $a . "<br>";
$a *= 48;
echo "for the value of a " . $a . "<br>";
$a /= 48;
echo "for the value of a " . $a . "<br>";
$a %= 48;
echo "for the value of a " . $a . "<br>";

// 2.Comperision operator
$u = 70;
$s = 60;
echo  "for x > y The Result is ";
 echo  var_dump($u > $s);
 echo  "<br>";
echo  "for x < y The Result is ";
 echo  var_dump($u < $s);
  echo "<br>"; 
 echo  "for x == y The Result is ";
 echo  var_dump($u == $s); 
 echo "<br>";

 echo  "for x <> y The Result is ";
 echo  var_dump($u <> $s);
 echo "<br>";

 // 4.Assigment operator
 $x = true;
 $y = false;
    // And  &&
 echo "for x && y the result is ";   
 echo  var_dump($x && $y);
 echo  "<br>";
    //    Or ||
 echo "for x || y the result is ";   
 echo  var_dump($x || $y);
 echo  "<br>";
    //   Not  !
    echo "for !x  the result is ";   
    echo  var_dump(!$x);
    echo  "<br>";
 ?>