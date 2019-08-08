<div class="col-12">
    <div class="row mt-3 border-bottom border-warning">
        <div class="col-6">
            <h3 class="pb-3 text-light">Data Admin</h3>
        </div>
        <?php if($this->session->userdata('level') == 1){ ?>
            <div class="col-6">
                <a href="<?= base_url('content/inputAdmin') ?>" class="btn btn-dark border-warning text-warning float-right">Tambah Data</a>
            </div>
        <?php }?>
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
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($dataAllLogin as $admin) { ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td scope="row"><?= $admin->nama_lengkap ?></td>
                                <td scope="row"><?= $admin->username ?></td>
                                <td scope="row"><?= $admin->password ?></td>
                                <td scope="row">
                                    <div class="btn-group">
                                        <a href="<?= base_url('content/editAdmin/'.$admin->id_user) ?>" class="btn btn-sm btn-info mr-1"><i class="fas fa-pencil-alt"></i></a>
                                        <?php if($this->session->userdata('level') == 1){ ?>
                                            <a href="<?= base_url('content/deleteAdmin/'.$admin->id_user) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash-alt"></i></a>
                                        <?php }?>
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