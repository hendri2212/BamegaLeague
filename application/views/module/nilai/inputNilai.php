<h3 class="mt-3 pb-3 text-light border-bottom border-warning col-12">Input Data Nilai</h3>
<div class="card bg-dark text-light">
    <div class="card-body">
        <?php echo form_open("content/saveNilai", array('enctype'=>'multipart/form-data')); ?>
            <div class="form-group row">
                <label class="col-lg-1">Nama Turnamen</label>
                <div class="col-lg-11">
                    <select name="id_turnamen" class="form-control">
                        <?php foreach ($dataAllTurnamen as $turnamen) { ?>
                            <option value="<?php echo $turnamen->id_turnamen ?>"><?= $turnamen->nama_turnamen ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1">Nama Team</label>
                <div class="col-lg-11">
                    <select name="id_team" class="form-control">
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
                        <?php foreach ($dataAllMatch as $match) { ?>
                            <option value="<?php echo $match->id_match ?>"><?= $match->nama_match ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1">Nilai Rank</label>
                <div class="col-lg-11">
                    <input type="number" name="nilai_rank" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1">Nilai Kill</i></label>
                <div class="col-lg-11">
                    <input type="number" name="nilai_kill" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1">Nilai Point</label>
                <div class="col-lg-11">
                    <input type="number" name="nilai_point" class="form-control">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning float-right">Save</button>
        <?php echo form_close(); ?>
    </div>
</div>