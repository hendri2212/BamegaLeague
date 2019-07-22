<h3 class="mt-3 pb-3 text-light border-bottom border-warning col-12">Edit Data Nilai</h3>
<div class="card bg-dark text-light">
    <div class="card-body">
        <?php echo form_open("content/updateNilai/".$editNilai->id_nilai, array('enctype'=>'multipart/form-data')); ?>
            <div class="form-group row">
                <label class="col-lg-1">Nama Team</label>
                <div class="col-lg-11">
                    <select name="id_team" class="form-control">
                        <option value="<?php echo $editNilai->id_team ?>"><?= $editNilai->nama_team ?></option>
                        <?php foreach ($dataAllTeam as $team) { ?>
                            <option value="<?php echo $team->id_team ?>"><?= $team->nama_team ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1">Nama Group</label>
                <div class="col-lg-11">
                    <select name="id_group" class="form-control">
                        <option value="<?php echo $editNilai->id_group ?>"><?= $editNilai->nama_group ?></option>
                        <?php foreach ($dataAllGroup as $group) { ?>
                            <option value="<?php echo $group->id_group ?>"><?= $group->nama_group ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1">Nama Match</label>
                <div class="col-lg-11">
                    <select name="id_match" class="form-control">
                    <option value="<?php echo $editNilai->id_match ?>"><?= $editNilai->nama_match ?></option>
                        <?php foreach ($dataAllMatch as $match) { ?>
                            <option value="<?php echo $match->id_match ?>"><?= $match->nama_match ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1">Nilai Rank</label>
                <div class="col-lg-11">
                    <input type="number" name="nilai_rank" class="form-control" value="<?= $editNilai->nilai_rank ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1">Nilai Kill</label>
                <div class="col-lg-11">
                    <input type="number" name="nilai_kill" class="form-control" value="<?= $editNilai->nilai_kill ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1">Nilai Point</label>
                <div class="col-lg-11">
                    <input type="number" name="nilai_point" class="form-control" value="<?= $editNilai->nilai_point ?>">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning float-right">Update</button>
            <input type="button" value="Cancel" class="btn btn-info float-right mr-2" onclick="javascript:window.history.back();">
        <?php echo form_close(); ?>
    </div>
</div>