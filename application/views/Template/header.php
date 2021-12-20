<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman x </title>
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">       
    
    

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?=site_url(); ?>"><h5>PHPMVC2</h5> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=site_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('Surat/Created')?>">Tambah File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=site_url('surat'); ?>">Lihat Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Halaman Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>