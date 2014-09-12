<!DOCTYPE html>
<html>
	<head>
		<title>PHP Flow Control</title>
		<style type="text/css" media="screen">
			table {
				border-collapse: collapse;
			}

			table, th, td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Number</th>
					<th>Square Root</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sum = 0;
				for ($number = 0; $number <= 100; $number += 2) {
					echo "<tr><td>$number</td><td>" . number_format(sqrt($number), 2, '.', '') . "</td></tr>";
					$sum += sqrt($number);
				}
				?>
				
			</tbody>
<tfoot>
<tr>
<td><strong>Total:</strong></td>
<td><?= round($sum, 2) ?></td>
</tr>
</tfoot>
</table>
	</body>
</html>