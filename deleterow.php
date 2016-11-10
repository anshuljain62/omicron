<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
   </head>
   
   <body>
      <?php
 	

    
         if(isset($_POST['delete'])) {
            $dbhost = "mysql6.000webhost.com";
            $dbuser = "a1695807_root";
            $dbpass = "e3a9a57";
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $reg_no = $_POST['reg_no'];
            
            $sql = "DELETE FROM forminfo ". "WHERE reg_no = $reg_no" ;
            mysql_select_db('a1695807_form111');
            $retval = mysql_query($sql, $conn);
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysql_close($conn);
         }
         else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" cellpadding = "2">
                     
                     <tr>
                        <td width = "100">REGISTRATION NO.</td>
                        <td><input name = "reg_no" type = "text" id = "reg_no"></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "delete" type = "submit" id = "delete" value = "Delete">
                        </td>
                     </tr>
                     
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>