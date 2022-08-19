<?php
 echo " using while loop in php  <br>";
echo   "now   we use while loop  <br>";

$s = array("shiza", "fiza", "ahmad", "hasseeb",);
print_r("array");
echo count($s);
$a = 0;
while( $a < count($s)){
    echo "the number is  " .($s[$a]) . "<br>";
    $a++;
}


?>