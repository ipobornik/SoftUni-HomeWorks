<!DOCTYPE html>
<html>
	<head>
		<title>PHP Forms</title>
		<style type="text/css" media="screen">
			p {
				margin: 0;
				padding:0;
			}
		</style>
	</head>
	<body>
		<div>
			Enter tags:
		</div>
		<form action="" method="post">
			<input type="text" name="tags">
			<input type="submit" name="submit" value="Submit">
		</form>
		</br>
		<?php
		if (isset($_POST['tags'])) {
			$tags = explode(", ", $_POST['tags']);
			$tagsCount = array_count_values($tags);
			$maxValInArr = array_search(max($tagsCount), $tagsCount);
			arsort($tagsCount);
			foreach ($tagsCount as $key => $value) {
				echo "<p>$key : $value times</p>";
			}
			echo "<p><strong>Most Frequent Tag is: $maxValInArr</stong></p>";
		}
		?>
	</body>
</html>