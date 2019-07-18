<div class="d-flex justify-content-center">
    <div class="card bg-dark text-light">
        <div class="card-header">
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