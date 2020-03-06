<?php echo validation_errors(); ?>
<?php echo form_open('categories/create');?>
<div class="form-container">
    <h2 class="text text-center"><?= $title; ?></h2>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Desired category name">
    </div>
    <div class="text text-center">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</div>
</form>
