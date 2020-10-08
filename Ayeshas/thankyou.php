<!DOCTYPE html>
<html lang="en">
<head>
    <title>Placeorder |</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
<?php include("connect.php")?>
<?php include("menu.php")?>
<style>
    body
{
    background-image: url(7.jpg);
}
#thanks
{
    border-style: solid;
    border-color: green;
    width:80%;
    margin-left:10%;
    height:350px;
}
<?php
$ordernumber=0;
function ordernumbergen()
{
    $ordernumber=0;
    $ordernumber++;
    return $ordernumber;
}
?>
</style>
<br><br><br><br><br>
<div id="thanks"><br>
<div>
<!-- <h1 style="margin-left:30%;">THANK YOU!</h1> -->
<img src="ty.jpg" style="width:50%;margin-left:25%;"><br><br>
<h3 style="text-align:center;"><strong>Your order has been successfully processed<br><br>Your order number is <i><?php 
$num=ordernumbergen();
$num=ordernumbergen();
echo "$num"; ?></i><br><br>Charges will appear on your credit card statement as Creamello</strong></h3>
</div>
</div><br><br><br><br><br><br><br><br><br><br>
<div style="background-color:yellow;padding:35px;">
<table style="width:87%;margin-right:50%;">
          
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
<td>
<p style="font-size:large;text-align:center;">Get the most of your pleasures with the eye tempting<br> pieces of strawberry combined with delicious<br> strawberry icecreams</p>
</td>
<td >
<a href=""  style="color:black;margin-left:30%;">Instagram</a><br>
<a href=""  style="color:black;margin-left:30.5%;">Facebook</a><br>
<a href=""  style="color:black;margin-left:33%;">Twitter</a>
</td>
<td>
<p style="font-size:large;text-align:center;">151 The Amazing Road<br>Premier Building<br>Manchester<br>400105</p>
</td>
</tr>
</table>
</div>
</body>
</html>