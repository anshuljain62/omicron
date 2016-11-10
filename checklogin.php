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
$tbl_name="forminfo"; 	


$connection = mysqli_connect('mysql6.000webhost.com', 'a1695807_root', 'e3a9a57', 'a1695807_form111');

	if (mysqli_connect_errno()) 
          {
 
             echo "Failed to connect to MySQL: " . mysqli_connect_error();
	
          }


	

 
	

        $myfirstname=$_POST['reg_no']; 

	$mylastname=$_POST['pwd']; 

	
 
	
        $myfirstname = stripslashes($myfirstname);
	
        $mylastname = stripslashes($mylastname);

	
        $myfirstname = mysqli_real_escape_string($connection, $myfirstname);

	$mylastname = mysqli_real_escape_string($connection, $mylastname);

	
        $sql="SELECT * FROM $tbl_name WHERE reg_no='$myfirstname' and pwd='$mylastname' ";



	$result=mysqli_query($connection, $sql);


	

	$count=mysqli_num_rows($result);

	


        if($count==1)
           {
		

		$_SESSION["reg_no"]= $myfirstname; 
	
	        $_SESSION["pwd"]= $mylastname; 
		
                header("location:login_success.php");
	
           }

	else 
         {
		
                 echo "</br></br>";

	       	echo "Wrong username or lastname";	
	
}
	

?>
</body>

</html>

