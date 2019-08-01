<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Detail Team</h3>
        </div>
    </div>
</div>
<div class="d-flex flex-column mt-3">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-striped table-sm table-hover table-dark">
                <thead class="bg-mblack">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode Pemain</th>
                        <th scope="col">Nama Pemain</th>
                        <th scope="col">Foto Pemain</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col"">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($detailTeam as $pemain) { ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td scope="row"><?= $pemain->kode_pemain ?></td>
                            <td scope="row"><?= $pemain->nama_pemain ?></td>
                            <td scope="row"><?= $pemain->foto_pemain ?></td>
                            <td scope="row"><?= $pemain->no_handphone ?></td>
                            <td scope="row"><?= $pemain->alamat ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>