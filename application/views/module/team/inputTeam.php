<h3 class="mt-3 pb-3 text-light border-bottom border-warning col-12">Input Data Team</h3>
<div class="card bg-dark text-light">
    <div class="card-body">
        <?php echo form_open("content/saveTeam", array('enctype'=>'multipart/form-data')); ?>
            <div class="form-group row">
                <label class="col-lg-1">Nama Game</label>
                <div class="col-lg-11">
                    <select name="id_game" class="form-control">
                        <?php foreach ($dataAllGame as $key) { ?>
                            <option value="<?php echo $key->id_game ?>"><?= $key->nama_game ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-users"></i></label>
                <div class="col-lg-11">
                    <input type="text" name="nama_team" class="form-control" placeholder="Input Nama Team">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi_game" class="col-lg-1"><i class="fas fa-pencil-alt"></i></label>
                <div class="col-lg-11">
                    <textarea name="deskripsi_team" class="form-control" placeholder="Input Deskripsi Team"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi_game" class="col-lg-1"><i class="fas fa-camera"></i></label>
                <div class="col-lg-11">
                    <input name="logo_team" type="file" class="form-control">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning float-right">Save</button>
        <?php echo form_close(); ?>
    </div>
</div>