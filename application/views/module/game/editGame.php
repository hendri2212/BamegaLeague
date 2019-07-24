<h3 class="pb-3 mt-2 text-light border-bottom border-warning d-block">Edit Data Game</h3>
<div class="row justify-content-center">
    <div class="card bg-dark text-light p-1 col-md-9">
        <div class="card-body">
            <?php echo form_open("content/updateGame/".$editGame->id_game, array('enctype'=>'multipart/form-data')); ?>
                <div class="form-group">
                    <label>Nama Game</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="ngame"><i class="fas fa-gamepad"></i></span>
                        </div>
                        <input type="text" name="nama_game" class="form-control" aria-label="ngame" value="<?= $editGame->nama_game ?>">
                    </div>
                    <label>Deskripsi Game</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="dgame"><i class="fas fa-pencil-alt"></i></span>
                        </div>
                        <textarea name="deskripsi_game" class="form-control" aria-label="dgame"><?= $editGame->deskripsi_game ?></textarea>
                    </div>
                    <label>Gambar Game</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="ggame"><i class="fas fa-file-image"></i></span>
                        </div>
                        <input name="gambar_game" type="file" class="form-control" aria-label="ggame">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-warning text-white float-right">Update</button>
                <input type="button" value="Cancel" class="btn btn-danger float-right mr-2" onclick="javascript:window.history.back();">
            <?php echo form_close(); ?>
        </div>
    </div>
</div>