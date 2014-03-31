
<?php

function trap_honeypot(){
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if($_POST['honeypot'] || !$_POST['human_submitted']) {
			echo "Go away"; exit;
		}
	}
}


trap_honeypot();


?>


<!DOCTYPE html>
<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.honeypot.js"></script>
	</head>
	<body>
		<h2>Honeypot protector</h2>
		<form method="post">
			First name: <input type="text" name='firstname' /><br/>
			Last name: <input type="text" name='lastname' /><br/>
			Comment: <textarea></textarea><br/>
			<br/><br/><input type="submit" name="submit" value="submit"/>
		</form>
</html>


