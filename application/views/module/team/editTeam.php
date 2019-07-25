<h3 class="mt-3 pb-3 text-light border-bottom border-warning d-block">Edit Data Team</h3>
<div class="row justify-content-center">
    <div class="card bg-dark text-light col-md-9">
        <div class="card-body">
            <?php echo form_open("content/updateTeam/".$editTeam->id_team, array('enctype'=>'multipart/form-data')); ?>
                <div class="form-group">
                    <label>Nama Game</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="ngame"><i class="fas fa-gamepad"></i></span>
                        </div>
                        <select name="id_game" class="form-control" aria-label="ngame">
                            <option value="<?php echo $editTeam->id_game ?>"><?= $editTeam->nama_game ?></option>
                            <?php foreach ($dataAllGame as $key) { ?>
                                <option value="<?php echo $key->id_game ?>"><?= $key->nama_game ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label>Nama Team</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="n-team"><i class="fas fa-users"></i></span>
                        </div>
                        <input type="text" name="nama_team" class="form-control" aria-label="n-team" value="<?= $editTeam->nama_team ?>">
                    </div>
                    <label>Deskripsi Team</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="des-team"><i class="fas fa-pencil-alt"></i></span>
                        </div>
                        <textarea name="deskripsi_team" class="form-control" aria-label="des-team"><?= $editTeam->deskripsi_team ?></textarea>
                    </div>
                    <label>Logo Team</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                            <span class="input-group-text" id="logo-team"><i class="fas fa-file-image"></i></span>
                        </div>
                        <input name="logo_team" type="file" class="form-control" aria-label="logo-team">
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning text-light float-right">Update</button>
                    <input type="button" value="Cancel" class="btn btn-danger float-right mr-2" onclick="javascript:window.history.back();">
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>