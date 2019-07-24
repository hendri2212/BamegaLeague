<h3 class="mt-3 pb-3 text-light border-bottom border-warning d-block">Input Data Turnamen</h3>
<div class="row justify-content-center">
    <div class="card bg-dark text-light p-1 col-md-9">
        <div class="card-body">
            <?php echo form_open("content/saveTurnamen", array('enctype'=>'multipart/form-data')); ?>
                <div class="form-group">
                    <label>Nama Game</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="ngame"><i class="fas fa-gamepad"></i></span>
                        </div>
                        <select name="id_game" class="form-control" aria-label="ngame">
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
                        <input type="date" name="tanggal_turnamen" class="form-control" aria-label="tgl-turnamen">
                    </div>
                    <label>Deskripsi Turnamen</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="des-turnamen"><i class="fas fa-pencil-alt"></i></span>
                        </div>
                        <textarea name="deskripsi" class="form-control" placeholder="Input Deskripsi Turnamen" arial-label="des-turnamen"></textarea>
                    </div>
                    <label>Gambar Prize Pool</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="g-prize"><i class="fas fa-file-image"></i></span>
                        </div>
                        <input name="gambar_prize_pool" type="file" class="form-control" aria-label="g-prize">
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning text-light float-right">Save</button>
                    <input type="button" value="Cancel" class="btn btn-danger float-right mr-2" onclick="javascript:window.history.back();">            
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>