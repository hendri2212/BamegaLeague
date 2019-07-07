<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bamega League - E-Sport</title>
    <meta name="description" content="Bamega League - E-Sport">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url('assets/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css')?>">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
</head>
<body>
<div class="d-flex" id="wrapper">
    <div class="bg-dark" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <a href="<?=base_url() ?>" class="list-group-item list-group-item-action bg-dark text-warning text-center"><i class="fas fa-desktop"></i></a>
            <a href="<?=base_url('content/communities') ?>" class="list-group-item list-group-item-action bg-dark text-warning text-center"><i class="fas fa-users"></i></a>
        </div>
    </div>
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-default" style="position: fixed; height: 10vh; width: 100vw; z-index:15;">
            <button class="btn btn-dark btn-sm text-warning d-lg-none mb-3" id="menu-toggle"><i class="fas fa-align-justify fa-lg"></i></button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="<?=base_url()?>"><img src="<?=base_url('images/logo.png')?>" alt="logo" class="img-fluid mb-3 mb-lg-1" style="height:7vh;"></a>
        </nav>
