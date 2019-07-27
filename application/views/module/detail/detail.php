<div class="order text-light mt-4">
    <div class="row">
    <?php foreach($detailOneTurnamen as $row) {?>
        <div class="col-lg-4">
            <img src="<?=base_url("./assets/gambar/prize/").$row->gambar_turnamen?>" class="img mx-auto d-block mw-100 mh-100 mb-3">  

            <div class="card bg-dark">
                <div class="card-header bg-warning">
                    <strong>DETAIL TURNAMEN</strong>
                </div> 
                <div class="card-body">
                    <span><?=$row->deskripsi?></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-row justify-content-center">
                <?php if(empty($row->total)) : for($i = 1;$i <=3;$i++){?>
                    <div class="card trophy bg-dark m-1">
                        <i class="fas fa-trophy trophy-icon" style="color: #dedede;"></i>
                        <img src="<?=base_url('images/admin.jpg')?>" alt="2nd place" class="img-fluid rounded h-100">
                        <small class="flat-color-1 text-light d-block pl-1">dfdf</small>
                    </div>
                <?php  } else :?>
                    <?php foreach($detailOneTurnamenLimit as $key) { $total = $key->total;?>
                        <div class="card trophy bg-dark m-1">
                            <i class="fas fa-trophy trophy-icon" style="color: #ffd700;"></i>
                            <img src="<?=base_url('./assets/gambar/team/').$key->logo_team?>" alt="1st place" class="img-fluid rounded h-100">
                            <small class="flat-color-1 text-light d-block pl-1"><?= $key->nama_team?></small>
                            <small class="flat-color-1 text-light d-block pl-1"><?= $key->total?></small>
                        </div>
                    <?php } ?>
                <?php endif; ?>
            </div>
            <div class="card bg-dark mt-lg-4">
                <div class="card-header bg-warning">
                    <strong>PRIZE POOL</strong>
                </div>
                <div class="card-body">
                    <img src="<?=base_url("./assets/gambar/prize/").$row->gambar_prize_pool?>" class="img mx-auto d-block mw-100 mh-100 mb-3 "> 
                </div> 
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card bg-dark">
                <div class="card-header bg-warning">
                    <strong>PESERTA</strong>
                </div> 
                <div class="card-body">
                    <?php $no=1; foreach($detailOneTurnamenTeam as $peserta){?>
                    <table>
                        <tr>
                            <td><?= $no ++?></td>
                            <td>
                                <img src="<?=base_url('./assets/gambar/team/').$peserta->logo_team?>" alt="1st place" class="img-fluid rounded h-100">
                            </td>
                            <td>
                                <small class="flat-color-1 text-light d-block pl-1"><?= $peserta->nama_team?></small>
                            </td>
                        </tr>
                    </table>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>