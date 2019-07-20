<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Data_Pemain</h3>
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
                        <th scope="col">Nama Group</th>
                        <th scope="col">Nama Match</th>
                        <th scope="col">Nilai Rank</th>
                        <th scope="col">Nilai Kill</th>
                        <th scope="col" colspan="2">Nilai Point</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($dataNilai as $nilai) { ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $nilai->nama_team ?></td>
                            <td><?= $nilai->nama_group ?></td>
                            <td><?= $nilai->nama_match ?></td>
                            <td><?= $nilai->nilai_rank ?></td>
                            <td><?= $nilai->nilai_kill ?></td>
                            <td><?= $nilai->nilai_point ?></td>
                            <td>
                                <div class="btn-group btn-group-toggle">
                                    <a href="<?= base_url('content/editPemain/'.$nilai->id_nilai) ?>" class="btn btn-sm bg-info text-white">Edit</a>
                                    <a href="<?= base_url('content/deletePemain/'.$nilai->id_nilai) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>