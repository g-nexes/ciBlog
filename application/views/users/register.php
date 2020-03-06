        <h2 class="text-primary text-center"><?= $title; ?></h2>
        <p class="text-secondary text-center">Fill all the required details and register!</p>

        <?php echo validation_errors('<div class="alert alert-warning">','</div>'); ?>
        <?php echo form_open('users/register'); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control bg-light" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control bg-light" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control bg-light" id="gender" name="gender">
                <option selected>Select...</option>
                <option value="1">Other</option>
                <option value="2">Female</option>
                <option value="3">Male</option>
            </select>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control bg-light" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control bg-light" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input type="password" class="form-control bg-light" id="password" name="password2">
        </div>
        <div class="text-center">
            <button class="btn btn-primary" name="register">Register</button>
        </div>

        <?php echo form_close(); ?>
