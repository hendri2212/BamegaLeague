<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Data Game</h3>
        </div>
        <div class="col-6">
            <a href="<?= base_url('content/inputgame') ?>" class="btn btn-dark border-warning text-warning float-right">Tambah Data</a>
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
                            <th scope="col"></th>
                            <th scope="col">Nama_Game</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($dataAllGame as $game) { ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td scope="row"><?= $game->nama_game ?></td>
                                <td scope="row"><?= $game->deskripsi_game ?></td>
                                <td scope="row"><?= $game->gambar_game ?></td>
                                <td scope="row">
                                    <?php if ($game->status_game == 0): ?>
                                        <a href="<?= base_url('content/enableGame/'.$game->id_game) ?>" class="btn btn-sm btn-warning btn-block text-white">Non Aktif</a>
                                    <?php else: ?>
                                        <a href="<?= base_url('content/disableGame/'.$game->id_game) ?>" class="btn btn-sm btn-success btn-block text-white">Aktif</a>
                                    <?php endif ?>
                                </td>
                                <td scope="row">
                                    <div class="btn-group">
                                        <a href="<?= base_url('content/editGame/'.$game->id_game) ?>" class="btn btn-sm btn-info mr-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="<?= base_url('content/deleteGame/'.$game->id_game) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash-alt"></i></a>
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