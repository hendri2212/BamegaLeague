<div class="row mt-lg-3">
    <div class="col-lg-12">
        <div class="d-flex flex-row-reverse mb-3 ">
            <div class="p-2">
                <form action="#" class="input-group">
                    <input type="text" placeholder="Cari" class="form-control bg-dark border border-warning">
                    <a href="#" class="btn btn-warning"><i class="fas fa-search"></i></a>                 
                </form>
            </div>
            <div class="p-2"><a href="" class="btn border-warning text-warning"><b>Daftarkan Komunitas</b></a></div>
        </div>
    </div>
    <?php foreach ($dataAllCommunities as $pemain) { ?>
    <div class="col-lg-4">
        <div class="d-flex flex-row mb-3 border border-warning text-muted">
            <div class="p-1 align-self-center text-center profile">
                <img src="<?= base_url('./assets/gambar/pemain/').$pemain->foto_pemain ?>" alt="foto_pemain" class="img-fluid ounded">
            </div>
            <div class="d-flex flex-column">
                <div class="p-1 h5"><i class="fas fa-check" style="color: #ffcc00;"></i><?= $pemain->nama_pemain ?></div>
                <div class="p-1"><a href="<?= base_url('content/detailCommunities/'.$pemain->id_pemain)?>" class="btn btn-sm border-warning text-warning"><b>Lihat</b></a></div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>