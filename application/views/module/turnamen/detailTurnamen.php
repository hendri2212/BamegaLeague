<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Data Team</h3>
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
                        <th scope="col">Nama Team</th>
                        <th scope="col">Logo Team</th>
                        <th scope="col">Deskripsi Team</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($dataAllTeam as $team) { 
                            $id_turnamen=$this->uri->segment('3'); ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td scope="row"><?= $team->nama_team ?></td>
                                <td scope="row"><?= $team->logo_team ?></td>
                                <td scope="row"><?= $team->deskripsi_team?></td>
                                <td scope="row">
                                    <div class="btn-group">
                                        <a href="<?= base_url('content/ikutiTurnamen/'.$team->id_team.'/'.$id_turnamen) ?>" class="btn btn-sm btn-success btn-block text-white">Mengikuti</a>
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