  <?php
  echo " welcome to multi dimensional array  <br>";


//   muti dimensional array means that... an array contain ..ome or more array..mutlab ky aik array..ky under aik sy..zayada array ho sakti ha... 
   $multiarr = array(array(10,11,37,78,79,58),
                    array(85,85,77,99,56,86),
                    array(85,85,77,99,56,86));
// for ($i=0; $i < count($multiarr); $i++) { 
//     echo var_dump($multiarr[$i]);
//     echo  "<br>";
// }

for ($i=0; $i < count($multiarr); $i++) { 
        for ($j=0; $j <count($multiarr[$i]) ; $j++)
     { 
          echo  $multiarr[$i][$j];
          echo  " ";
        }
echo "<br>";
}

?>