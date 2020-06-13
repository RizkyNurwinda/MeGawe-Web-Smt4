<!DOCTYPE html>
<html lang="id" class="no-js">
	<head>
		<!-- Site Title -->
		<title>Megawe-Loker</title>

		<?php include 'head.php'; ?>
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<!-- start banner Area -->
		<section class="banner-area relative" id="home">	
			<div class="overlay overlay-bg"> 
			</div>
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner-content col-lg-12">
						<!-- <h1 class="text-white">
							<span><?= $numLowongan ?></span> Lowongan Pekerjaan Tersedia
						</h1> -->
						
					</div>
						
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start feature-cat Area -->
		<section class="feature-cat-area pt-100" id="category">
		<div class="container">
						<div class="row align-items-center">
							<div class="active-popular-post-carusel">
								<?php foreach ($newLowongan as $value): ?>
									<div class="single-popular-post d-flex flex-row">
										<div class="thumb">
											<img class="img-fluid" src="<?= base_url('assets/home/') ?>img/fav.png" alt="">
											<a class="btns text-uppercase" href="<?= base_url('index.php/home/single/'.$value->idLowongan) ?>">Info Detail</a>
										</div>
										<div class="details">
											<h4><?= $value->lowongan ?></h4>
											<h6><?= $value->kota ?></h6>
											<p>
												<?= $value->deskripsi ?>
											</p>
										</div>
									</div>
								<?php endforeach ?>
							</div>
						</div>
					</div>
					</section>

		<!-- <section class="feature-cat-area pt-100" id="category">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10">Kategori Pekerjaan</h1>
							
						</div>
					</div>
				</div>						 -->
				<!-- <div class="row">
					<?php foreach ($kategori as $value): ?>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="#<?= $value->idKategori ?>">
									<img src="<?= base_url('assets/home/img/logo/'.$value->gambar) ?>">
								</a>
								<p><?= $value->namaKategori ?></p>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>	
		</section> -->
		<!-- End feature-cat Area -->
		
		<!-- Start post Area -->
		<!-- <section class="post-area section-gap">
			<?php if (isset($userMasuk) && $userMasuk[0]->level == 1): ?>
				<div class="container">
					<a href="<?= site_url('home/print') ?>" class="btn btn-success">Print Lowongan</a>
				</div> -->
			<?php endif ?>
			
						</ul> -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="card-body"><div class="table-responsive">
			<table id="lowongan" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<!-- <table id="lowongan" class="table table-hover"> -->
							<thead>
					            <tr>
					            	<th>Tgl</th>
					                <th>Lowongan</th>
					                <th>Deskripsi</th>
					                <th>Perusahaan</th>
					                <th>Gaji</th>
					                <th>Kota</th>
					                <th>Jam Kerja</th>
					                <th>Kuota</th>
					                <th>Kategori</th>
					                <th>Aksi</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<?php foreach ($lowongan as $value): ?>	
									<tr>
										<td><?= date('d-m-Y', strtotime($value->tglPost)) ?></td>
										<td><?= $value->lowongan ?></td>
										<td><?= $value->deskripsi ?></td>
										<td><?= $value->namaPerusahaan ?></td>
										<td><?= $value->gaji ?></td>
										<td><?= $value->kota ?></td>
										<td>
											<?php 
												if ($value->jamKerja == 0) {
													echo 'Full Time';
												} elseif ($value->jamKerja == 1) {
													echo 'Part Time';
												} else {
													echo 'Magang';
												}
											?>											
										</td>
										<td><?= $value->kuota ?></td>
										<td><?= $value->namaKategori ?></td>
										<td>
											<?php if (isset($userMasuk) && $userMasuk[0]->level =! 2): ?>
												<a href="<?= base_url('index.php/home/pendaftar/'.$value->idLowongan) ?>" class="btn btn-primary">List Pendaftar</a>
											<?php else: ?>
												<a href="<?= base_url('index.php/home/single/'.$value->idLowongan) ?>" class="btn btn-primary">Lihat</a>
											<?php endif ?>
										</td>
						            </tr>
					        	<?php endforeach ?>
					        </tbody>
						</table>
						</div>
	</div>
</div>	
		</section>
		<!-- End post Area -->
	<?php include 'foot.php'; ?>
	</body>
</html>