<h3 class="pb-3 text-light border-bottom border-warning col-12 mt-lg-3">Data Pemain</h3>

<div class="row text-light">
    <div class="col-sm-12 col-md-8">
        <div class="d-flex flex-md-row card bg-dark p-2">
            <div id="profile">
                <img src="<?= base_url('./assets/gambar/pemain/').$detailCommunities->foto_pemain ?>"  alt="" class="img w-100 h-auto"> 
            </div>
            <div class="d-flex flex-column ml-2">
                <h3><?= $detailCommunities->nama_pemain ?></h3>
                <h5><?= $detailCommunities->kode_pemain ?></h5>
            </div>
            
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="d-flex flex-row card bg-dark p-2">
            <img src="<?= base_url('./assets/gambar/team/').$detailCommunities->logo_team ?>"  alt="" class="img w-25 h-25"> 
            <div class="d-flex flex-column">
                <h6><?= $detailCommunities->nama_team ?></h6>
                <h6><?= $detailCommunities->tanggal_daftar ?></h6>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="d-flex flex-row card bg-dark p-2">
            <div class="d-flex flex-column mx-auto">
                <h5>No Handphone</h5>
                <h5>Alamat</h5>
            </div>
            <div class="d-flex flex-column mr-auto">
                <h5>: <?= $detailCommunities->no_handphone ?></h5>
                <h5>: <?= $detailCommunities->alamat ?></h5>
            </div>
        </div>
    </div>
</div>
<input type="button" value="Back" class="btn btn-info float-right mr-2" onclick="javascript:window.history.back();">
