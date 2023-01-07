<div class="preloader">
    <div class="loading">
        <i class="spinner-border text-primary text-center">
        <!-- <span class="sr-only">Loading...</span> -->
        </i>
    </div>
</div>

<div class="container mt-5 mb-5">
	<div class="col-sm-12 mb-4" style="margin-top: 20px;">
		<!--<p class="text-muted">Belum ada info loker</p>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<!--<br>-->
		<?php foreach( $loker as $l ) : ?>
		<div class="card mb-3 shadow">
			<div class="card-header">
				<h3> <?= $l['judul'] ?> </h3>
				<p> Tanggal Post : <u><?= $l['tanggal_post'] ?></u> </p>  
			</div>
			<div class="card-body">
				<img src="<?= base_url('assets/img/loker/'). $l['gambar'] ?>" alt="..." width="100%"
					class="d-block m-auto rounded">
				<h5 class="card-title mt-2">Deskripsi Pekerjaan</h5>
				<div class="card-text"><?= $l['isi_lowongan'] ?></div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
