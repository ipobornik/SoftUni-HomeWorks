<!DOCTYPE html>
<html>
	<head>
		<title>HTML Table</title>		
		<style type="text/css" media="screen">
			table {
				border-collapse: collapse;
			}
			table td {
				border: solid 1px #000;
				padding: 6px;
			}
			table td:first-child {
				background: orange;
			}
			table td:last-child {
				text-align: right;
			}

		</style>
	</head>
	<body>
		<?php 
		$name = 'Pesho';
		$phoneNumber = '0884-888-888';
		$age = 67;
		$address = 'Suhata Reka';
		?>
		<table>
			<tr>
				<td>Name</td>
				<td><?php echo $name; ?></td>
			</tr>
			<tr>
				<td>Phone number</td>
				<td><?php echo $phoneNumber; ?></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><?php echo $age; ?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $address; ?></td>
			</tr>
		</table>
	</body>
</html>