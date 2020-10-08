<!DOCTYPE html>
<html lang="en">
<head>
    <title>Slider</title>
    <link rel="stylesheet" href="noor.css">
    <!-- <link rel="stylesheet" href="authstyle.css"> -->
</head>
<body>
<br><br><br>
<?php
$name =  $email ="";
$nameerror = $emailerror="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["fname"]))
    {
        $nameerror="It must be fill";
    }
    else
    {
        $name=test_input($_POST["fname"]);
    }
    if(empty($_POST["email"]))
    {
        $emailerror="It must be fill";
    }
    else
    {
        $email=test_input($_POST["email"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
 }

?>
<h1>Registration form</h1>
<br><br><br><br><br><br>
<form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">    
    <input type="text" name="fname" placeholder="enter your name">
    <span class="error">*<?php echo $nameerror ?> </span>
    <br><br>
    <input type="email" name="email" placeholder="enter your e-mail">
    <span class="error">*<?php echo $emailerror ?> </span>
    <br><br><br>
    <button type = "submit" name = "submit"  >Log in</button><br>
</form>
<?php
 echo "Your given values are as follows";
 echo "<br>";
 echo $name;
 echo "<br>";
 echo $email;
 
 exit();
?>

</body>
</html>