<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Some connections -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>

  </head>


  <body style="background-color: powderblue">

  <?php
  include 'navbar.php';   // Including the navbar
  ?>
  
      <div class="container-fluid">
      
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="border:5px solid blue;"> 
                  <h3>Welcome to</h3>
                  <h1>THE SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-left">
                <br><br>
                <h5 align="left"><i>&nbsp;&nbsp;Our Vision,Your Future</i></h5>
                <h6 align="center"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The Sparks Foundation Bank &nbsp;</i></h6>
              </div>
              <div class="img"><img src="\mybank\images\sparkbank.jpg" alt="SPARKS Bank" width=330px height=207.5px></div>
                          
            </div>

          <br>
          <h3 class="action"><span style="font-family: Trebuchet MS">Select an option</h3></span>
            <div class="column activity text-center">
                  <div class="col-md act">
                    <br>
                    <br>
                    <a href="transaction_history.php"><button><h5><span style="font-family: Trebuchet MS">Transaction History</span></h5></button></a>
                  </div>
                  <div class="col-md act">
                    <br>
                    <a href="money_transfer.php"><button><h5><span style="font-family: Trebuchet MS">View available customers</span></h5></button></a>
                    <br>
                  </div>         
            </div>       
      </div>
      <br>
      <footer class="text-right mt-5 py-2">
        <p><h6 align="center">Created By: <b>Gouri Chourasiya</h6></b></p>
      </footer>
     
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>