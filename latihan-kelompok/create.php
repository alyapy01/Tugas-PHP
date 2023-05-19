<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row" style="margin-top: 100px;">
			<div class="col-md-6">
				<form id="form-pelanggan" action="process.php" method="post">
					<table cellpadding="10" cellspacing="0" class="table table-striped">
						<tr>
							<td>Nama</td>
							<td>
								<input type="text" id="input-nama" name="nama" class="form-control">
								<p id="text-error-name"></p>
							</td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>
								<select name="jenis_kelamin" id="input-jenis-kelamin" class="form-control">
									<option value="pria">Pria</option>
									<option value="wanita">Wanita</option>
								</select>
								<p id="text-error-jenis-kelamin"></p>
							</td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td>
								<input type="number" id="input-telepon" name="telpon" class="form-control">
								<p id="text-error-telepon"></p>
							</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>
								<input type="text" id="input-alamat" name="alamat" class="form-control">
								<p id="text-error-alamat"></p>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<button id="my-button" type="button" class="btn btn-primary">Save</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>

<script type="text/javascript">
	$('#my-button').click(function() {
		var isValid = true;

		if ($('#input-nama').val().length === 0) {
			$('#input-nama').css({"background-color": "red"});
			$('#text-error-name').text('Silahkan isi nama terlebih dahulu');
			isValid = false;
		} else {
			$('#input-nama').css({"background-color": ""});
			$('#text-error-name').text('');
		}

		if ($('#input-jenis-kelamin').val().length === 0) {
			$('#input-jenis-kelamin').css({"background-color": "red"});
			$('#text-error-jenis-kelamin').text('Silahkan pilih jenis kelamin');
			isValid = false;
		} else {
			$('#input-jenis-kelamin').css({"background-color": ""});
			$('#text-error-jenis-kelamin').text('');
		}

		if ($('#input-telepon').val().length === 0) {
			$('#input-telepon').css({"background-color": "red"});
			$('#text-error-telepon').text('Silahkan isi telepon terlebih dahulu');
			isValid = false;
		} else {
			$('#input-telepon').css({"background-color": ""});
			$('#text-error-telepon').text('');
		}

		if ($('#input-alamat').val().length === 0) {
			$('#input-alamat').css({"background-color": "red"});
			$('#text-error-alamat').text('Silahkan isi alamat terlebih dahulu');
			isValid = false;
		} else {
			$('#input-alamat').css({"background-color": ""});
			$('#text-error-alamat').text('');
		}

		if (isValid) {
			$('#form-pelanggan').submit();
		}
	});
</script>
