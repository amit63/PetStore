<!--Name: Amitesh Mathur ID: 1001563299-->

<?php
$con = mysqli_connect("localhost","root","","petstore");

// Checking the connection
if (mysqli_connect_errno())

  {   echo "Failed connecting to the database petstore: " . mysqli_connect_error();    }
mysqli_select_db($con,"petstore");
if(isset($_POST['submit']))
{

//the client table
$q1 = "INSERT INTO client (firstname, lastname, phone, email, serviceid)
VALUES ('$_POST[myfname]', '$_POST[mylname]', '$_POST[myphone]', '$_POST[myemail]', '888')";
if (!mysqli_query($con, $ql))

  {
  die('Error: ' . mysqli_error($con));
  }
else{echo "One record added";}


 //The users table
$q2 = "INSERT into users (password, email, roleid) VALUES ('77777', '$_POST[myemail]', '222')";
if (!mysqli_query($con, $q2))
  {
  die('Error: ' . mysqli_error($con));
}
  
//The business table
$q3 = "INSERT INTO business (bname) VALUES ('$_POST[mybname]')";
if (!mysqli_query($con, $q3))
  {
  die('Error: ' . mysqli_error($con));
}
 
}


if(isset($_POST['submit']))
{
    $to = "amitesh_king@yahoo.in"; // My Email 
    $from = $_POST['myemail']; // Senders Email 
    $first_name = $_POST['myfname'];
    $last_name = $_POST['mylname'];
    $subject = "password";
   
    $message = "Your password is 77777";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
  
    echo " email has been Sent. Thank you ";
 
    }




mysqli_close($con)
?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    
    <title>Pet Store: Service</title>
<link href="CSS/pet.css" rel="stylesheet">
</head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<div id="wrapper">
    <header>
        <h1>Pet Store</h1>
    </header>
    <nav>
        <ul>

        <li><a href="index.html">Home</a></li>
        <li><a href="Aboutus.html">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="client.php">Client</a></li>
		<li><a href="service.php">Service</a></li>
        <li><a href="login.php">Login</a></li>
		
		</ul>
    </nav>
    <div id ="homeimg"></div>
        
        
		<main>
		<h2>Service</h2>

       <form method="post" action="service.php">

			<p>Required fields are marked with an asterisk &#42;.</p>
        
                <label for="Name">*First Name:</label>
				<input type="text" name="myName" id="Name" required="required"><br><br>

				<label for="myName">*Last Name:</label>
				<input type="text" name="myName" id="myName" required="required"><br><br>

				<label for="myE-mail">*E-mail:</label>
				<input type="email" name="myE-mail" id="myE-mail" required="required"><br><br>

				<label for="myPhone">Phone:</label>
				<input type="tel" name="myPhone" id="myPhone" required="required"><br><br>
		  
				<label for="myBusinessName">Business Name:</label>
				<input type="text" name="myName" id="myName" required="required"><br><br>
				
				<input type="submit" value="Submit">
				
		</form>		
		  
		 	  
         </main>
		 <div id="contact">
        <footer>
            <i>Copyright &copy 2018 Pet Store</i><br>
            <a href="mailto:someone@example.com"> <i>amitesh@mathur.com</i></a>
        </footer>
    
</div>
</div>
</body>
</html>









































