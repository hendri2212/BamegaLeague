<body>
<div class="d-flex" id="wrapper">
    <div class="bg-dark" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <a href="<?=base_url() ?>" class="list-group-item list-group-item-action bg-dark text-warning text-center"><i class="fas fa-desktop"></i></a>
            <a href="<?=base_url('content/communities') ?>" class="list-group-item list-group-item-action bg-dark text-warning text-center"><i class="fas fa-users"></i></a>
            <div class="btn-group dropright">
                <button type="button" class="list-group-item list-group-item-action bg-dark text-warning text-center dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-edit"></i>
                </button>
                <div class="dropdown-menu bg-dark btn-dark" style="margin-left: 5rem;">
                    <a href="<?=base_url('content/game') ?>" class="dropdown-item text-warning bg-dark">Game</a>
                    <a href="<?=base_url('content/team') ?>" class="dropdown-item text-warning bg-dark">Team</a>
                    <a href="<?=base_url('content/turnamen') ?>" class="dropdown-item text-warning bg-dark">Turnamen</a>
                </div>
            </div>
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
        <div class="content pl-lg-5 pr-lg-5 pt-lg-4 bg-mblack">
            <?php
                echo $content;
            ?>
        </div>
    </div>
</div>
</body>