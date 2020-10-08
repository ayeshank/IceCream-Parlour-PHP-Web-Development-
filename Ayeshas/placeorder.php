<!DOCTYPE html>
<html lang="en">
<head>
    <title>Placeorder |</title>
    <link rel="stylesheet" href="user.css">
    <style>
        body
{
    background-image: url(7.jpg);
}
    #newj
    {
        padding:5%;
        font-weight:bold;
    }
    #newj1
    {
        padding:5%;
        font-weight:bold;
        background-color:rgb(197, 193, 193);
        
    }
    </style>
</head>
<body>
<?php include("connect.php")?>
<?php include("menu.php")?>
<?php
$ordertotal =$_SESSION['ordertotal'];
$shipping=150;
$totalamount=$ordertotal+$shipping;
?>
<br><br><br><br>
<div style="width:100%;" id="placeorderdiv0"> 


<div style="float: left; width:70%;height: auto;background-color:transparent;" id="placeorderdiv1">


<h1>Shipping Details</h1>
<hr style=""><br><br>
<form method="post" ,action="user.php" style="margin-left:20%;">
<div id="placeorderdiv2" style="background-color:transparent;">
<?php
// print_r($_GET);
$emailuser=$_GET['id'];
      $sqll= "SELECT * FROM userinfo WHERE email='$emailuser'";
      $hello = $conn->query($sqll);
      while ($row = $hello->fetch_assoc()) 
      { 
          ?>
    <label for="email" style="color: black;font-weight: bolder;font-size: large;">Email</label><br>
    <input type="email" class="forminput"  placeholder="Email" name="email" value=" <?php echo $row['email']?> "><br><br>
    <label for="name" style="color: black;font-weight: bolder;font-size: large;">Full name</label><br>
    <input type="text" class="forminput"  placeholder="Fullname" name="fname" value=" <?php echo $row['fname']?> "><br><br>
    <label for="address" style="color: black;font-weight: bolder;font-size: large; ">Street Address</label><br>
    <input type="address" class="forminput"  placeholder="Address" name="address" value=" <?php echo $row['address']?> "><br><br>
    <select name="country" value=" <?php echo $row['country']?> ">
        <option value="Select country">Select country</option>
        <option value=""></option>
      <option value="Pakistan">Pakistan</option>
    </select>
    <br>
  <br>
    <input type="text" class="forminput1"  placeholder="City" name="city" value=" <?php echo $row['city']?> ">
    <input type="text" class="forminput1"  placeholder="Zip/Postal Code" name="postalcode" value=" <?php echo $row['postalcode']?> ">
  <br><br>
    <input type="text" class="forminput1"  placeholder="Phone Number" name="phno" value=" <?php echo $row['phno']?> ">
    <input type="text" class="forminput1"  placeholder="CNIC Number" name="cnic" value=" <?php echo $row['cnic']?> ">
    <br><br>
    <!-- <button type="submit" name="register" value="register" id="btn"style="width:25.5%;font-size:large;">Confirm</button> -->
    <button type="submit" name="update" value="update" id="btn" style="width:52%;font-size:large;">Update</button>
    <?php } ?>
  </div>
  <br>
<br><br>
</div>
<div style="float:right;width:30%;background-color:transparent;" id="placeorderdiv">
                          <br><br><br><br><br><br><br>
                          <p style="background-color:black;color:white;padding:10px;width:60%;">Order Summary</p>
      
      <table id="new" style="width:70%;">
      <tr>
      <td id="newj1">Order Total</td>
      <td id="newj">Rs <?php echo $ordertotal; ?></td>
      </tr>
      <tr>
      <td id="newj1">Shipping</td>
      <td id="newj">Rs <?php echo $shipping; ?></td>
      </tr>
      <tr>
      <td id="newj1">Total Amount</td>
      <td id="newj">Rs <?php echo $totalamount; ?></td>
      </tr>
      </table><br><br>
      <button  id="btn" style="width:45%;background-color: rgb(232, 247, 33);color:black;font-size:large;" ><a href="thankyou.php" style="font-family: Arial, Helvetica, sans-serif;color:black;padding:0px;">Place order</a></button>
      </div>
      </div>

<?php
        if(isset($_POST['update']))
        {
    $email=$_POST['email'];
    $name=$_POST['fname'];
    $addr=$_POST['address'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $pcode=$_POST['postalcode'];
    $pno=$_POST['phno'];
    $cnic=$_POST['cnic'];

    $sql= "UPDATE userinfo SET email='$email',fname='$name',address='$addr',country='$country',city='$city',postalcode='$pcode',phno='$pno',cnic='$cnic' WHERE email='$emailuser'";
        if ($conn->query($sql) === TRUE) 
        {
            $last_id = $conn->insert_id;
            echo "\nYour shipping information had been updated";
        } 
        else { echo "Error: " . $sql . "<br>" . $conn->error; }
      }
    $conn->close();

?>


</body>
</html>