<!DOCTYPE html>
<html>

<body>
<div class="modal-body">
	<form action="<?=base_url('index.php/kabupaten/simpanKabupaten')?>" method="POST" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td>Nama Provinsi</td>
				<td>
					<select name="id_provinsi">
						<?php foreach($provinsi as $data){?>
							<option value="<?= $data->id_provinsi ?>"><?= $data->nama_provinsi ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Kabupaten</td>
				<td><input type="text" name="nama_kabupaten" class="form-control"><br>
			</tr>
			<tr>
				<td>Jumlah Penduduk</td>
				<td><input type="text" name="jumlah_penduduk" class="form-control"><br>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="simpan" class="btn btn-success"></td>
			</tr>

		</table>
	</form>
</div>
</body>
</html>