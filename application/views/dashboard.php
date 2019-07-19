<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bamega League - E-Sport</title>
    <meta name="description" content="Bamega League - E-Sport">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url().'assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/cs-skin-elastic.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/all.min.css' ?>">
</head>
<body class="bg-mblack">
    <div class="d-flex" id="wrapper">
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="<?= base_url() ?>" class="list-group-item list-group-item-action bg-dark text-warning text-center"><i class="fas fa-desktop"></i></a>
                <a href="<?= base_url('content/communities') ?>" class="list-group-item list-group-item-action bg-dark text-warning text-center"><i class="fas fa-users"></i></a>
                <?php if ($this->session->userdata("status") == "success") { ?>
                    <div class="btn-group dropright">
                        <button type="button" class="list-group-item list-group-item-action bg-dark text-warning text-center dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-edit"></i>
                        </button>
                        <div class="dropdown-menu bg-dark btn-dark" style="margin-left: 5rem;">
                            <a href="<?= base_url('content/game') ?>" class="dropdown-item text-warning bg-dark">Game</a>
                            <a href="<?= base_url('content/team') ?>" class="dropdown-item text-warning bg-dark">Team</a>
                            <a href="<?= base_url('content/turnamen') ?>" class="dropdown-item text-warning bg-dark">Turnamen</a>
                        </div>
                    </div>
                    <a href="<?= base_url('content/logOut') ?>">Logout</a>
                    <?php } else { ?>
                        <a href="<?= base_url('content/login') ?>">Login</a>
                    <?php } ?>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-default" style="position: fixed; width: 100vw; height: 10vh; z-index: 15;">
                <button class="btn btn-dark btn-sm text-warning d-lg-none mb-3" id="menu-toggle"><i class="fas fa-align-justify fa-lg"></i></button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="<?=base_url()?>">
                    <img src="<?=base_url('images/logo.png')?>" alt="logo" class="img-fluid" style="height: 5vh;">
                </a>
            </nav>
            <!-- <div class="content pl-md-5 pr-md-3 pt-md-5 bg-mblack"> -->
            <div class="content pl-md-5 pr-md-3 bg-mblack">
                <?php
                    echo $content;
                ?>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>  
    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/all.min.js')?>"></script>
    <script>
        $("[rel='tooltip']").tooltip();    
        $('.thumbnail').hover(
            function(){
                $(this).find('.caption').fadeIn(250); //.fadeIn(250)
            },
            function(){
                $(this).find('.caption').fadeOut(250); //.fadeOut(205)
            }
        ); 
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>