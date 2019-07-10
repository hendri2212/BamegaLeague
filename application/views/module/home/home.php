<div class="row mb-3">
    <div class="col-lg-12">
        <!-- <div class="d-flex flex-row justify-content-center"> -->
        <div class="d-flex flex-row">
            <?php foreach ($dataGame as $game) { ?>
                <div class="btn btn-dark p-2 m-2" id="img">
                    <img src="<?= base_url('images/'.$game->gambar_game) ?>" alt="pubg-mobile" class="img-fluid">
                </div>
            <?php } ?>
        </div>
    </div>
</div>  
<div class="row">
    <div class="col-lg-12">
        <div class="card bg-dark text-light">
            <div class="card-body">
                <h3 class="box-title">TURNAMEN</h3>
                <div class="row">
                <?php foreach($this->model->data_turnamen() as $row) {?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card thumbnail">
                            <a href="<?=base_url("content/detail/$row->id_turnamen")?>">
                                <img src="<?=base_url("images/dummy.png")?>" class="img-fluid">
                                <div class="caption"><?=$row->deskripsi?></div>  
                            </a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>          
    </div>
</div>
<!-- <div class="clearfix"></div> -->
<div class="orders">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-sm table-hover table-dark">
                    <thead class="bg-mblack">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Turnamen</th>
                        <th scope="col">Queue</th>
                        <th scope="col">Prize</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td><span class="btn btn-sm bg-success text-white">Selesai</span></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td><span class="btn btn-sm bg-warning text-white">Upcoming</span></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>@mdo</td>
                            <td>Larry the Bird</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td><span class="btn btn-sm bg-danger text-white">Ongoing</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>