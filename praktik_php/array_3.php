<DOCTYPE HTML>
<HTML>
	<head>
		<style>
			table, tr, tr{
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<h2> Associative Array </h2>
		<?php
			$mobil = array(
							'merk' => 'Toyota',
							'type' => 'Fortuner',
							'year' => 2017
						  );
			echo '<table>
					<tr>
						<th>Key</th>
						<th>Value</th>
					</tr>';

			foreach ($mobil as $key => $value) {
				echo '<tr>
						<td>'. $key . '</td>
						<td>'. $value .'</td>
						</tr>';
			}
			echo '</table';
		?>
	</body>
</HTML>