<?php
    session_start();
?>

<DOCTYPE HTML>
<HTML>
	<body>
		<?php
			$_SESSION["favcolor"] = "green";
			$_SESSION["favanimal"] = "cat";
			echo "Session variables are set";
		?>
	</body>
</HTML>