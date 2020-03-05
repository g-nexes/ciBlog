<?php echo validation_errors(); ?>
<?php echo form_open('categories/create');?>
<div class="form_container">
  <h2 class="header"><?= $title; ?></h2>
  <label>Name</label>
  <input type="text" class="form_control" name="name" placeholder="Enter name">
  <button type="submit" rows="15" cols="50" class="submit_btn">Submit</button>
</div>
</form>
