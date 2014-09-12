<!DOCTYPE html>
<html>
	<head>
		<title>PHP Forms HW</title>
	</head>
	
	<body>
		<form method="POST">
			<label>Enter tags:</label>
			<br/>
			<input type="text" name="tags"/>
			<input type="submit" name="submit" value="Submit">
			<br/>
			<?php
			if ($_POST && isset($_POST["submit"])) {
				$tags = explode(", ", $_POST["tags"]);
				echo "<div>";
				foreach ($tags as $key => $val) {
					echo $key . " : " . $val . "<br />";
				}
				echo "</div>";
			}
			?>
		</form>
	</body>
</html>