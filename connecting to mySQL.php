<?php
echo  "welcome to the stage where ew are ready to connecting a database  <br> ";

// way to connect to a MySQL
//   1. MySQLI Extension
//   2.PDO

    //     databaes connecting method
    //    database ko hmm three method karty ha
    $servername = "localhost"; 
       $username = "root";
       $password  = "";
   $conn = mysqli_connect( $servername,  $username, $password );
//    supose agar hamara connection successful ni hota tu hmm aik alag..if gde.. use kary gy
if(!$conn){
    die("your connection was not successful " . mysqli_connect_error());
}
else{
echo "your connection are successful! ";

}
?>
