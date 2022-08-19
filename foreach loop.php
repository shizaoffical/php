

<?php

 echo " welcolme to the world of foreach loop  <br> ";
$arr = array("apple", "banana", "grapes", "orange", "mango",  "pinaple");

// for ($i=0; $i < count($arr)  ; $i++) { 
//     echo $arr[$i];


    // better way to do this ...foreach loop!
    foreach ($arr as  $value) {
        echo  "$value  <br>" ;
    }


?>