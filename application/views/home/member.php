<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
 <!-- Site Title -->
 <title>Data Member</title>

 <?php include 'head.php'; ?>
</head>
<body>
  <?php include 'header.php'; ?>

  <!-- start banner Area -->
  <section class="banner-area relative" id="home">	
   <div class="overlay overlay-bg"></div>
   <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
     <div class="about-content col-lg-12">
      <h1 class="text-white">
       My Lowongan
     </h1>	
     <p class="text-white link-nav"><a href="<?= base_url() ?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('index.php/home/lowongan') ?>"> My Lowongan</a>   <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('index.php/home/pendaftar/'.$this->uri->segment(3)) ?>"> Pendaftar</a>
     </div>											
   </div>
 </div>
</section>
<!-- End banner Area -->	

<!-- Start Perusahaan Area -->
<section class="blog-posts-area" style="margin: 5%">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 post-list blog-post-list">
        <table id="lowongan" class="table table-hover">
          <thead>
            <tr>
              <th>Nama Member</th>
              <th>JK</th>
              <th>Tgl Lahir</th>
              <th>Agama</th>
              <th>Alamat</th>
              <th>No Telepon</th>
              <th>Email</th>
              <th>Foto Member</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pendaftar as $value): ?> 
              <tr>
                <td><?= $value->namaMember ?></td>
                <td><?= $value->jenisKelamin ?></td>
                <td><?= date('d-m-Y', strtotime($value->tanggalLahir)) ?></td>
                <td><?= $value->agama ?></td>
                <td><?= $value->alamat ?></td>
                <td><?= $value->noTelp ?></td>
                <td><?= $value->email ?></td>
                <td><img style="height:120px; width:100px;" src="<?php echo base_url('assets/home/img/member/') . $value->fotoMember ?>"></td>
                
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>  
</section>
<!-- End Perusahaan Area -->

<?php include 'foot.php'; ?>
</body>
</html>