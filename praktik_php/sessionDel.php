<?php
    session_start();
?>

<DOCTYPE HTML>
<HTML>
	<body>
		<?php
			session_unset();
			session_destroy();
		?>
	</body>
</HTML>