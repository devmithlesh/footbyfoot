<?php
$Servername = "localhost";
$Username = "root";
$password = "";
$dbname = "signup";

$conn = mysqli_connect($Servername, $Username, $password, $dbname);

if($conn){
    echo "";
}
else{
    die("connection failed because".mysqli_connect_error());

}


?>