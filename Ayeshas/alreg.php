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
                  $emailf=$_POST['emailr'];
                  $cnicf=$_POST['cnicr'];
                  $phnof=$_POST['phnor'];
                   
                  $find="SELECT * from userinfo where email='$emailf' OR cnic='$cnicf' OR phno='$phnof'";
                  $finder=$conn->query($find);
                  if (mysqli_num_rows($finder)>0)
                  {
                      echo "userl exist";
                  }
                  ?>

<!-- <a href="addtocart.php"     id=<?php echo $row['id']; ?>   role="button">   Add Rs</a> -->