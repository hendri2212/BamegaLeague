<h3 class="mt-3 pb-3 text-light border-bottom border-warning col-12">Edit Data Team</h3>
<div class="card bg-dark text-light">
    <div class="card-body">
        <?php echo form_open("content/updateTeam/".$editTeam->id_team, array('enctype'=>'multipart/form-data')); ?>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="text" name="nama_team" class="form-control" value="<?= $editTeam->nama_team ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-pencil-alt"></i></label>
                <div class="col-lg-11">
                    <textarea name="deskripsi_team" class="form-control"><?= $editTeam->deskripsi_team ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-camera"></i></label>
                <div class="col-lg-11">
                    <input name="logo_team" type="file" class="form-control">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning float-right">Update</button>
            <input type="button" value="Cancel" class="btn btn-info float-right mr-2" onclick="javascript:window.history.back();">
        <?php echo form_close(); ?>
    </div>
</div>