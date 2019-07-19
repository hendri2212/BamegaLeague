<h3 class="pb-3 text-light border-bottom border-warning col-12">Input Data Turnamen</h3>
<div class="card bg-dark text-light">
    <div class="card-body">
        <?php echo form_open("content/saveTurnamen", array('enctype'=>'multipart/form-data')); ?>
            <div class="form-group row">
                <label class="col-lg-1">Nama Game</label>
                <div class="col-lg-11">
                    <select name="id_game" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-calendar-alt"></i></label>
                <div class="col-lg-11">
                    <input type="date" name="tanggal_turnamen" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-pencil-alt"></i></label>
                <div class="col-lg-11">
                    <textarea name="deskripsi" class="form-control" placeholder="Input Deskripsi Turnamen"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-camera"></i></label>
                <div class="col-lg-11">
                    <input name="gambar_prize_pool" type="file" class="form-control">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning float-right">Save</button>
        <?php echo form_close(); ?>
    </div>
</div>