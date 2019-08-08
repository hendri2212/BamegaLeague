<h3 class="pb-3 mt-2 text-light border-bottom border-warning d-block">Input Data Admin</h3>
<div class="row justify-content-center">
    <div class="card bg-dark text-light p-1 col-md-9">
        <div class="card-body">
            <?php echo form_open("content/saveAdmin", array('enctype'=>'multipart/form-data')); ?>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="ngame"><i class="fas fa-gamepad"></i></span>
                    </div>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Input Nama Lengkap" aria-label="ngame">
                </div>
                <label>Username</label>   
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="dgame"><i class="fas fa-pencil-alt"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Input Username" aria-label="ngame">
                </div>
                <label>Password</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="dgame"><i class="fas fa-pencil-alt"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Input Password" aria-label="ngame">
                </div>
                <button type="submit" name="submit" class="btn btn-warning text-white float-right">Save</button>
                <input type="button" value="Cancel" class="btn btn-danger float-right mr-2" onclick="javascript:window.history.back();">            
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>