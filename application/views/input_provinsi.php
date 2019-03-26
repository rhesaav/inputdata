<div class="modal-body">
	<form action="<?=base_url('index.php/provinsi/simpan')?>" method="POST" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td>Input Provinsi</td>
				<td><input type="text" name="nama_provinsi" class="form-control"><br>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="simpan" class="btn btn-success"></td>
			</tr> 

		</table>
	</form>
</div>
 