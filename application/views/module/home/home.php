<div class="row mb-3">
    <div class="col-lg-12">
        <!-- <div class="d-flex flex-row justify-content-center"> -->
        <div class="d-flex flex-row">
            <?php foreach ($dataGame as $game) { ?>
                <div class="btn btn-dark p-2 m-2" id="img">
                    <a href="<?= base_url("content/group/$game->id_game") ?>"><img src="<?= base_url('./assets/gambar/game/'.$game->gambar_game) ?>" alt="<?= $game->nama_game ?>" class="img-fluid"></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card bg-dark text-light">
            <div class="card-body">
                <h3 class="box-title">ALL TURNAMEN <?php //echo $this->session->userdata("nama_lengkap") ?></h3>
                <div class="row">
                    <?php foreach($AllTurnamenAktif as $row) {?>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card thumbnail">
                                <a href="<?= base_url("content/detailOneTurnamen/$row->id_turnamen")?>">
                                    <img src="<?= base_url("./assets/gambar/prize/".$row->gambar_turnamen) ?>" class="img-fluid">
                                    <div class="caption"><?= $row->nama_turnamen ?></div>  
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>          
    </div>
</div>