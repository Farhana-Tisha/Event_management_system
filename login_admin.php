<?php
session_start();

?>
<html>
<head>
<title>Event Planning Management</title>

<link rel="stylesheet"type="text/css"href="login.css"/>
</head>
<body>
<form method="post" action="check_admin.php">



<div class="bg-image-intro">

<div class="container">  
        <div class="row_1">
	          <p><font color="black" face="Bradley Hand ITC">Username : <input type="email" name="email" placeholder="Enter your email address"value=""required></font></p></br>
			  <p><font color="black" face="Bradley Hand ITC">Password : <input type="password" name="password" placeholder="6 digit password"  value=""required></font></p></br>
              	  
        </div>
          
        <div class="row_2">
                <input class="button" type="submit" value="Login">  
        </div>
		
  </div>	


</div>

</form>
</body>
</html>


