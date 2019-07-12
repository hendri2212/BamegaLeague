<div class="d-flex flex-column justify-content-center mt-3"> 
    <div class="row">
        <div class="col-12">
            <a href="<?=base_url('content/inputgame')?>" class="btn btn-dark border-warning text-warning">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-hover table-dark">
                    <thead class="bg-mblack">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Game</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataAllGame as $game) { ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $game->nama_game ?></td>
                                <td><?= $game->deskripsi_game ?></td>
                                <td><?= $game->gambar_game ?></td>
                                <?php if ($game->status_game == 0): ?>
                                    <td><a href="<?= base_url('content/enableGame/'.$game->id_game) ?>" class="btn btn-sm bg-warning text-white">Non Aktif</a></td>
                                <?php else: ?>
                                    <td><a href="<?= base_url('content/disableGame/'.$game->id_game) ?>" class="btn btn-sm bg-success text-white">Aktif</a></td>
                                <?php endif ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>