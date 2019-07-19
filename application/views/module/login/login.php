<div class="row justify-content-center">
    <div class="col-sm-12 col-md-5">
        <div class="card bg-dark text-light mt-4 w-100">
            <div class="card-header text-center">
                <span>LOGIN ADMINISTRATOR</span>
            </div>
            <div class="card-body">
                <?php echo form_open("content/cekLogin"); ?>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username"/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password"/>
                    </div>
                    <button class="btn btn-danger btn-block" type="submit" name="submit">Login</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>