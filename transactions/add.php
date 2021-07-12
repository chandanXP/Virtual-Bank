<?php
include '../partial/nav.php';
require '../bankdb.php';
include '../links.php';
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $acno = $_POST['acno'];

     $sqlAdd = "SELECT `acno` FROM `phpbank` ORDER BY `tno` DESC LIMIT 1";
     $acnoAdd = mysqli_query($conn, $sqlAdd);
     
     if($acnoAdd){
          while ($row = mysqli_fetch_array($acnoAdd, MYSQLI_ASSOC)) {
               $netValAdd = "{$row['acno']}";
               (int)$netValAdd;
               $netAmtAdd = $netValAdd + $acno;
                
               $sqlInsert = "INSERT INTO `phpbank` (`acno`) VALUES('$netAmtAdd')";
               $sqlInsertResult = mysqli_query($conn, $sqlInsert);
               if($sqlInsertResult){
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> last transaction was successful.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
               }
               else{
                    echo"<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Alert!</strong> last transaction was failed.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
               }

               // echo $netAmt;                    


          }
     }

     // $sql = "INSERT INTO `phpbank` (`acno`) VALUES ('$acno')";

     // $result = mysqli_query($conn, $sql,);
     

     //Add a new trip to the trip table in the database.
     // if ($result) {
     //      echo "The record has been inserted succesfully!<br> ".$result;
     // } else {
     //      echo " The record was not inserted successfully! Beacuse of the error: " . mysqli_error($conn) .$result;
     // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <title>Document</title>
</head>

<body>

     <div class="card mx-auto col-md-6 mt-3" style="width: 100vw; height: 8rem; border:4px solid #ea7186; border-radius:4px; color:azure; background:#7A77B9;">
          <div class="card-body">
               <h2 class="card-title" style="text-align: center; color: #ea7186; font-family: Righteous, cursive">Add Balance</h2>
          </div>
     </div>

     <!-- <form method="post">
          <input name="acno" id="acno">Enter Bank Number</input>
          <br>
          <button type="submit">Submit</button>
     </form> -->

     <div class="card mx-auto col-md-6 mt-3" style="width: 100vw; height: 14rem; color:azure; border:4px solid #ea7186; border-radius:4px; background:#7A77B9;">
          <form method="post">
               <div class="form-group">
                    <label for="acno" class="mt-3">Enter Your Amount</label>
                    <input class="form-control" style="border: 2px solid #ea7186"id="acno" name="acno" placeholder="In Rupees">
               </div>
               <button type="submit" class="btn" style="width: 8rem; background:#EA7186; color:azure; ">Add</button>
               <a href="../bpitBank.php" class="col-md-8 mx-4" style="color:azure; border:2px solid #ea7186; border-radius:4px">Home</a>
          </form>
     </div>


</body>

</html>