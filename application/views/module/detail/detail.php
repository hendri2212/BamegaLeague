<div class="order text-light">
    <div class="row">
    <?php foreach($this->model->data_turnamen_byid($id) as $row) {?>
        <div class="col-lg-4">
            <div class="card bg-dark">
                <img src="<?=base_url("images/$row->gambar_turnamen")?>" class="img-fluid">                
            </div>

            <div class="card bg-dark" style="height: 400px;">
                <div class="card-header" style="background: rgb(29, 29, 29);">
                    <strong>DETAIL TURNAMEN</strong>
                </div> 
                <div class="card-body">
                    <p><?=$row->deskripsi?></p>
                </div>
            </div>
        </div>
       
        <div class="col-lg-4">
            <div class="d-flex flex-row justify-content-center">
                <div class="trophy bg-dark m-1">
                    <i class="fas fa-trophy trophy-icon" style="color: #ffd700;"></i>
                    <img src="<?=base_url('images/admin.jpg')?>" alt="1st place" class="img-fluid" style="height: 100%;">
                </div>
                <div class="trophy bg-dark m-1">
                    <i class="fas fa-trophy trophy-icon" style="color: #dedede;"></i>
                    <img src="<?=base_url('images/admin.jpg')?>" alt="1st place" class="img-fluid" style="height: 100%;">
                </div>
                <div class="trophy bg-dark m-1">
                    <i class="fas fa-trophy trophy-icon" style="color: #e36700;"></i>
                    <img src="<?=base_url('images/admin.jpg')?>" alt="1st place" class="img-fluid" style="height: 100%;">
                </div>  
            </div>
            <div class="card bg-dark mt-lg-4" style="height: 220px;">
                <div class="card-header" style="background: rgb(29, 29, 29);">
                    <strong>PRIZE POOL</strong>
                </div> 
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card bg-dark" style="height: 650px;">
                <div class="card-header" style="background: rgb(29, 29, 29);">
                    <strong>PESERTA</strong>
                </div> 
            </div>
        </div>
    <?php }?>
    </div>
</div>