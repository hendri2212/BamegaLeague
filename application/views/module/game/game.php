<div class="d-flex flex-column justify-content-center">
    <div class="card bg-dark text-light mb-3" id="form">
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="nama_game">Nama Game</label>
                    <input type="text" name="nama_game" class="form-control">
                </div>
                <div class="form-group">
                    <label for="deskripsi_game">Deskripsi Game</label>
                    <textarea name="deskripsi_game" rows="3" class="form-control"></textarea>
                </div>
                <label for="gambar_game">Gambar Game</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input name="gambar_game" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-dark btn-block border-warning text-warning">Submit</button>
            </form>
        </div>
    </div>  
    <div class="row">
        <div class="col-12">
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