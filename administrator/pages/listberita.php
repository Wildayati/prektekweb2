<h1>Daftar Berita</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
 <?php
$i = 1;
  foreach ($isi_berita as $ib) { ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $ib['judul'] ?></td>
			<td><?= substr($ib['isi'],0,50) ?></td>
			<td><?= $ib['aksi'] ?></td>
			<td><a href="ubah_berita.php?id=<?php echo $ib['id_berita']?>">Ubah</td>
		</tr>
		<?php
			$i++;
		 } ?>
	</tbody>
</table>
