<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Data Turnamen</h3>
        </div>
        <div class="col-6">
            <a href="<?= base_url('content/inputTurnamen') ?>" class="btn btn-dark border-warning text-warning float-right">Tambah Data</a>
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
                        <th scope="col">Nama_Game</th>
                        <th scope="col">Tanggal_Mulai</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col" colspan="2">Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($dataAllTurnamen as $AllTurnamen) { ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $AllTurnamen->nama_game ?></td>
                            <td><?= $AllTurnamen->tanggal_turnamen ?></td>
                            <td><?= $AllTurnamen->deskripsi ?></td>
                            <td><?= $AllTurnamen->gambar_prize_pool ?></td>
                            <td>
                                <div class="btn-group btn-group-toggle">
                                    <a href="<?= base_url('content/editTurnamen/'.$AllTurnamen->id_turnamen) ?>" class="btn btn-sm bg-info text-white">Edit</a>
                                    <a href="<?= base_url('content/deleteTurnamen/'.$AllTurnamen->id_turnamen) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');">Delete</a>
                                </div>
                                <?php if ($AllTurnamen->status_turnamen == 0): ?>
                                    <span class="btn bg-warning btn-sm text-white">Pending</span>
                                <?php elseif($AllTurnamen->status_turnamen == 1): ?>
                                    <span class="btn bg-success btn-sm text-white">On Going</span>
                                <?php else: ?>
                                    <span class="btn bg-primary btn-sm text-white">Finish</span>
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>