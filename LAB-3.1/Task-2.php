<?php

$uerror="";
$uemail="";


if(isset($_REQUEST['submit'])){
	if ($_REQUEST['usermail']==null) {
		$uerror="You entered wrong credentials";

}
else{
	$uemail=$_REQUEST['usermail'];
	echo $uemail;
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
			<legend>Gmail</legend>
	<table>
		
		<form method="$_GET" action="#" >	
		<label></label>
		<tr>
			<td> </td>
			<input type="email" name="usermail" value="<?=$uemail?>"> <br>
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