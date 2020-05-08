<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('asset2/css/font-face.css" rel="stylesheet" media="all')?>">
    <link href="<?php echo base_url('asset2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all')?>">
    <link href="<?php echo base_url('asset2/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all')?>">
    <link href="<?php echo base_url('asset2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all')?>">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('asset2/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all')?>">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('asset2/vendor/animsition/animsition.min.css" rel="stylesheet" media="all')?>">
    <link href="<?php echo base_url('asset2/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all')?>">
    <link href="<?php echo base_url('asset2/vendor/wow/animate.css" rel="stylesheet" media="all')?>">
    <link href="<?php echo base_url('asset2/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all')?>">
    <link href="<?php echo base_url('asset2/vendor/slick/slick.css" rel="stylesheet" media="all')?>">
    <link href="<?php echo base_url('asset2/vendor/select2/select2.min.css" rel="stylesheet" media="all')?>">
    <link href="<?php echo base_url('asset2/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all')?>">

    <!-- Main CSS-->
    <link href="<?php echo base_url('asset2/css/theme.css" rel="stylesheet" media="all')?>">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h2> Login </h2>
                        </div>
                        <div class="login-form">
                        <?php
			            echo validation_errors('<div class="alert alert-warning">', '</div>');
			            //error
			            if (($this->session->flashdata('error'))) {
			              echo '<div class="alert alert-warning">';
			              echo $this->session->flashdata('error');
			              echo '</div>';
			            }
			            ?>

				        <div class="col-sm-12">
				          <a style="float: right;" href="<?= base_url('user') ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
				        </div>		      
						<?php
						echo form_open_multipart(base_url('user/add'));
						?>
                            <form action="" method="post">
                            <div class="col-md-6">
							<div class="form-group">
								<label for="password">Password <span class="status lemah">lemah</span> </label>
								<input type="password" name="password" value="<?= set_value('password')?>" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" placeholder="Password" autofocus id="password">
								<small class="text-danger"><?= form_error('password'); ?></small>
							</div>
							<div class="form-group">
								<label for="nama_pasien">Username</label>
								<input type="text" autocomplete="off" name="username" value="<?= set_value('username')?>" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" placeholder="Username">
								<small class="text-danger"><?= form_error('username'); ?></small>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" name="alamat" value="<?= set_value('alamat')?>" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" placeholder="Alamat">
								<small class="text-danger"><?= form_error('alamat'); ?></small>
							</div>
							<div class="form-group">
								<label for="no_hp">Nomor HP</label>
								<input type="text" name="no_hp" value="<?= set_value('no_hp')?>" class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" placeholder="Nomor HP"
								 id="nomor-hp">
								<small class="text-danger"><?= form_error('no_hp'); ?></small>
							</div>
							<div class="form-group">
								<label for="NIK">Email</label>
								<input type="text" name="email" value="<?= set_value('email')?>" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" placeholder="Email">
								<small class="text-danger"><?= form_error('email'); ?></small>
								<br>
							</div>
						</div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign up</button>
                
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Account ready?
                                    <a href="#">Sign In Here</a>
                                </p>
                            </div>
                        </div>
                        <?php
						echo form_close();
						?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('asset2/vendor/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('asset2/vendor/bootstrap-4.1/popper.min.js')?>"></script>
    <script src="<?php echo base_url('asset2/vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('asset2/vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?php echo base_url('asset2/vendor/wow/wow.min.js')?>"></script>
    <script src="<?php echo base_url('asset2/vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?php echo base_url('asset2/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?php echo base_url('asset2/vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('asset2/vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?php echo base_url('asset2/vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?php echo base_url('asset2/vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?php echo base_url('asset2/vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('asset2/vendor/select2/select2.min.js')?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('asset2/js/main.js')?>"></script>

</body>

</html>
<!-- end document-->