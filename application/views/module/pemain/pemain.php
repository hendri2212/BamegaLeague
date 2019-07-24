<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Data Pemain</h3>
        </div>
        <div class="col-6">
            <a href="<?= base_url('content/inputPemain') ?>" class="btn btn-dark border-warning text-warning float-right">Tambah Data</a>
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
                        <th scope="col">Nama Team</th>
                        <th scope="col">Kode Pemain</th>
                        <th scope="col">Nama Pemain</th>
                        <th scope="col">Foto Pemain</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col"">Alamat</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($dataAllCommunities as $pemain) { ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td scope="row"><?= $pemain->nama_team ?></td>
                            <td scope="row"><?= $pemain->kode_pemain ?></td>
                            <td scope="row"><?= $pemain->nama_pemain ?></td>
                            <td scope="row"><?= $pemain->foto_pemain ?></td>
                            <td scope="row"><?= $pemain->no_handphone ?></td>
                            <td scope="row"><?= $pemain->alamat ?></td>
                            <td scope="row">
                                <div class="btn-group btn-group-toggle">
                                    <a href="<?= base_url('content/editPemain/'.$pemain->id_pemain) ?>" class="btn btn-sm btn-info mr-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="<?= base_url('content/deletePemain/'.$pemain->id_pemain) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>