
<br>
<div class="container">
	<table class="table" style="border-style: solid;">
	<thead>
		<tr>
		<th scope="col">NO</th>
		<th scope="col">NO SO</th>
		<th scope="col">NAMA KAPAL</th>
		<th scope="col">JENIS BERKAS</th>
		<th scope="col">TANGGAL</th>
		<th scope="col">TOMBOL</th>
		</tr>
	</thead>
	<tbody style="border-style: solid;">
		<?php if ($record): ?>
			<?php foreach($record as $row): ?>
		<tr>
			<!-- auto incremen nomor masih belum bisa dilakukan -->
		<td><?= $row->Id_surat + 1; ?></td>
		<td><?= $row->No_So; ?></td>
		<td><?= $row->Nama_Kapal; ?></td>
		<td><?= $row->Jenis_Berkas; ?></td>
		<td><?= $row->Tanggal; ?></td>
		<td>
			<button type="button" class="btn btn-secondary" href="surat/view1">view</button> 
			<button type="button" class="btn btn-warning" href="surat/update">Edit</button>
			<button type="button" class="btn btn-danger" href="surat/delete">hapus</button>
		</td>
		</tr>
			<?php endforeach;?>
		<?php endif ;?>
	</tbody>
	</table>
</div>