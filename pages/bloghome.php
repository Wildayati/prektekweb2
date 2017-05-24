

 <!-- First Blog Post -->
 <?php foreach ($isi_berita as $ib): ?>
     

                <h2>
                    <a href="#"><?php echo $ib['judul'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo date('d F Y',strtotime($ib['tanggal']));  ?></p>
                <hr>
                <hr>
                <p><?php echo $ib['isi'] ?></p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>
                <hr>
 <?php endforeach ?>