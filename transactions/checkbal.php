<?php
include '../partial/nav.php';
require '../bankdb.php';
include '../links.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     <title>Document</title>
</head>

<body>
     <div class="card mx-auto col-md-6 mt-3" style="width: 100vw; height: 16rem; color:azure;  border:4px solid #ea7186; border-radius:4px; background:#7A77B9;">
          <div class="card-body">
               <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                         $sqlAdd = "SELECT `acno` FROM `phpbank` ORDER BY `tno` DESC LIMIT 1";
                         $acnoCheck = mysqli_query($conn, $sqlAdd);
                         
                         if($acnoCheck){
                              while ($row = mysqli_fetch_array($acnoCheck, MYSQLI_ASSOC)) {
                                   $netValCheck = "{$row['acno']}";
                                   (int)$netValCheck;
                                   echo "<h2> Total Amount: $netValCheck </h2>";    
                              }
                         }
                    }
               ?>

               <form method="post">
                    <button type="submit" class="btn btn-primary" style="width: 20rem; color:azure; background:#ea7186;">Click to Check Your Balance</button>
               </form>
               <a  href="../bpitBank.php" class="button-prymary card-link col-md-4 mx-4" style="color:azure; border:2px solid #ea7186; border-radius:4px; width: 10rem">Home</a>
          </div>
     </div>
</body>

</html>