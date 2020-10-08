<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flavours |</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container">
  <h2>W3.CSS Modal</h2>
  <p>Add the w3-card-* class to the w3-modal-content container to display the modal as a card.</p>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Modal Header</h2>
      </header>
      <div class="w3-container">
        <p>Some text..</p>
        <p>Some text..</p>
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>

  
</div>
</body>
</html>
<!-- echo '<script type="text/javascript">'; 
 echo 'window.location.href = "popup.php";';
 echo 'alert("Sign-in to continue");'; 
echo '</script>' -->