<?php
session_start();
if(isset($_SESSION['login'])) {
  header("location:home.php");
} else {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form login</title>
</head>
<body>
<h1>Form login</h1>
<form action="proses/proses_login.php" method="post">
	<table>
		<tr>
			<td><label>Email</label></td>
			<td>: <input type="text" name="email" placeholder="Email Anda"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td>: <input type="password" name="password" placeholder="Password Anda"></td>
		</tr>
        <tr>
        	<td></td>
        	<td>: <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
    		</td>
        </tr>
	</table>
</form>
</body>
</html>
<?php
}
?>