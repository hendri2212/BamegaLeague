<h3 class="pb-3 text-light border-bottom border-warning col-12">Data Pemain</h3>
<div class="card bg-dark text-light">
    <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="text" disabled class="form-control" value="<?= $detailCommunities->id_team ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="number" disabled class="form-control" value="<?= $detailCommunities->kode_pemain ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="text" disabled class="form-control" value="<?= $detailCommunities->nama_pemain ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="file" disabled class="form-control" value="<?= $detailCommunities->foto_pemain ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="number" disabled class="form-control" value="<?= $detailCommunities->no_handphone ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1"><i class="fas fa-gamepad"></i></label>
                <div class="col-lg-11">
                    <input type="text" disabled class="form-control" value="<?= $detailCommunities->alamat ?>">
                </div>
            </div>
            <input type="button" value="Back" class="btn btn-info float-right mr-2" onclick="javascript:window.history.back();">
    </div>
</div>