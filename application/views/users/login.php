<div class="container-fluid">
    <div class="col-md-8 offset-2">
        <h1 class="text-primary text-center">Login Here</h1>
        <p class="text-secondary text-center">Fill the registered Username and Password</p>

        <?php echo validation_errors('<div class="alert alert-warning">','</div>'); ?>
        <?php echo form_open('users/login'); ?>
            <div class="form-col">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
            </div>
            <div class="text text-center">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
        <?php echo form_close(); ?>
     </div>
