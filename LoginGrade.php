<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="LoginGradeStyle.css">
</head>


<body>

	<header id=intro > Login to GPA Calculator </header>
		<form id=logingrade action="LoginHendler.php" method="post">

		       Username : <input type="text" id = "usname" name="username" placeholder="Username">
		       <br><br>
		  	   Password : <input type="password" id ="psword" name="password" placeholder="Password" >
		  	   <br><br>

		 	   <input id=btlogin type="submit" value="Login">
		</form> 


</body>
</html>
