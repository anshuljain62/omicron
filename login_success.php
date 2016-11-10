


<?php
	// Check if session is not registered, redirect back to main page. 
	session_start();
	if(!isset($_SESSION['reg_no'])) {
		header("location:main_login.php");
	}
?>

<html>
<body>
	</br> </br>
	<?php
		//print_r($_SESSION);
	?>

	           
	                    LOGIN SUCCCESSFUL
	
        <?php 
        $con = mysql_connect("mysql6.000webhost.com","a1695807_root","e3a9a57");
        $abc = $_SESSION['reg_no'];
        $xyz = $_SESSION['pwd'];
        //echo $abc;
        //echo $xyz;
         if (!$con) { die('Could not connect: ' . mysql_error()); }
          mysql_select_db("a1695807_form111", $con); 
          $result = mysql_query("SELECT * FROM forminfo WHERE reg_no='$abc' and pwd='$xyz'");
          while($row = mysql_fetch_array($result)) 
          	{  echo"REGISTRATION NO.:-"; echo $row['reg_no']; echo "<br />";  
               echo "<br />";echo"FIRST NAME.:-"; echo $row['firstname']; echo "<br />";
              echo "<br />"; echo"LASTNAME:-"; echo $row['lastname']; echo "<br />";
          		echo "<br />";echo"FATHERS NAME:-"; echo $row['fathername']; echo "<br />";
          		
             echo "<br />";echo"MOTHERS NAME:-"; echo $row['mothername']; echo "<br />";
             echo "<br />";echo"DATE OF BIRTH:-:-"; echo $row['dob']; echo "<br />";
             echo "<br />";echo"EMAIL:-:-"; echo $row['email']; echo "<br />";
            echo "<br />"; echo"PHONE NUMBER:-"; echo $row['pno']; echo "<br />";
            echo "<br />"; echo"EXAM MODE:-"; echo $row['exammode']; echo "<br />";
             echo "<br />";echo"10 th PERCENTAGE:-"; echo $row['percentage10']; echo "<br />";
             echo "<br />";echo"NAME OF BOARD OF 10 th:-"; echo $row['board10']; echo "<br />";
             echo "<br />";echo"YEAR OF PASSING 10:-"; echo $row['yearofpassing10']; echo "<br />";
             echo "<br />";echo"12 th PERCENTAGE:-"; echo $row['percentage12']; echo "<br />";
             echo "<br />";echo"NAME OF BOARD OF 12 th:-"; echo $row['board12']; echo "<br />";
             echo "<br />";echo"YEAR OF PASSING 12 th:-"; echo $row['yearofpassing12']; echo "<br />";



      }
         ?>
           

        
	<a href="logout.php">Click here to LOGOUT</a> 
</body>
</html>