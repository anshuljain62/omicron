<?php



$dbServer='mysql6.000webhost.com';
$dbName='a1695807_form111';
$dbUser='a1695807_root';
$dbPwd='e3a9a57';


$dbCon=mysql_connect($dbServer,$dbUser,$dbPwd) or die('could not connect to the database'.mysql_error());
mysql_select_db($dbName,$dbCon);

$firstname=mysql_real_escape_string($_POST['firstname']);
$lastname=mysql_real_escape_string($_POST['lastname']);
$fathername=mysql_real_escape_string($_POST['fathername']);
$mothername=mysql_real_escape_string($_POST['mothername']);
$dob=mysql_real_escape_string($_POST['dob']);
$email=mysql_real_escape_string($_POST['email']);
$pno=mysql_real_escape_string($_POST['pno']);
$exammode=mysql_real_escape_string($_POST['exammode']);
$percentage10=mysql_real_escape_string($_POST['percentage10']);
$board10=mysql_real_escape_string($_POST['board10']);
$yearofpassing10=mysql_real_escape_string($_POST['yearofpassing10']);
$percentage12=mysql_real_escape_string($_POST['percentage12']);
$board12=mysql_real_escape_string($_POST['board12']);
$yearofpassing12=mysql_real_escape_string($_POST['yearofpassing12']);
$pwd=mysql_real_escape_string($_POST['pwd']);
$qryIns="insert into forminfo (`firstname`,`lastname`,`fathername`,`mothername`,`dob`,`email`,`pno`,`exammode`,`percentage10`,`board10`,`yearofpassing10`,`percentage12`,`board12`,`yearofpassing12`,`pwd`) values('$firstname','$lastname','$fathername','$mothername','$dob','$email','$pno','$exammode','$percentage10','$board10','$yearofpassing10','$percentage12','$board12','$yearofpassing12','$pwd') ";

$resInt=mysql_query($qryIns);
if($resInt)
{
	
	print"YOUR ARE SUCCESFULL REGISTERED"; echo "<br />";

	   $abc = $firstname;
        $xyz = $lastname;
         $result = mysql_query("SELECT reg_no FROM forminfo WHERE firstname='$abc' and lastname='$xyz'");
          while($row = mysql_fetch_array($result)) 
          	{ echo "Your Registration Number Is "; echo $row['reg_no']; echo "<br />"; echo "!!!!Remember it for the future!!!! "; }
	


}
else
{
	print"could not store";

	
}

mysql_close();
?>