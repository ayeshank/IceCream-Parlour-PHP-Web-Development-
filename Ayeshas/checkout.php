<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout |</title>
    <link rel="stylesheet" href="user.css">
    <style>
      body
{
    background-image: url(7.jpg);
}
      </style>
    
</head>
<body>
<?php include("menu.php")?>
<br><br><br><br>
<div style="width:100%;"> 


<div style="float: left; width:60%;height: auto;background-color:transparent;">


<h1>Required Information</h1>
<hr style=""><br><br>
<form method="post" ,action="user.php" style="margin-left:20%;">
<div>
    <label for="email" style="color: black;font-weight: bolder;font-size: large;">Email</label><br><br>
    <input type="email" class="forminput"  placeholder="Email" name="email" ><br><br>
    <label for="name" style="color: black;font-weight: bolder;font-size: large;">Full name</label><br><br>
    <input type="text" class="forminput"  placeholder="Fullname" name="fname"><br><br>
    <label for="address" style="color: black;font-weight: bolder;font-size: large; ">Street Address</label><br><br>
    <input type="address" class="forminput"  placeholder="Address" name="address"><br><br>
    <select name="country">
        <option value="Select country">Select country</option>
        <option value=""></option>
      <option value="Pakistan">Pakistan</option>
    </select>
    <br>
  <br>
    <input type="text" class="forminput1"  placeholder="City" name="city" >
    <input type="text" class="forminput1"  placeholder="Zip/Postal Code" name="postalcode" >
  <br><br>
    <input type="text" class="forminput1"  placeholder="Phone Number" name="phno">
    <input type="text" class="forminput1"  placeholder="CNIC Number" name="cnic">
    <br><br>
    <button type="submit" name="register" value="register" id="btn" style="margin-right:50%;">Submit & Continue</button>
  </div><br>
<br><br>
</div>
            <div style="float:right;width:40%;background-color:transparent;">
                          <br><br><br><br><br><br><br><br>
              <form id="form1" method="post" ,action="" style="margin-left:30%;">
                  <legend>Already Registered?</legend>
                  <hr style="margin-right:60%;width:55%;">
                  <br>
                  <input type="email" class="forminput"  placeholder="Enter e-mail" name="emailr" >
                  <h4 style="margin-left:24%;">Or</h4>
                  <input type="text" class="forminput"  placeholder="Enter Cnic" name="cnicr" >
                  <h4 style="margin-left:24%;">Or</h4>
                  <input type="text" class="forminput"  placeholder="Enter Mobile Number" name="phnor"><br><br>
                  <button type="submit" name="find" value="find" id="btn" style="width:55%;">Search</button>
                </form><br>
                <!-- <a href="placeorder.php"><button id="btns" >View order</button></a>
                <style>
                    #btns
                    {
                    float:left;
                    width:55%;
                    color:white;
                    background-color:rgba(126, 122, 122, 0.671);
                    padding:10px;
                    font-size:23px;
                    }
                </style> -->
                
            </div>
</div>
<br>
<?php
 

?>
<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iceparlour";

    $conn =  new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        if(isset($_POST['register']))
        {
    $email=$_POST['email'];
    $name=$_POST['fname'];
    $addr=$_POST['address'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $pcode=$_POST['postalcode'];
    $pno=$_POST['phno'];
    $cnic=$_POST['cnic'];

    $sql= "INSERT INTO userinfo(email,fname,address,country,city,postalcode,phno,cnic) 
    VALUES('$email','$name','$addr','$country','$city','$pcode','$pno','$cnic')";

        if ($conn->query($sql) === TRUE) 
        {
            $last_id = $conn->insert_id;?>
            <a href="placeorder.php?id=<?php echo $email;?>"><button id="btns" >View Order Summary</button></a>
                <style>
                    #btns
                    {
                
                    float:right;
                    width:20%;
                    color:black;
                    background-color:yellow;
                    padding:10px;
                    font-size:23px;
                    margin-right:19%;
                    }
                </style>
      <?php  } 
        else { echo "Error: " . $sql . "<br>" . $conn->error; }
      }

if(isset($_POST['find']))
{
  $emailf=$_POST['emailr'];
                  $cnicf=$_POST['cnicr'];
                  $phnof=$_POST['phnor'];
                   
                  $find="SELECT * from userinfo where email='$emailf' OR cnic='$cnicf' OR phno='$phnof'";
                  $finder=$conn->query($find);
                  if (mysqli_num_rows($finder)>0)
                  {
                     ?><br>
                      <a href="placeorder.php?id=<?php echo $emailf;?>"><button id="btns" >View Order Summary</button></a>
                <style>
                    #btns
                    {
                
                    float:right;
                    width:20%;
                    color:black;
                    background-color:yellow;
                    padding:10px;
                    font-size:23px;
                    margin-right:19%;
                    }
                </style>
                <?php  }
                  else
                  {
                    echo "usernotfound";
                  }
}

    $conn->close();

?>
</body>
<body>

</body>
</html>