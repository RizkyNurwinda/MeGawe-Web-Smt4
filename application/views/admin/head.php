<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>ADMIN MeGawe</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('asset2/css/font-face.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset2/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset2/vendor/font-awesome-5/css/fontawesome-all.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset2/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('asset2/vendor/bootstrap-4.1/bootstrap.min.css');?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('asset2/vendor/animsition/animsition.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset2/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset2/vendor/wow/animate.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/vendor/css-hamburgers/hamburgers.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset2/vendor/slick/slick.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset2/vendor/select2/select2.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset2/vendor/perfect-scrollbar/perfect-scrollbar.css');?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('asset2/css/theme.css');?>" rel="stylesheet" media="all">

</head>
<?php $this->load->view("admin/header");?>
  <br>
 <?php $this->load->view("admin/content");?>
 <br>
 <?php $this->load->view("admin/sidebar");?>
  <br>
  <?php $this->load->view("admin/footer");?>