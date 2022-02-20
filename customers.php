<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
        button{
            transition: 1.5s;
        }
        button:hover{
            background-color:#616C6F;
            color: white;
        }
    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Smart Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transactions.php">Transfer History</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">Currency Convertor</a>
        </li> -->
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
  

<body style="background-image : url(img/customer.jpg)">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>



<div class="conatiner">
    <h2 class="text-center pt-4" style="color : white">Our Customers</h2>
    <br>
    <div class="row">
        <div class="col">
            <div class="table-responsive-sm">
            <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color : white">
                <thead style="color : white"> 
                <tr>
                <th scope="col" class="text-center py2">Account no</th>
                <th scope="col" class="text-center py2">Account holder name</th>
                <th scope="col" class="text-center py2">E-Mail</th>
                <th scope="col" class="text-center py2">Account Balance(in Rs.)</th>
                <th scope="col" class="text-center py2">Transfer Money</th>

                </tr>
                </thead>
                <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : white;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> 
                        <button type="button" class="btn" style="background-color : #A569BD;">Transfer money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                    </tbody>
            </table>

            </div>
        </div>

    </div>

</div>
<footer class="text-center mt-2 py-5">
        <p>&copy 2022  <b>Shreya Thorat</b> </br>Chairman, Smart Foundation</p>
</footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>