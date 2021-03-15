<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Web-Login</title>
</head>
<body>
	<form action="<?= base_url('Login/ingresar') ?>" method="POST">
	<table> 
	   <tr>
	      <td><label>Usuario: </label></td>
		  <td><input type="text" name="user"></td>
	   </tr>
	   <tr>
	      <td><label>Contraseña: </label></td>
		  <td><input type="password" name="txtcontrasena"></td>
	   </tr>
	   <tr>
		  <td><input type="submit" value="Ingresar"></td>
	   </tr>

	</table>
	</form>
</body>
</html>