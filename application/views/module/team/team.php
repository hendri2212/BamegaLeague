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
                        <th scope="col">Tanggal Daftar</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($dataAllTeam as $team) { ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td scope="row"><?= $team->nama_game ?></td>
                                <td scope="row"><a href="<?= base_url('content/detailTeam/'.$team->id_team)?>"><?= $team->nama_team ?></a></td>
                                <td scope="row"><?= $team->logo_team ?></td>
                                <td scope="row"><?= $team->deskripsi_team?></td>
                                <td scope="row"><?= $team->tanggal_daftar?></td>
                                <td scope="row">
                                    <div class="btn-group">
                                        <a href="<?= base_url('content/editTeam/'.$team->id_team) ?>" class="btn btn-sm btn-info mr-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="<?= base_url('content/deleteTeam/'.$team->id_team) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash-alt"></i></a>
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