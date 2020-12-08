<DOCTYPE HTML>
<HTML>
	<HEAD>		
	</HEAD>
	<BODY>
		<?php
			$myFile = "testFile.txt";
			$fh = fopen($myFile, 'r');
			$theData = fgets($fh);
			fclose($fh);
			echo $theData;
		?>
	</BODY>
</HTML>