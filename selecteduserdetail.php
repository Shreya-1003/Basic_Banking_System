<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);


    // constraint to check input of negative value by user
    if (($amount)<0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check zero values
    else if($amount == 0){

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    }

    else {
        
        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($conn,$sql);
     

        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$to";
        mysqli_query($conn,$sql);
        
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query=mysqli_query($conn,$sql);

        if($query){
            echo "<script> alert('Hurray! Transaction is Successful');
                            window.location='transactions.php';
                   </script>";
        }

        $newbalance= 0;
        $amount =0;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Easy Money Transfer</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/table.css">
      <link rel="stylesheet" type="text/css" href="css/navbar.css">
  
      <style type="text/css">
        button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}

    </style>
</head>

<!-- Navigation bar-->
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
          <a class="nav-link active" aria-current="page" href="customers.php">Our Customers</a>
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
      

<body style="background-color: rgb(17 34 193 / 50%);" > 
 
        <div class="container">
            <h2 class="text-center pt-4" style="color : black;">Easy Money Transfer</h2>
            <?php 
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class=""tabletext> <br> 
            <div>
                <table class="table table-striped table-condensed table-bordered">
                <tr style="color : dark-grey;">
                    <th class="text-center">Account No.</th>
                    <th class="text-center">Account holder Name</th>
                    <th class="text-center">E-Mail</th>
                    <th class="text-center">Account Balance(in Rs,)</th>
                </tr>
                <tr style="color : dark-grey">
                    <th class="py-2"><?php echo $rows['id'] ?></th>
                    <th class="py-2"><?php echo $rows['name'] ?></th>
                    <th class="py-2"><?php echo $rows['email'] ?></th>
                    <th class="py-2"><?php echo $rows['balance'] ?></th>

                </tr>
                </table>
            </div>
            <br><br><br>
            <label style="color : black;"> <b>Transfer TO: <b> </label>
            <select name="to" class="form-control" required>
                <option value="disabled selected">Choose account</option>
                <?php
                    include 'config.php';
                    $sid=$_GET['id'];
                    $sql = "SELECT * FROM users where id!=$sid";
                    $result=mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo "Error ".$sql."<br>".mysqli_error($conn);
                    }
                    while($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['id'];?>" >
                
                        <?php echo $rows['name'] ;?> (Balance: 
                        <?php echo $rows['balance'] ;?> ) 
           
                    </option>
                <?php 
                    } 
                ?>
                <div>
            </select>
            <br>
            <br>
                <label style="color : black;"> <b>Amount:</b> </label>
                <input type="number" class="form-control" name="amount" required>
                <br><br>
                <div class="text-center">
                <button class="btn btn-outline-white" name="submit" type="submit" id="myBtn" style="background-color: white">Transfer Money</button>
                </div>
        </form>
        </div>
        
<footer class="text-center mt-2 py-5">
        <p>&copy 2022  <b>Shreya Thorat</b> </br>Chairman, Smart Foundation</p>
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
