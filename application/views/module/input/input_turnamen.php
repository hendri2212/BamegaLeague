<div class="d-flex flex-column">
    <div class="card bg-dark text-light">
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="deskripsi_turnamen">Deskripsi Turnamen</label>
                    <textarea name="deskripsi_turnamen" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal_turnamen">Tanggal Turnamen</label>
                    <input type="date" name="tanggal_turnamen" class="form-control">
                </div>
                <label for="gambar_prizepool">Gambar Prizepool</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input name="gambar_prizepool" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-dark border-warning text-warning">Submit</button>
            </form>
        </div>
    </div>
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover table-dark">
                        <thead class="bg-mblack">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Turnamen</th>
                            <th scope="col">Queue</th>
                            <th scope="col">Prize</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><span class="btn btn-sm bg-success text-white">Selesai</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><span class="btn btn-sm bg-warning text-white">Upcoming</span></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>@mdo</td>
                                <td>Larry the Bird</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><span class="btn btn-sm bg-danger text-white">Ongoing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>