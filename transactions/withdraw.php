<?php
include '../partial/nav.php';
include '../links.php';
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

     <?php
     require '../bankdb.php';
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $amount = $_POST['amount'];
          // echo $amount;
          // // $result = mysqli_query($conn, $sql);
          $sqlWith = "SELECT `acno` FROM `phpbank` ORDER BY `tno` DESC LIMIT 1";
          $acno1 = mysqli_query($conn, $sqlWith);

          if ($acno1) {
               while ($row = mysqli_fetch_array($acno1, MYSQLI_ASSOC)) {
                    $netVal = "{$row['acno']}";
                    (int)$netVal;
                    $netAmt = $netVal - $amount;
                    if ($netVal <= 0) {
                         echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                         <strong>Oops!</strong> you hve insufficient balance.
                         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                         </button>
                       </div>";
                    } elseif ($netVal < $amount) {
                         echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                         <strong>Warning!</strong> your withdrawal balance is higher than you net current balance.
                         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                         </button>
                       </div>";
                    }
                    $sqlInsert = "INSERT INTO `phpbank` (`acno`) VALUES('$netAmt')";
                    $sqlInsertResult = mysqli_query($conn, $sqlInsert);
                    if ($sqlInsertResult) {
                         echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                         <strong>Success!</strong> last transaction was successful.
                         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                         </button>
                       </div>";
                    }

                    // echo $netAmt;                    


               }

               echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
               <strong>Success!</strong> withdraw succesful.
               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
               </button>
             </div>";
          }
          // echo $netVal;

          // echo $netVal;
          // $netAmt = $acno1 - $amount;
          // $acno = $_POST['acno'];

          // $sqlInsert = "INSERT INTO `phpbank` (`acno`) VALUES('$netAmt')";
          // $sqlInsertResult = mysqli_query($conn, $sqlInsert);
          // if($sqlInsertResult){
          //      echo "transaction successful";
          // }
     } else {
          echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
          <strong>Transaction failed!</strong> Try Again later.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
     }


     ?>

     <div class="card  mx-auto col-md-6 mt-3" style="width: 100vw; height: 8rem; color:azure; background:#7A77B9; border:4px solid #ea7186; border-radius:4px;">
          <div class="card-body">
               <h2 class="card-title" style="text-align: center; color:#ea7186; font-family: Righteous, cursive; ">Withdraw Balance</h2>
          </div>
     </div>

     <div class="card  mx-auto col-md-6 mt-3" style="width: 100vw; height: 14rem; color:azure; border:4px solid #ea7186; border-radius:4px; background:#7A77B9;">
          <form method="post">
               <div class="form-group">
                    <label for="amount" class="mt-3">Enter Your Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="In Rupees" style="border:2px solid #ea7186;">
               </div>
               <button type="submit" class="btn btn-primary" style="width: 8rem; background:#ea7186;">Withdraw</button>
               <a href="../bpitBank.php" class="button-prymary card-link col-md-4 mx-4" style="color:azure; border:2px solid #ea7186; border-radius:4px">Home</a>
          </form>
     </div>
</body>

</html>