<h1>Edit Berita</h1>

<form action="aksi_ubah.php?id=<?php echo $data_berita['id_berita'] ?>" method="POST">
		    <label for="judul">Judul</label><br>
		      <input type="text" name="judul" value="<?php echo $data_berita['judul']?>"><br>

		    <label for="isi">Isi</label><br>
		    <textarea name="isi"><?php echo $data_berita['isi'] ?></textarea><br>
		    	
		  	<label for="kategori">Kategori</label><br>
			  	<select name="kategori" id="kategori"><br>

		  		<?php foreach ($data_kategori as $kat): ?>
		  			<option value="<?php echo $kat['id_kategori'] ?>"
		  			<?php 
			  			if ($kat['id_kategori']==$data_kategori['id_kategori']) {
			  				echo"selected";
			  			}
		  			?>
		  			><?php echo $kat['nama_kategori'] ?></option><br>
		  		<?php endforeach ?>


			  	</select><br>
			  	<input type="submit" value="Submit">
		  
			</form>