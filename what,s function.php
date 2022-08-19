
<?php
echo  "welcome to php functions  <br>";

function processmarks($marksarr) {
    $sum = 0;
    foreach ($marksarr as  $value) {
        $sum += $value;
    }
    $return = $sum;
}
   $shiza =[72,88,92,81,45,54];
   $summarks = processmarks($shiza) ;

 $fiza =[79,89,92,88,96,94];
   $summarksf = processmarks($fiza);

echo  "shiza marks out of 600 is $summarks  <br> ";
echo  "fiza marks out of 600 is  $summarksf  <br>";

?>