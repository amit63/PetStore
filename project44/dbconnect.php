<?php

//Connecting to the database
$con = mysqli_connect("localhost","root","","petstore");

// Checking the connection
if (mysqli_connect_errno())

  {   echo "Failed connecting to the database petstore: " . mysqli_connect_error();    }
  
?>


