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
                                <td scope="row">
                                    <div class="btn btn-dark p-0 table-img" data-toggle="modal" data-target="#modal<?=$team->id_team?>">
                                        <img src="<?= base_url("./assets/gambar/team/".$team->logo_team) ?>" class="img-fluid rounded">
                                    </div>
                                    <a href="<?= base_url('content/detailTeam/'.$team->id_team)?>"><?= $team->nama_team ?></a>
                                </td>
                                <td scope="row"><?= $team->deskripsi_team?></td>
                                <td scope="row"><?= $team->tanggal_daftar?></td>
                                <td scope="row">
                                    <div class="btn-group">
                                        <a href="<?= base_url('content/editTeam/'.$team->id_team) ?>" class="btn btn-sm btn-info mr-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="<?= base_url('content/deleteTeam/'.$team->id_team) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                                <div class="modal fade" id="modal<?=$team->id_team?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-mblack border-dark">
                                                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body bg-dark">
                                                <div class="text-center">
                                                    <img src="<?= base_url("./assets/gambar/team/".$team->logo_team) ?>" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>