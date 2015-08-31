<!DOCTYPE html>
<html>
<head>
	<title>myResult</title>
</head>
<body>	
	<table>
		<?php if ( isset($_POST['is_post']) ) {
				if ($_POST['is_post'] == 'true') { 
		?>
		<tr>
			<td>
				Angkatan
			</td>
			<td>:</td>
			<td><?php
				echo $_POST["angkatan"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>
				Alasan	
			</td>
			<td>:</td>
			<td><?php
				echo $_POST["alasan"]; 
				?>
			</td>
		</tr>
		
		<?php 
				}
			
			}
		else
		{ 
		?>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php
				echo $_GET["nama"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><?php
				echo $_GET["nim"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php
				echo $_GET["email"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>TTL</td>
			<td>:</td>
			<td><?php
				echo $_GET["ttl"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php
				echo $_GET["jenis_kelamin"]; 
				?>
			</td>
		</tr>
		
		<?php } ?>
	</table>
	<p>
    *klik <a href="indeks.html">here</a> to go back to index page
    </p>

</body>
</html>