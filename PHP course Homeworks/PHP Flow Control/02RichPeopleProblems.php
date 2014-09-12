<!DOCTYPE html>
<html>
	<head>
		<title>PHP Flow Control</title>
	</head>
	<body>
		<form action="" method="post">
			<label>Enter Cars:</label>
			<input type="text" name="cars"/>
			<input type="submit" value="Submit"/>
		</form>
		<table border="1">
			<thead>
				<tr>
					<th>Car</th>
					<th>Color</th>
					<th>Count</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (isset($_POST['cars'])) {
					$allCars = explode(',', $_POST['cars']);
					$allColors = array('aqua', 'black', 'blue', 'green', 'orange', 'purple', 'red', 'white', 'yellow');

					for ($i = 0; $i < count($allCars); $i++) {
						$color = $allColors[rand(0, 9)];
						$count = rand(1, 5);
						echo "<tr><td>{$allCars[$i]}</td><td>{$color}</td><td>{$count}</td></tr>";
					}
				}
				?>
			</tbody>
		</table>
	</body>
</html>