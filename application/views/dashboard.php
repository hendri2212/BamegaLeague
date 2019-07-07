<body>
<div class="d-flex" id="wrapper">
    <div class="bg-dark" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <a href="<?=base_url() ?>" class="list-group-item list-group-item-action bg-dark text-warning text-center"><i class="fas fa-desktop"></i></a>
            <a href="<?=base_url('content/communities') ?>" class="list-group-item list-group-item-action bg-dark text-warning text-center"><i class="fas fa-users"></i></a>
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
        <div class="content p-lg-5 bg-mblack">
            <?php
                echo $content;
            ?>
        </div>
    </div>
</div>
</body>