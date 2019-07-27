<h3 class="mt-3 pb-3 text-light border-bottom border-warning d-block">Input Data Nilai</h3>
<div class="row justify-content-center">
    <div class="card bg-dark text-light col-9">
        <div class="card-body">
            <?php echo form_open("content/updateNilai/".$editNilai->id_nilai, array('enctype'=>'multipart/form-data')); ?>
                <div class="form-group">
                    <label>Nama Turnamen</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="n-turnamen"><i class="fas fa-trophy"></i></span>
                        </div>
                        <select name="id_turnamen" class="form-control">
                            <option value="<?php echo $editNilai->id_turnamen ?>"><?= $editNilai->nama_turnamen ?></option>
                            <?php foreach ($dataAllTurnamen as $turnamen) { ?>
                                <option value="<?php echo $turnamen->id_turnamen ?>"><?= $turnamen->nama_turnamen ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label>Nama Team</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="n-turnamen"><i class="fas fa-users"></i></span>
                        </div>
                        <select name="id_team" class="form-control">
                            <option value="<?php echo $editNilai->id_team ?>"><?= $editNilai->nama_team ?></option>
                            <?php foreach ($dataAllTeam as $team) { ?>
                                <option value="<?php echo $team->id_team ?>"><?= $team->nama_team ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label>Nama Group</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="n-turnamen"><i class="fas fa-user-tag"></i></span>
                        </div>
                        <select name="id_group" class="form-control">
                            <option value="<?php echo $editNilai->id_group ?>"><?= $editNilai->nama_group ?></option>
                            <?php foreach ($dataAllGroup as $group) { ?>
                                <option value="<?php echo $group->id_group ?>"><?= $group->nama_group ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label>Nama Match</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="n-turnamen"><i class="fas fa-gamepad"></i></span>
                        </div>
                        <select name="id_match" class="form-control">
                            <option value="<?php echo $editNilai->id_match ?>"><?= $editNilai->nama_match ?></option>
                                <?php foreach ($dataAllMatch as $match) { ?>
                                    <option value="<?php echo $match->id_match ?>"><?= $match->nama_match ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <label>Nilai Rank</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="n-turnamen"><i class="fas fa-chart-bar"></i></span>
                        </div>
                        <input type="number" name="nilai_rank" class="form-control" value="<?=$editNilai->nilai_rank?>">
                    </div>
                    <label>Nilai Kill</i></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="n-turnamen"><i class="fas fa-chart-bar"></i></span>
                        </div>  
                        <input type="number" name="nilai_kill" class="form-control" value="<?=$editNilai->nilai_kill?>">
                    </div>
                    <label>Nilai Point</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="n-turnamen"><i class="fas fa-chart-bar"></i></span>
                        </div>
                        <input type="number" name="nilai_point" class="form-control" value="<?=$editNilai->nilai_point?>">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-warning text-light float-right">Save</button>
                <input type="button" value="Cancel" class="btn btn-danger float-right mr-2" onclick="javascript:window.history.back();">            
            <?php echo form_close(); ?>
        </div>
    </div>
</div>