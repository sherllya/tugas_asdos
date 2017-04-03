<html>

<head>

<title>REGISTER</title>

</head>
<form action="proses_daftar.php" method="post">
<body>

<h2>Register yes!</h2>

<table>
<tr>
<tr>
				<td>id*</td>
				<td><input type="text" name="1"></td>
		</tr>
				<td>username*</td>
				<td><input type="text" name="2"></td>
		</tr>
		<tr>
				<td>password*</td>
				<td><input type="password" maxlength="3" name="3"></td>
		</tr>
		<tr>
				<td>privilage</td>
				<td>
					<select name="4">
						<option value="0">User</option>
						<option value="1">Admin</option>
					</select>
				</td>
		</tr>
		<tr>
				<td>nama*</td>
				<td><input type="text" name="5"></td>
		</tr>
		<tr>
				<td>alamat</td>
				<td><input type="text" name="6"></td>
		</tr>
		<tr>
				<td>pekerjaan*</td>
				<td><input type="text" name="7"></td>
		</tr>
		<tr>
				<td>Telepon</td>
				<td><input type="text" name="8"></td>
					
		</tr>
		<tr>
				<td>jenis_kelamin*</td>
				<td>
					<input type="radio" name="9" values="L">L
					<input type="radio" name="9" values="P">P
				<td>
		</tr>
		<tr>
				<td>hobi</td>
				<td><input type="text" name="10"></td>
			<td>
			Tanda(*) harus di isi
			</td>
		</tr>
		<tr>
				<td><input type="submit" name="submit" value="DAFTAR"></td>
				
		</tr>
</table>
</form>
</body>

</html>