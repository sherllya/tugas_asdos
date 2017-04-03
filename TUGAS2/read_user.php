<!DOCTYPE html>
<html>
<head>
		<title>TUGASNYA PAK SON!</title>
</head>
<body>
<h2>Data Account</h2>
<table border="1">
<tr>
		<th>id</th>
		<th>username</th>
		<th>password</th>
		<th>privilage</th>
		<th>nama</th>
		<th>alamat</th>
		<th>pekerjaan</th>
		<th>telepon</th>
		<th>jenis_kelamin</th>
		<th>hobi</th>
</tr>
		<?php
				require 'koneksi.php';
				$no = 1;
				$query = mysql_query("SELECT * FROM user");
				while ($hasil = mysql_fetch_array($query)) { ?>
				<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil[1]?></td>
				<td><?php echo $hasil[2]?></td>
				<td><?php echo $hasil[3]?></td>
				<td><?php echo $hasil[4]?></td>
				<td><?php echo $hasil[5]?></td>
				<td><?php echo $hasil[6]?></td>
				<td><?php echo $hasil[7]?></td>
				<td><?php echo $hasil[8]?></td>
				<td><?php echo $hasil[9]?></td>
				<td><?php echo $hasil[10]?></td>
				<td>
				<?php 
				if($hasil[9]==1)
				{
					echo "Admin";
				}
				else
				{
					echo "User";
				}
				?>
				</td>
				</tr>
<?php }?>
		</table>
		<td><a href="login.php"><input type= "submit" name="submit" value ="Keluar"></td>
		
</body>
</html>