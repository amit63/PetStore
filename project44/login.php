<!--Name: Amitesh Mathur ID: 1001563299-->

<?php
include 'dbconnect.php';
mysqli_select_db($con,"petstore");
if(isset($_POST['submit']))
{

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    $myusername = mysqli_escape_string($con,$_POST['myemail']);
    $pass = mysqli_escape_string($con,$_POST['mypassword']);
    
    
    
    
$ql = "SELECT userid, roleid FROM users WHERE email = '$myusername' and password = '$pass'";
$results = mysqli_query($con, $ql);
$row = mysqli_fetch_assoc($results);
 
 $q2 = "SELECT * FROM users";
 $results2 = mysqli_query($con, $q2);
 $row2 = mysqli_fetch_assoc($results2);
if($row2['email'] != $myusername && $row2['mypassword'] !=  $pass )
 {
    echo "Username and password are incorrect";
}

elseif(mysqli_num_rows($results) != 1 and $row['roleid'] = 333)
{ 
            
        header("Location: login_client.html");  
        exit; 
    }else{ 
        header("Location: login_business.html"); 
        exit; 
    } 
}else{   
    header("Location: index.php");     
    exit; 
} 
}
   // Close connection
    mysqli_close($con);


?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    
    <title>Pet Store: Login</title>
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
		<h2>Login</h2>

       <form id='login' action="login.php" method="post">

			<p>Required fields are marked with an asterisk &#42;.</p>
        


				<label for="myemail">*E-mail:</label>
				<input type="email" name="myemail" id="myemail" required="required"><br><br>

				<label for="myPassword">*Password:</label>
				<input type="password" name="mypassword" id="mypassword" required="required"><br><br>
	  
		
				<input type="submit" value="submit" name="submit">
				
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









































