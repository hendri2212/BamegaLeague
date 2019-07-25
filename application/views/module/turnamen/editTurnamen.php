<h3 class="mt-3 pb-3 text-light border-bottom border-warning d-block">Edit Data Turnamen</h3>
<div class="row justify-content-center">
    <div class="card bg-dark text-light p-1 col-md-9">
        <div class="card-body">
            <?php echo form_open("content/updateTurnamen/".$editTurnamen->id_turnamen, array('enctype'=>'multipart/form-data')); ?>
                <div class="form-group">
                    <label>Nama Game</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="ngame"><i class="fas fa-gamepad"></i></span>
                        </div>
                        <select name="id_game" class="form-control" aria-label="ngame">
                            <option value="<?php echo $editTurnamen->id_game ?>"><?= $editTurnamen->nama_game ?></option>
                            <?php foreach ($dataAllGame as $key) { ?>
                                <option value="<?php echo $key->id_game ?>"><?= $key->nama_game ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label>Tanggal Turnamen</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="tgl-turnamen"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" name="tanggal_turnamen" class="form-control" aria-label="tgl-turnamen" value="<?= $editTurnamen->tanggal_turnamen ?>">
                    </div>
                    <label>Deskripsi Turnamen</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="des-turnamen"><i class="fas fa-pencil-alt"></i></span>
                        </div>
                        <textarea name="deskripsi" class="form-control" aria-label="des-turnamen"><?= $editTurnamen->deskripsi ?></textarea>
                    </div>
                    <label>Gambar Prize Pool</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="g-prize"><i class="fas fa-file-image"></i></span>
                        </div>
                        <input name="gambar_prize_pool" type="file" class="form-control" aria-label="g-prize">
                    </div>
                    <label>Status Turnamen</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="status"><i class="far fa-circle"></i></span>
                        </div>
                        <select name="status_turnamen" class="form-control" aria-label="status">
                            <?php if($editTurnamen->status_turnamen == 0):?>
                                <option value="<?= $editTurnamen->status_turnamen ?>">Pending</option>
                            <?php elseif($editTurnamen->status_turnamen == 1):?>
                                <option value="<?=$editTurnamen->status_turnamen?>">On Going</option>
                            <?php else:?>
                                <option value="<?= $editTurnamen->status_turnamen ?>">Finish</option>
                            <?php endif ?>
                            <option value="0">Pending</option>
                            <option value="1">On Going</option>
                            <option value="2">Finish</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning text-light float-right">Update</button>
                    <input type="button" value="Cancel" class="btn btn-danger float-right mr-2" onclick="javascript:window.history.back();">
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
