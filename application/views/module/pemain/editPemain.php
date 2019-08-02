<h3 class="pb-3 text-light border-bottom border-warning d-block">Edit Data Pemain</h3>
<div class="row justify-content-center">
    <div class="card bg-dark text-light p-1 col-md-9">
        <div class="card-body">
            <?php echo form_open("content/updatePemain/".$editPemain->id_pemain, array('enctype'=>'multipart/form-data')); ?>
                <div class="form-group">
                    <label>Kode Pemain</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="k-pemain"><i class="fas fa-id-badge"></i></span>
                        </div>
                        <input type="number" name="kode_pemain" class="form-control" aria-label="k-pemain" value="<?= $editPemain->kode_pemain ?>">
                    </div>
                    <label>Nama Pemain</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">  
                            <span class="input-group-text" id="n-pemain"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="nama_pemain" class="form-control" aria-label="n-pemain" value="<?= $editPemain->nama_pemain ?>">
                    </div>
                    <label>No Handphone</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="no-phone"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="number" name="no_handphone" class="form-control" aria-label="no-phone" value="<?= $editPemain->no_handphone ?>">
                    </div>
                    <label>Alamat</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="alamat"><i class="fas fa-map-marked-alt"></i></span>
                        </div>
                        <input type="text" name="alamat" class="form-control" aria-label="alamat" value="<?= $editPemain->alamat ?>">
                    </div>
                    <label>Foto Pemain</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="foto-pemain"><i class="fas fa-file-image"></i></span>
                        </div>
                        <input type="file" name="foto_pemain" class="form-control" aria-label="foto-pemain">
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning text-light float-right">Update</button>
                    <input type="button" value="Cancel" class="btn btn-danger float-right mr-2" onclick="javascript:window.history.back();">            
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>