<!DOCTYPE html>
<html>
	<head>
		<title>Get Form Data</title>
	</head>
	<body>
		<form action="" method="get">
			<div>
				<input type="text" name="name" placeholder="Name...">
			</div>
			<div>
				<input type="text" name="age" placeholder="Age...">
			</div>
			<div>
				<input type="radio" name="gender" id="male" value="male">
				<label for="male">Male</label>
			</div>
			<div>
				<input type="radio" name="gender" id="female" value="female">
				<label for="female">Female</label>
			</div>
			<input type="submit" value="Send">
		</form>
		<p>
			<?php
			if (isset($_GET['name'])) {
				echo "My name is {$_GET['name']}. I am {$_GET['age']} year old. I am {$_GET['gender']}.";
			}
			?>
		</p>
	</body>
</html>