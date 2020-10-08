<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flavours |</title>
    <link rel="stylesheet" href="product.css">

</head>
<body>
  
    <?php include("connect.php")?>
<?php include("menu.php")?>

<br><br><br><br><br><br>
<div id="two">
    <br><br><br><br>
<div>
    <h1 id="ph1">FLAVOURS</h1>
    <h2 id="ph2">Gelato Flavours</h2>
    <table id="prodtable">
      <?php
      $sqll= "SELECT * FROM products";
      $hello = $conn->query($sqll);
      while ($row = $hello->fetch_assoc()) 
      {
      ?>
              <tr>
                  <td>   <?php echo $row['item']  ?></td>
                  <!-- <td><a href="products.php?id=<?php echo $row['id']?>">Add Rs <?php echo $row['price']  ?></a></td>  -->
                  <!-- wese pehle yahan addtocart tha -->
                  <td>
  
                  <form method="post" action="">    
                  <input type="number" class="quant" name="quantity" value="1" min="1" max="10" style=" width: 10%;padding:8px;text-align:center;background-color:transparent;"/>
                  <button type="submit" name="registerr" value="<?php echo $row['id']?>">Add Rs <?php echo $row['price']  ?></button>
                    </form>
                </td>
             </tr>
      <?php } ?>
</table>
</div>
</div>
<?php
//  if(isset($_SESSION['login']))
//  {
$itemid=$_POST['registerr'];
$quantity=$_POST['quantity'];
$sql= "SELECT item,price FROM products WHERE id='$itemid'";
        $resultt = $conn->query($sql);
        if (mysqli_num_rows($resultt) > 0) 
        {
        while($row = mysqli_fetch_array($resultt)) 
        {  
          $useritem=$row['item'];
          $userprice=$row['price'];
        //   echo $useritem;
        $sqlbucket = "INSERT INTO shopitems (item, priceitem,quantity)
        VALUES ('$useritem', '$userprice','$quantity')";
        }
      }
      if ($conn->query($sqlbucket) === TRUE) 
        {
            $last_id = $conn->insert_id;
            // echo "New record created successfully";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // unset($_SESSION['login']);

//  }
//     else
//     {
//         echo '<script type="text/javascript">'; 
// //  echo 'window.location.href = "popup.php";';
//  echo "<a href='user.php'><button onclick='".'alert("Please Sign-up to place order")'."'>Try it</button>"; 
// echo '</script>';
//      }

?>
<?php include("footer.php")?>
</body>
</html>
