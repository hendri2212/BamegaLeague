<div class="d-flex flex-column justify-content-center mt-3">
    <div class="card bg-dark text-light" id="form">
        <div class="card-body">
            <form action="">
                <div class="form-group row">
                    <label for="nama_game" class="col-1"><i class="fas fa-gamepad" style="font-size:20px ;"></i></label>
                    <div class="col-11">
                        <input type="text" name="nama_game" class="form-control" placeholder="Nama Game">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi_game" class="col-1"><i class="fas fa-pencil-alt" style="font-size:20px ;"></i></label>
                    <div class="col-11">
                        <textarea name="deskripsi_game" rows="3" class="form-control" placeholder="Deskripsi Game"></textarea>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-camera" style="font-size:20px ;"></i></span>
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
</div>