<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart |</title>
    <link rel="stylesheet" href="bucket.css">
</head>
<body>
<?php include("connect.php")?>

<?php include("menu.php")?>
<?php 
$price=0;
$subtotal=0;
$totalamount=0;
$taxperproduct=25;
$totalitems=0;
$taxall=0;
$ordertotal=0;
?>
<br><br><br><br>
<div>
<div style="float: left; width:70%;height: auto;background-color:transparent;">
    <h1>Shopping Cart</h1>
    <br><hr><br>
<table style="width:80%">
    <tr>
        <th>ITEM ID</th>
        <th>ITEM</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>SUBTOTAL</th>
        <th>REMOVE</th>
    </tr>
      <?php
      $sqll= "SELECT * FROM shopitems";
      $hello = $conn->query($sqll);
      while ($row = $hello->fetch_assoc()) 
      { 
        $price=$price+$row['priceitem'];
        $subtotal=$row['quantity']*$row['priceitem'];
        $totalamount=$totalamount+$subtotal;
        $totalitems=$totalitems+$row['quantity'];
        $taxall=$taxperproduct*$totalitems;
        $ordertotal=$taxall+$totalamount;
      ?>
              <tr>
              <td>   <?php echo $row['id']?>    </td>
              <td>   <?php echo $row['item'] ?>  </td>
              <td>Rs <?php echo $row['priceitem']; ?>  </td>
              <td>   <?php echo $row['quantity']?>  </td>
              <td>Rs <?php echo $row['quantity']*$row['priceitem']?>  </td>
              <td><a href="bucket.php?id=<?php echo $row['id']?> ><button onclick="location.reload()"  style="font-family: Arial, Helvetica, sans-serif;color: red;font-size: large;background-color:transparent;border:none;cursor: grab;" >Delete</button></a></td>
             </tr>
      <?php } ?>
</table>
<br><br><br>
<div id=container>
<a href="products.php"><button  id="btn" >Continue Shopping</button></a>
<button   id="btn" >Clear Shopping Cart</button>
<button  id="btn" onclick="location.reload()">Update Cart</button>
</div>
      </div>
      <div style="float:right;width:30%;background-color:transparent;">
      <h1>Summary</h1>
      <br><hr><br>
      <table id="new" style="width:60%;">
      <!-- <label>Total Price :       <?php echo $price;?></label> -->
      <tr>
      <td id="newj">Total Amount</td>
      <td id="newj">Rs <?php echo $totalamount;?></td>
      </tr>
      <tr>
      <td id="newj">Tax per Product</td>
      <td id="newj">Rs <?php echo $taxperproduct;?></td>
      </tr>
      <tr>
      <td id="newj">Total Tax</td>
      <td id="newj">Rs <?php echo $taxall;?></td>
      </tr>
      <tr>
      <td id="newj">Order Total</td>
      <td id="newj">Rs <?php echo $ordertotal;?></td>
      </tr>
      </table><br>
      <?php
      $_SESSION['ordertotal'] =  $ordertotal;
      if($ordertotal != 0)
      {
      ?>
      <a href="checkout.php"><button  id="btn" style="width:61%;" >Proceed To checkout</button></a>
      <?php
      }
      else
      {
        ?>
        <a href=""><button  id="btn" style="width:61%;" >Proceed To checkout</button></a>
        <?php
      }
      ?>
      <!-- <button   id="btn" onclick="user.php" style="width:60%;margin-left:5%;">Proceed To checkout</button> -->
<br><br><br><br><br><br>
    </div>
<style>
    #newj
    {
        padding-top:13.5%;
        font-weight:bold;
    }
    #container
    {
        /* margin-left:3%; */
    }
#btn
{
    /* margin-left:5%; */
    text-align: center;
    padding: 14px;
    font-family: Arial, Helvetica, sans-serif;
    border: none;
    background-color: black;
    color: white;
    font-size: large;
    width: 25%;
}
</style>
      </div>
      <br>

      <?php
    //   function delete()
    //   {
    //     $sqldel= "DELETE FROM shopitems WHERE id!='0'";
    //     $resulttdel = $conn->query($sqldel);
    //   }
    //   header("refresh:0.8");
// print_r($_GET);
$itemid=$_GET['id'];
$sql= "DELETE FROM shopitems WHERE id='$itemid'";
        $resultt = $conn->query($sql);   
    //   }  
    //   if ($conn->query($sql) === TRUE) 
    //     {
    //         $last_id = $conn->insert_id;
    //         // echo "New record created successfully";
    //     } 
    //     else 
    //     {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //     }
?>
<br><br><br><br><br><br>
<!-- <div style="background-color:yellow;padding:20px;margin-top:20%;" id="footdiv">
<table style="width:87%;margin-right:50%;" id="foot">
          
            <th>
            <h1 style="text-align:center;">Creamello</h1>
            </th>
              <th >
              <h1 style="text-align:center;">Find Us On</h1>
              </th>
              <th>
              <h1 style="text-align:center;">Address</h1>
              </th>     
<tr>
<td id="foottd">
<p style="font-size:large;text-align:center;" id="footp">Get the most of your pleasures with the eye tempting<br> pieces of strawberry combined with delicious<br> strawberry icecreams</p>
</td>
<td id="foottd">
<a href=""  style="color:black;margin-left:30%;">Instagram</a><br>
<a href=""  style="color:black;margin-left:30.5%;">Facebook</a><br>
<a href=""  style="color:black;margin-left:33%;">Twitter</a>
</td>
<td id="foottd">
<p style="font-size:large;text-align:center;" id="footp">151 The Amazing Road<br>Premier Building<br>Manchester<br>400105</p>
</td>
</tr>
</table>
</div> -->
</body>
</html>