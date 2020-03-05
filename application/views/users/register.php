<div class="container-fluid">
    <div class="col-md-8 col-sm-6">
        <h1 class="text-primary text-center">Register Here</h1>
        <p class="text-secondary text-center">Fill all the required details and register!</p>
        <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php } ?>
        <?php echo validation_errors('<div class="alert alert-warning">','</div>'); ?>
        <?php echo form_open('users/login'); ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control bg-light" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control bg-light" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control bg-light" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control bg-light" id="password" name="password2">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control bg-light" id="gender" name="gender">
                    <option value="Other">Other</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control bg-light" id="phone" name="phone">
            </div>
            <div class="text-center">
                <button class="btn btn-primary" name="register">Register</button>
            </div>

        <?php echo form_close(); ?>
      </div>
