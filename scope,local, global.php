   

   <?php
   echo "now we learning about scope of variable <br>";

  $a = 105;    //  globa variables
  $b = 5763; 
  function printValue(){
   // global $a, $b;
   $a =555;   //local vaeiables
   $b = 198;
   echo " <br> the value of variable a is $a and b is $b";
  }
echo $a;

printValue();
echo " <br> the value of variable a is $a and b is $b";
  echo "<br>" ;
// super global variable
echo var_dump($GLOBALS);
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>