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
                        <th scope="col">Gambar</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($dataAllTurnamen as $AllTurnamen) { ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td scope="row"><?= $AllTurnamen->nama_game ?></td>
                            <td scope="row"><?= $AllTurnamen->tanggal_turnamen ?></td>
                            <td scope="row"><?= $AllTurnamen->deskripsi ?></td>
                            <td scope="row"><?= $AllTurnamen->gambar_prize_pool ?></td>
                            <td scope="row">
                                <?php if ($AllTurnamen->status_turnamen == 0): ?>
                                    <span class="btn bg-warning btn-sm btn-block text-white">Pending</span>
                                <?php elseif($AllTurnamen->status_turnamen == 1): ?>
                                    <span class="btn bg-success btn-sm btn-block text-white">On Going</span>
                                <?php else: ?>
                                    <span class="btn bg-primary btn-sm btn-block text-white">Finish</span>
                                <?php endif ?>
                            </td>
                            <td scope="row">
                                <div class="btn-group btn-group-toggle">
                                    <a href="<?= base_url('content/editTurnamen/'.$AllTurnamen->id_turnamen) ?>" class="btn btn-sm btn-info mr-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="<?= base_url('content/deleteTurnamen/'.$AllTurnamen->id_turnamen) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>