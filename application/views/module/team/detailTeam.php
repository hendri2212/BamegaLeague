<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Detail Team</h3>
        </div>
        <div class="col-6">
            <?php $id_team = $this->uri->segment('3');
                echo form_open("content/ikutiTeam/".$id_team) ?>
                <div class="form-inline float-right">
                    <select name="id_pemain" class="form-control e1" id="e1" name="state">
                        <?php foreach ($dataAllCommunities as $key) { ?>
                            <option value="<?= $key->id_pemain ?>"><?= $key->nama_pemain ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" name="SaveDPemain" value="Add" class="btn btn-primary ml-2">
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
                            <th>Kode Pemain</th>
                            <th>Nama Pemain</th>
                            <th>No Handphone</th>
                            <th colspan="2">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($detailOneTeamPemain as $pemain) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pemain->kode_pemain ?></td>
                                <td><?= $pemain->nama_pemain ?></td>
                                <td><?= $pemain->no_handphone?></td>
                                <td><?= $pemain->alamat?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?= base_url('content/tidakIkutiTeam/'.$id_team.'/'.$pemain->id_pemain) ?>" class="btn btn-sm btn-danger btn-block text-white" onclick="return confirm('Hapus Data?')"><i class="fas fa-trash-alt"></i></a>
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
