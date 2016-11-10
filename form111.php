
<!DOCTYPE html>
<html>
    
<head>
 <title>Web Form</title>

</head>
    
<body>
       
          	<fieldset>
            <h1>FORM OF ENTRANCE EAXAM OF JIIT</h1> 
          
     
              
              <form name="input" action="formsubmit.php"  method="post">
            	    <p style="white-space:pre">
                    <br/>  First name:      <input type="text" name="firstname" required> 
            	    <br/>  Last name:       <input type="text" name="lastname" required>
                    <br/>  Father name:     <input type="text" name="fathername" required> 
                    <br/>  Mother name:     <input type="text" name="mothername" required> 
                    <br/>  date of birth:   <input type="date" name="dob" required> 
            	    <br/>  E-mail:          <input type="email" name="email" required>
                    <br/>  Phone No:        <input type="tel" name="pno" required>
                     <br/> Exam mode:(online/offline)       <input type="text" name="exammode" required >
                    <br/><h5>  ACADEMIC QUALIFICATION</h5>
                    <h5>  10TH CLASS</h5></p>
                    <p style="white-space:pre">  percentage:         <input type="number" name="percentage10" required>
                    <br/>   board:              <input type="text" name="board10" required> 
                    <br/>  year of passing:(2015,2014,2013)     <input type="date" name="yearofpassing10" required >                    
                    <br/><h5>  12TH CLASS</h5></p>
                    <p style="white-space:pre">  percentage:         <input type="number" name="percentage12" required> 
                    <br/>   board:(cbse/icse)              <input type="text" name="board12" required>
                    <br/>  year of passing:(2013,2012,2011)     <input type="date" name="yearofpassing12" required> 
                    <br/>  enter password   <input type="password" name="pwd" required>
                    <br/><br/><input type="submit" value="Submit">
                    </p>
                	</fieldset>
             </form>
           
    
 </body>
</html>