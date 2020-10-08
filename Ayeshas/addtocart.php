<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iceparlour";

$conn =  new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
print_r($_GET);
$itemid=$_GET['id'];
$sql= "SELECT item,price FROM products WHERE id='$itemid'";
        $resultt = $conn->query($sql);
        if (mysqli_num_rows($resultt) > 0) 
        {
        while($row = mysqli_fetch_array($resultt)) 
        {  
          $useritem=$row['item'];
          $userprice=$row['price'];
          echo $useritem;
        $sqlbucket = "INSERT INTO shopitems (item, priceitem)
        VALUES ('$useritem', '$userprice')";
        }
      }
      if ($conn->query($sqlbucket) === TRUE) 
        {
            $last_id = $conn->insert_id;
            echo "New record created successfully";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
$conn->close();

?>



     