<div class="row mt-lg-3">
    <div class="col-lg-12">
        <div class="d-flex flex-row-reverse mb-3 ">
            <div class="p-2 btn-group">
                <?php echo form_open('content/search')?>
                    <input type="text" name="keyword" placeholder="Cari" class="form-control bg-dark border border-warning">
                    <input type="submit" class="btn btn-warning" value="search">               
                <?php echo form_close(); ?>
            </div>
            <div class="p-2"><a href="<?= base_url('content/inputPemain')?>" class="btn border-warning text-warning"><b>Daftarkan Komunitas</b></a></div>
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