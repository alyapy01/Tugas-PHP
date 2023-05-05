<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nilai</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid #ddd;
		}

		th {
			background-color: white;
		}

		tr:nth-child(odd) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Daftar Nilai</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Tanggal Lahir</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Kelas</th>
				<th>Nilai</th>
				<th>Hasil</th>
			</tr>
		</thead>
		<tbody>
		<?php
				$json_string = file_get_contents('data.json');
				$json = json_decode($json_string, true);

				$no = 1;
				foreach ($json as $data) {
					$tanggal_lahir = new DateTime($data['tanggal_lahir']);
					$sekarang = new DateTime();
					$umur = $tanggal_lahir->diff($sekarang)->y;

					echo "<tr>";
					echo "<td>" . $no . "</td>";
					echo "<td>" . $data['nama'] . "</td>";
					echo "<td>" . $data['tanggal_lahir'] . "</td>";
					echo "<td>" . $umur . "</td>";
					echo "<td>" . $data['alamat'] . "</td>";
					echo "<td>" . $data['kelas'] . "</td>";
					echo "<td class='nilai'>" . $data['nilai'] . "</td>";
					
					if ($data['nilai'] >= 90) {
						echo "<td class='hasil'>A</td>";
					} else if ($data['nilai'] >= 80) {
						echo "<td class='hasil'>B</td>";
					} else if ($data['nilai'] >= 70) {
						echo "<td class='hasil'>C</td>";
					} else if ($data['nilai'] >= 55) {
						echo "<td class='hasil'>D</td>";
					} else {
						echo "<td class='hasil'>E</td>";
					}

					echo "</tr>";
					$no++;
				}
			?>
		</tbody>
	</table>
</body>
</html>
