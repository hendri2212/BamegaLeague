<div class="order text-light mt-4">
    <div class="row">
    <?php foreach($detailOneTurnamen as $row) {?>
        <div class="col-lg-4">
            <img src="<?=base_url("images/$row->gambar_prize_pool")?>" class="img mx-auto d-block mw-100 mh-100 mb-3">  

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
                <div class="trophy bg-dark m-1">
                    <i class="fas fa-trophy trophy-icon" style="color: #ffd700;"></i>
                    <img src="<?=base_url('images/admin.jpg')?>" alt="1st place" class="img-fluid h-100">
                </div>
                <div class="trophy bg-dark m-1">
                    <i class="fas fa-trophy trophy-icon" style="color: #dedede;"></i>
                    <img src="<?=base_url('images/admin.jpg')?>" alt="2nd place" class="img-fluid h-100">
                </div>
                <div class="trophy bg-dark m-1">
                    <i class="fas fa-trophy trophy-icon" style="color: #e36700;"></i>
                    <img src="<?=base_url('images/admin.jpg')?>" alt="3rd place" class="img-fluid h-100">
                </div>  
            </div>
            <div class="card bg-dark mt-lg-4">
                <div class="card-header bg-warning">
                    <strong>PRIZE POOL</strong>
                </div>
                <div class="card-body">
                </div> 
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card bg-dark">
                <div class="card-header bg-warning">
                    <strong>PESERTA</strong>
                </div> 
                <div class="card-body">
                </div>
            </div>
        </div>
    <?php }?>
    </div>
</div>