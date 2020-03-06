        <h2 class="text-primary text-center"><?= $title; ?></h2>
        <p class="text-secondary text-center">Use the registered Username and Password</p>

        <?php echo validation_errors('<div class="alert alert-warning">','</div>'); ?>
        <?php echo form_open('users/login'); ?>
        <div class="form-col">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="text text-center">
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </div>
        <?php echo form_close(); ?>
