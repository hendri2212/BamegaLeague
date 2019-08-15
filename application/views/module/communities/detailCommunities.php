<h3 class="pb-3 text-light border-bottom border-warning col-12 mt-lg-3">Data Pemain</h3>

<div class="row text-light">
<?php 
    error_reporting(0);
    $id_pemain = $this->uri->segment('3');
    if($id_pemain == $detailCommunities->id_pemain){
?>
    <div class="col-sm-12 col-md-8">
        <div class="d-flex flex-md-row card bg-dark p-2">
            <div class="w-25 bg-mblack text-center align-self-center" style="overflow: hidden;">
                <img src="<?= base_url('./assets/gambar/pemain/').$detailCommunities->foto_pemain ?>"  alt="foto_pemain" class="img-fluid"> 
            </div>
            <div class="d-flex flex-column ml-2">
                <h3><?= $detailCommunities->nama_pemain ?></h3>
                <h5><?= $detailCommunities->kode_pemain ?></h5>
            </div>
            
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="d-flex flex-row card bg-dark p-2">
            <div class="bg-mblack text-center">
                <img src="<?= base_url('./assets/gambar/team/').$detailCommunities->logo_team ?>"  alt="logo_team" class="img-fluid"> 
            </div>
            <div class="d-flex flex-column">
                <h6><?= $detailCommunities->nama_team ?></h6>
                <h6><?= $detailCommunities->tanggal_daftar ?></h6>
                <h6><?= $detailCommunities->id_pemain?></h6>
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
<?php } else{ ?>
    <div class="col-sm-12 col-md-8">
        <div class="d-flex flex-md-row card bg-dark p-2">
            <div class="w-25 bg-mblack text-center align-self-center" style="overflow: hidden;">
                <img src="<?= base_url('./assets/gambar/pemain/').$detailCommunitiesNoTeam->foto_pemain ?>"  alt="foto_pemain" class="img-fluid"> 
            </div>
            <div class="d-flex flex-column ml-2">
                <h3><?= $detailCommunitiesNoTeam->nama_pemain ?></h3>
                <h5><?= $detailCommunitiesNoTeam->kode_pemain ?></h5>
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
                <h5>: <?= $detailCommunitiesNoTeam->no_handphone ?></h5>
                <h5>: <?= $detailCommunitiesNoTeam->alamat ?></h5>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<input type="button" value="Back" class="btn btn-info float-right mr-2" onclick="javascript:window.history.back();">
