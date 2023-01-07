<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/SA.png') ?>" sizes="16x16 32x32">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $judul; ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />-->
   <!-- font-awesome -->
   <link href="<?= base_url(); ?>assets/css/all.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>assets/css/datatables.min.css" rel="stylesheet" />

    <!-- theme css -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/paper-kit.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 9999;
        }
    </style>
</head>

<body class="landing-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url(); ?>" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom">
          BKK SMK SYAFI'I AKROM
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
        <?php
        $hal = $this->uri->segment(1);
        ?>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url(); ?>" class="nav-link <?=($hal=='')?'active':'';?>"><i class="fa fa-home"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('alumni'); ?>" class="nav-link <?=($hal=='alumni')?'active':'';?>"><i class="fa fa-users"></i> Data Alumni</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('formulir'); ?>"  class="nav-link <?=($hal=='formulir')?'active':'';?>"><i class="fas fa-book"></i> Formulir</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Infoloker'); ?>" class="nav-link <?=($hal=='Infoloker')?'active':'';?>"><i class="fa fa-binoculars"></i> Info Loker</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
    