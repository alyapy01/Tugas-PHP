<!DOCTYPE html>
<html>
<head>
	<title>Tabel Nama dan Kelas</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: blue;
			color: white;
		}
		tr:nth-child(even) {
			background-color: white;
		}
		tr:nth-child(odd) {
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($i=1; $i<=10; $i++) {
					echo "<tr class='" . (($i % 2 == 0) ? "even" : "odd") . "'>";
					echo "<td>" . $i . "</td>";
					echo "<td>" . "Nama " . $i . "</td>";
					echo "<td>" . "Kelas " . (11-$i) . "</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>
