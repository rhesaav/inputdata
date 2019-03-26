<table>
	<thead>
		<th>No.</th>
		<th>Nama</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php $i = 0; foreach ($provinsi as $data): $i++ ?>
			<tr>
				<td><?= $i ?></td>
				<td><?=$data->nama_provinsi?> </td>
				
				<td>
					<a href="#edit" onclick="edit(<?=$data->id_provinsi?>)" class="btn btn-info" data-toggle="modal">Ubah</a>
					<a href="<?=base_url('index.php/provinsi/hapus/'.$data->id_provinsi)?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>