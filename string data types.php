

<?php

$name= "shiza is a  web developer" ;
echo  "$name";
// strlen = string length
echo "the length of my string is " . strlen("$name") . "<br>";
// strlen = string reverse
echo  "the reverse of my string is " . strrev("$name") . "<br>";
    // str_word_count  is used to count the words
echo  " count words in my string is "  . str_word_count("$name") . "<br>";
// strpos is used to find the path of a word if we want to see some 
echo  " pos of  my string is "  . strpos("$name", "web" ) . "<br>";
// str_replace is used to replace a word within a new word and also give....string variablr where you want to change something
// shiza wo text ha jiss ko hmm replace karna chaty ha ..or fatima wo text ha jo hmm add karwana chath ha ..$name  string ha ..jis my replacing karwany ha
echo  " after peplace the string is " . str_replace("shiza" ,"fatima", $name) . "<br>";
// str_repeat is used to repeat a text ...if we want to repeat a text ..jitni bar hmm chayy..
echo  " in repeat " . str_repeat( $name,5) . "<br>";
    echo "<pre>" ;
  echo rtrim("   shiza is an Adcocate  ") . "<br>";
  echo ltrim("   shiza is an Adcocate  ");

   echo "</pre>" ;
?>