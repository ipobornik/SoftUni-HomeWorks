<?php
header("Content-Type: text/html; charset=utf-8");
mb_internal_encoding("utf-8");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>01 problem</title>
	</head>
	<body>
		<form method="post">
			<textarea rows="3" cols="55" name="words"></textarea>
			<br/>		
			<input type="submit" value="Count words"/>
		</form>
		<br/>
		<?php
		if (isset($_POST["words"])) {
			if (!empty($_POST["words"])) {
				echo "<table>";
				// spliting with RegEx
				$split = preg_split('/\W+/', $_POST["words"], 0, PREG_SPLIT_NO_EMPTY);
				$counts = array_count_values($split);
				foreach ($counts as $word => $count) {
					echo "<tr><td>$word</td><td>$count</td></tr>";
				}
				echo "</table>";
			} else {
				echo "<p>There is NO words to count!</p>";
			}
		}
		?>
	</body>
</html>