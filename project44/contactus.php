<!--Name: Amitesh Mathur ID: 1001563299-->
<?php

include 'dbconnect.php';
mysqli_select_db($con,"petstore");
if(isset($_POST['submit']))
{

$sql = "INSERT INTO contactus (firstname, lastname, email, phone, comments)
VALUES ('$_POST[myfname]', '$_POST[mylname]', '$_POST[myemail]', '$_POST[myphone]', '$_POST[mycomment]')";
if (!mysqli_query($con, $sql))

  {
  die('Error: ' . mysqli_error($con));
  }
else{echo "1 record added";}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    
    <title>Pet Store: contact us</title>
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
    <div id ="contactusimg"></div>
        
        
		<main>
		<h2>Contact Us</h2>

       <form action="contactus.php" method="post">

			<p>Required fields are marked with an asterisk &#42;.</p>
        
                <label for="myfname">*First Name:</label>
				<input type="text" name="myfname" id="myfname" required="required"><br><br>

				<label for="mylname">*Last Name:</label>
				<input type="text" name="mylname" id="mylname" required="required"><br><br>

				<label for="myemail">*E-mail:</label>
				<input type="email" name="myemail" id="myemail" required="required"><br><br>

				<label for="myphone">Phone:</label>
				<input type="tel" name="myphone" id="myphone"  placeholder="___-___-____"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br><br>
		  
				<label for="mycomment">*Comments:</label>

				<textarea name="mycomment" id="mycomment" cols="30" rows="3" required="required">
				</textarea><br><br>
				
				<input type="submit" value="Submit" name="submit">
				
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









































