<div class="d-flex flex-column">
    <div class="card bg-dark text-light">
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
                <button type="submit" name="submit" class="btn btn-dark border-warning text-warning">Submit</button>
            </form>
        </div>
    </div>  
</div>