<h3 class="pb-3 text-light border-bottom border-warning col-12">Edit Data Turnamen</h3>
<div class="card bg-dark text-light">
    <div class="card-body">
        <?php echo form_open("content/updateTurnamen/".$editTurnamen->id_turnamen, array('enctype'=>'multipart/form-data')); ?>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="date" name="tanggal_turnamen" class="form-control" value="<?= $editTurnamen->tanggal_turnamen ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-pencil-alt"></i></label>
                <div class="col-lg-11">
                    <textarea name="deskripsi" class="form-control"><?= $editTurnamen->deskripsi ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-camera"></i></label>
                <div class="col-lg-11">
                    <input name="gambar_prize_pool" type="file" class="form-control">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning float-right">Update</button>
            <input type="button" value="Cancel" class="btn btn-info float-right mr-2" onclick="javascript:window.history.back();">
        <?php echo form_close(); ?>
    </div>
</div>