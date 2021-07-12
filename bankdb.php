<?php
// echo "Welocome, Ready to connect to mySQL Database <br>";
// way to connect mySQl Database
// 1. mySQLi extension
// 2. PDO(phh data object)


//Connecting to db
$servername = "localhost";
$username = "root";
$password = "";
$database = "banking";


//create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if (!$conn){
     die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
     <strong>Success!</strong> connection was successful.
     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>";
}



?>