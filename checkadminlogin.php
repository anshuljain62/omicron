

<?php
	
session_start();

?>




<!DOCTYPE html>

<html>

<body>


<?php
	
$host="mysql6.000webhost.com"; 		 
	
$username="a1695807_root"; 		
$password="e3a9a57"; 				
$db_name="a1695807_form111"; 			
$tbl_name="admin"; 
	
$connection = mysqli_connect('mysql6.000webhost.com', 'a1695807_root', 'e3a9a57', 'a1695807_form111');
	
if (mysqli_connect_errno())
 {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


	// username and password sent from form 


	$myfirstname=$_POST['username']; 

	$mylastname=$_POST['password']; 

	
 
	
$myfirstname = stripslashes($myfirstname);
	
$mylastname = stripslashes($mylastname);


	$myfirstname = mysqli_real_escape_string($connection, $myfirstname);

	$mylastname = mysqli_real_escape_string($connection, $mylastname);

	
        $sql="SELECT * FROM $tbl_name WHERE username='$myfirstname' and password='$mylastname'";


	$result=mysqli_query($connection, $sql);

	

	$count=mysqli_num_rows($result);

		
        
if($count==1){
		
		$_SESSION["username"]= $myfirstname; 

		$_SESSION["password"]= $mylastname; 
		
header("location:loginadminsuccess.php");
	
}
	
else {
		echo "</br></br>";
		
echo "Wrong firstname or lastname";
		
	}
	
?>

</body>

</html>

