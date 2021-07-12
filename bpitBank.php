<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


     <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Righteous&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <title>Bank Of BPIT</title>
</head>

<body>

     <?php
     include 'partial/nav.php';
     // require 'transactions/add.php';
     ?>

     <div style="background: #EBE8E7;  padding:2rem">
          <div class="card mx-auto col-md-6 " style="width: 100vw; height: 20rem; color:azure; background:#7A77B9;  border:4px solid #EA7186; border-radius: 4px;">
               <div class="card-body">
                    <h1 class="card-title" style="text-align: center; color:#EA7186; font-family: Righteous, cursive;">Bank Of BPIT</h1>
                    <h3 style="text-align: center; font-family: 'Changa', sans-serif;">A mini project given by Dr. Achal Kaushik to Chandan 45 and Raghav 114. PHP, XAMPP(as server), PHP-MYSQL(as database) and BOOTSTRAP(as framework) have been used to completed this project(BpitBankOfBpit).</h3>
               </div>
          </div>

          <div style="border: 2px solid none; border-radius:4px;  display:flex;  " class="  col-md-6 mt-3 mb-3">
               <div class="card   mx-2 col-md-6 mt-3" style="width: 28rem; height: 15rem; color:azure; background:#7A77B9;">
                    <div class="card-body">
                         <h5 class="card-title" style="color:#EA7186; font-family: Righteous, cursive; font-size:1.8rem;">Add Amount</h5>
                         <p class="card-text">You can save your money to your bank account securely. dont try to put negative values although it is not provided in Bank ATMs. </p>
                         <a href="transactions/add.php" class="card-link " style="color:#EA7186; font-family: Righteous, cursive;">Click</a>
                    </div>
               </div>

               <div class="card   mx-2 col-md-6 mt-3" style="width: 28rem; height: 15rem; color:azure; background:#7A77B9;">

                    <div class="card-body">
                         <h5 class="card-title" style="color:#EA7186; font-family: Righteous, cursive; font-size:1.8rem;">Withdraw</h5>
                         <p class="card-text">To withdraw your money from your bank account. dont share your OTP with any other person and don't forget to count your money on your finger tips.</p>
                         <a href="transactions/withdraw.php" class="card-link" style="color:#EA7186; font-family: Righteous, cursive;">Click</a>
                    </div>
               </div>

               <div class="card   mx-2 col-md-6 mt-3" style="width: 28rem; height: 15rem; color:azure; background:#7A77B9;">

                    <div class="card-body">
                         <h5 class="card-title" style="color:#EA7186; font-family: Righteous, cursive; font-size:1.8rem;">Check Balance</h5>
                         <p class="card-text">Here you can see your current balance. may be you added balance to another person's account or you added it in Modi Care Fund. </p>
                         <a href="transactions/checkbal.php" class="card-link" style="color:#EA7186; font-family: Righteous, cursive;">Click</a>
                    </div>
               </div>

               <div class="card   mx-2 col-md-6 mt-3 mb-3" style="width: 28rem; height: 15rem; color:azure; background:#7A77B9; font-family: Righteous, cursive;">

                    <div class="card-body">
                         <h5 class="card-title" style="color:#EA7186; font-size:1.8rem;">Secure Exit</h5>
                         <p class="card-text">You can Exit now if your doing nothing here. if you have any queries or complaint please go to court and case a file on the Bank, may 10 or 20 years later your issue will be sorted.</p>
                         <a href="transactions/exit.php" class="card-link" style="color:#EA7186; font-family: Righteous, cursive; ">Click</a>
                    </div>
               </div>
          </div>
     </div>

</body>

</html>