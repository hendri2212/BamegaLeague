<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Data Team</h3>
        </div>
        <div class="col-6">
            <a href="<?= base_url('content/inputTeam') ?>" class="btn btn-dark border-warning text-warning float-right">Tambah Data</a>
        </div>
    </div>
</div>
<div class="d-flex flex-column justify-content-center mt-3">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-sm table-hover table-dark">
                    <thead class="bg-mblack">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama_Game</th>
                        <th scope="col">Nama Team</th>
                        <th scope="col">Logo Team</th>
                        <th scope="col">Deskripsi Team</th>
                        <th scope="col" colspan="2">Tanggal Daftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($dataAllTeam as $team) { ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $team->nama_game ?></td>
                                <td><?= $team->nama_team ?></td>
                                <td><?= $team->logo_team ?></td>
                                <td><?= $team->deskripsi_team?></td>
                                <td><?= $team->tanggal_daftar?></td>
                                <td>
                                    <div class="btn-group btn-group-toggle">
                                        <a href="<?= base_url('content/editTeam/'.$team->id_team) ?>" class="btn btn-sm bg-info text-white">Edit</a>
                                        <a href="<?= base_url('content/deleteTeam/'.$team->id_team) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>