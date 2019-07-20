<h3 class="pb-3 text-light border-bottom border-warning col-12">Input Data Game</h3>
<div class="card bg-dark text-light">
    <div class="card-body">
        <?php echo form_open("content/saveGame", array('enctype'=>'multipart/form-data')); ?>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="text" name="nama_game" class="form-control" placeholder="Input Nama Game">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-pencil-alt"></i></label>
                <div class="col-lg-11">
                    <textarea name="deskripsi_game" class="form-control" placeholder="Input Deskripsi Game"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-camera"></i></label>
                <div class="col-lg-11">
                    <input name="gambar_game" type="file" class="form-control">
                    <!-- <label class="custom-file-label">Choose file</label> -->
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning float-right">Save</button>
        <?php echo form_close(); ?>
    </div>
</div>