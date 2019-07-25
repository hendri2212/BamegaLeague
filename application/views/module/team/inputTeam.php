<h3 class="mt-3 pb-3 text-light border-bottom border-warning d-block">Input Data Team</h3>
<div class="row justify-content-center">
    <div class="card bg-dark text-light p-1 col-md-9">
        <div class="card-body">
            <?php echo form_open("content/saveTeam", array('enctype'=>'multipart/form-data')); ?>
                <div class="form-group">
                    <label>Nama Game</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="ngame"><i class="fas fa-gamepad"></i></span>
                        </div>
                        <select name="id_game" class="form-control" aria-label="ngame">
                            <?php foreach ($dataAllGame as $game) { ?>
                                <option value="<?php echo $game->id_game ?>"><?= $game->nama_game ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label>Nama Team</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="n-team"><i class="fas fa-users"></i></span>
                        </div>
                        <input type="text" name="nama_team" class="form-control" aria-label="n-team" placeholder="Input Nama Team">
                    </div>
                    <label>Deskripsi Team</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="des-team"><i class="fas fa-pencil-alt"></i></span>
                        </div>
                        <textarea name="deskripsi_team" class="form-control" aria-label="des-team" placeholder="Input Deskripsi Team"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="logo-team"><i class="fas fa-file-image"></i></span>
                        </div>
                        <input name="logo_team" type="file" class="form-control" aria-label="logo-team">
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning text-light float-right">Save</button>
                    <input type="button" value="Cancel" class="btn btn-danger float-right mr-2" onclick="javascript:window.history.back();">            
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>