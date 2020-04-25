<?php
session_start();
include('test2.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form method="post" name="RegisterForm" action="test1.php>
					<input type="radio" name="registertype" value = "admin" checked>Admin
					<input type="radio" name="registertype" value = "user">User
					<ul>
						<li><input type="text" name="NombreCompleto" placeholder="Nombre Completo"></li>
						<li><input type="text" name="Correo" required></li>
					</ul>
					<ul>
						<li>
							<input type="text" name="Telefono" placeholder="Telefono">
						</li>
						<li>
							<select name="Origen" placeholder="Cuidad de Origen">
								<option value="">Cuidad de Origen</option>
								<option>Arlington</option>
								<option>Dallas</option>
								<option>Austin</option>
							</select>
						</li>
					</ul>
					
					<ul>
						<li><input type="password" name="password" placeholder="Clave"></li>
						<li><input type="password" name="confirmpassword" placeholder=" Confirmar Clave"></li>
					</ul>
					<br>
					<input type="submit" name="reg_user" value="Registrar Ahora"><br>
				</form>
</body>
</html>