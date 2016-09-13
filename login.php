<?php

	//GET ja POST muutujad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	
	$signupEmailError = "";

	
	// on üldse olemas selline muutuja
	if( isset( $_POST["signupEmail"] ) ) {
			//jah on olemas
			//kas on tühi
			if(empty( $_POST["signupEmail"] ) ) {
					
					$signupEmailError = "see väli on kohustuslik";
			}
	}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Logi sisse või loo kasutaja</title>
</head>
<body>

	<h1>Logi sisse</h1>
	<form method="POST"> 
	
		<label>E-post</label><br>
		
		<input name="loginEmail" type="text">
		<br><br>
		
		<input name="loginPassword" placeholder="Parool" type="password">
		<br><br>
		
		<input type="submit" value="Logi sisse">
	
	</form>


<h1>Loo kasutaja</h1>
	<form method="POST"> 
	
		<label>E-post</label><br>
		
		<input name="signupEmail" type="text"> <?php echo $signupEmailError; ?>
		<br><br>
		
		<input name="Password" placeholder="Parool" type="signupPassword"> 
		<br><br>
		
		<input type="submit" value="Loo kasutaja">
	
	</form>
	
</body>
</html>