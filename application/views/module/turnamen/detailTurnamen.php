<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Detail Turnamen</h3>
        </div>
        <div class="col-6">
            <?php $id_turnamen = $this->uri->segment('3'); $id_game = $this->uri->segment('4');
                echo form_open("content/ikutiTurnamen/".$id_turnamen.'/'.$id_game) ?>
                <div class="form-inline float-right">
                    <select name="id_team" class="form-control">
                        <?php foreach ($dataTeam as $key) { ?>
                            <option value="<?= $key->id_team ?>"><?= $key->nama_team ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" name="SaveDTeam" value="Add" class="btn btn-primary ml-2">
                </div>
            <?php echo form_close(); ?>
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
                            <th>#</th>
                            <th>Nama Team</th>
                            <th>Logo Team</th>
                            <th colspan="2">Deskripsi Team</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($dataAllTeamTurnamen as $team) {
                            $id_turnamen= $this->uri->segment('3');
                            $id_game    = $this->uri->segment('4'); ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $team->nama_team ?></td>
                                <td><?= $team->logo_team ?></td>
                                <td><?= $team->deskripsi_team?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?= base_url('content/tidakIkutiTurnamen/'.$id_turnamen.'/'.$team->id_team.'/'.$id_game) ?>" class="btn btn-sm btn-danger btn-block text-white" onclick="return confirm('Hapus Data?')"><i class="fas fa-trash-alt"></i></a>
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