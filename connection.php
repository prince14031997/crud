<?php  
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "motivation";

$connection = mysqli_connect($serverName, $userName, $password, $dbName);

// if(!$connection){
//     echo "database is not connected";
// }
// else{
//     echo "database connected";
// }
// ?>