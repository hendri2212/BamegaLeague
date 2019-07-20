<h3 class="pb-3 text-light border-bottom border-warning col-12">Data Pemain</h3>
<div class="card bg-dark text-light">
    <div class="card-body">
        <?php echo form_open("content/updatePemain/".$editPemain->id_pemain, array('enctype'=>'multipart/form-data')); ?>
            <div class="form-group row">
                <label class="col-lg-1">Nama Game</label>
                <div class="col-lg-11">
                    <select name="id_team" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="number" name="kode_pemain" class="form-control" value="<?= $editPemain->kode_pemain ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="text" name="nama_pemain" class="form-control" value="<?= $editPemain->nama_pemain ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="number" name="no_handphone" class="form-control" value="<?= $editPemain->no_handphone ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="text" name="alamat" class="form-control" value="<?= $editPemain->alamat ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="file" name="foto_pemain" class="form-control" value="<?= $editPemain->foto_pemain ?>">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning float-right">Update</button>
            <input type="button" value="Cancel" class="btn btn-info float-right mr-2" onclick="javascript:window.history.back();">
        <?php echo form_close(); ?>
    </div>
</div>