<h2 class="header"><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create');?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label class="post_body">Body</label>
        <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select id="categories" class="form-control" name="category_id">
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Upload Image</label>
        <input type="file" name="userfile" size="20">
    </div>
    <div class="text text-center">
        <button type="submit" rows="15" cols="50" class="btn btn-primary">Submit</button>
    </div>
</form>
