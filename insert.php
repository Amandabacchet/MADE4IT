<?php
error_reporting(0);
include "../config.php";  
$nomecad = mysqli_real_escape_string($conn, $_POST["fname"]);
$tel = mysqli_real_escape_string($conn, $_POST["lname"]);

 $insert = "INSERT INTO clientes SET nomecad='$nomecad', tel='$tel'"; 
  if ($conn->query($insert) === TRUE) {
    header("Location: select.php");    
  } 
  else {
    echo "zebra";
  }
  $conn->close();
?>
