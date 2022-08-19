
<?php
echo "welcome to associative array in php <br> ";
  $arr = array("shiza", "fiza", "ahmad");
  echo  $arr[0];
  echo  $arr[1];
  echo  $arr[2];
// associative array
// favourite color...favcol...
 $favcol = array('shiza'=> 'grey', 'fiza'=> 'red', 'noor'=> 'brown', 'anam'=> 'white',
                    '8' => 'this');
                    echo  "<br>";
//  echo $favcol['shiza'];
//  echo  "<br>";
//  echo $favcol['noor'];
//  echo  "<br>";
//  echo $favcol['8'];
//  echo  "<br>";

foreach ($favcol as $key => $value) {
    echo " the favourite color of $key  is  $value  <br> ";
}

 ?>