<?php

$uerror="";
$username="";


if(isset($_REQUEST['submit'])){
	if ($_REQUEST['username']==null) {
		$uerror="You entered wrong credentials";

}
else{
	$username=$_REQUEST['username'];
	echo $username;
}

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login
		
	</title>
</head>
<body>
	<fieldset>
			<legend>Name</legend>
	<table>
		
		<form method="$_GET" action="#" >	
		<label></label>
		<tr>
			<td> </td>
			<input type="text" name="username" value="<?=$username?>"> <br>
			<?=$uerror?>
			
		</tr>

		<tr>
			<td> </td>
			<input type="submit" name="submit" value="Submit">
			

		</tr>

		</form>
	
</table>
</fieldset>
</body>
</html>