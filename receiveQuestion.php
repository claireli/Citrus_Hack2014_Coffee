<html>
	<body>
		Question Stored<br>
		<?php
		if( isset($_POST["question"]) )
			$Question = $_POST["question"];
		if( isset($_POST["qNum"]) )
			$qNum = $_POST["qNum"];
		if( isset($_POST["a"]) )
			$ChoiceA = $_POST["a"];
		if( isset($_POST["b"]) )
			$ChoiceB = $_POST["b"];
		if( isset($_POST["c"]) )
			$ChoiceC = $_POST["c"];
		if( isset($_POST["d"]) )
			$ChoiceD = $_POST["d"];
		if( isset($_POST["ans"]) )
			$Answer = $_POST["ans"];
		if( isset($_POST["in_type"]) )
			$inType = $_POST["in_type"];
		if( isset($_POST["in_name"]) )
			$inName = $_POST["in_name"];
		if( isset($_POST["in_value"]) )
			$inValue = $_POST["in_value"];
		?>
	</body>
</html>