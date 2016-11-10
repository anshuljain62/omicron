
<head> </head> 
<body>
 <?php
 $con = mysql_connect("mysql6.000webhost.com","a1695807_root","e3a9a57");
 if (!$con) 
{ die('Could not connect: ' . mysql_error()); }
 
mysql_select_db("a1695807_form111", $con); 
$x=1;
$result = mysql_query("SELECT * FROM forminfo");
 while($row = mysql_fetch_array($result))
 {

echo $x ;
$x=$x+1;
print("    member details ");
echo "<br/><br/>";

 echo " MEMBER:   ".$row['firstname'] . " " . $row['lastname']."<br/>"; 
 echo "FATHER:   ".$row['fathername']."<br/>";
 echo "MOTHER :   ".$row['mothername']."<br/>";
 echo "DOB:   ".$row['dob']."<br/>";
 echo "EMAIL:   ".$row['email']."<br/>";
 echo "PHONE NO:   ".$row['pno']."<br/>";
 echo "EXANMODE:   ".$row['exammode']."<br/>";
echo "10 CLASS PERCENTAGE:   ".$row['percentage10']."<br/>";
echo "NAME OF BOARD:  ".$row['board10']."<br/>";
echo "YEAR OF PASSING OF 10:   ".$row['yearofpassing10']."<br/>";
echo "12 CLASS PERCENTAGE   ".$row['percentage12']."<br/>";
echo "NAME OF BOARD OF 12   ".$row['board12']."<br/>";
echo "YEAR OF PASSING OF 12:   ".$row['yearofpassing12']."<br/>";
echo "<br/><br/>";
 } 

mysql_close($con); 
?>
 </body>
 </html>