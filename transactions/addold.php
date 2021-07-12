<?php
include '../partial/nav.php';
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
     <div class="card bg-dark mx-auto col-md-6 mt-3" style="width: 100vw; height: 8rem; color:azure;">
          <div class="card-body">
               <h2 class="card-title" style="text-align: center;">Add Balance</h2>
          </div>
     </div>
     <div class="card bg-dark mx-auto col-md-6 mt-3" style="width: 100vw; height: 14rem; color:azure;">
          <form>
               <div class="form-group">
                    <label for="exampleInputAmount" class="mt-3">Enter Your Amount</label>
                    <input type="text" class="form-control" id="amount" placeholder="In Rupees">
               </div>
               <button type="submit" class="btn btn-primary" style="width: 8rem;">Add</button>
               <a href="../bpitBank.php" class="button-prymary card-link col-md-5 mx-4" style="color:azure; border:2px solid azure; border-radius:2px">Home</a>
          </form>
     </div>
</body>

</html>