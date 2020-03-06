<?php echo validation_errors(); ?>

<?php echo form_open('posts/update',array(
    'class' => 'col-md-8 offset-2'
));?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <div class="form-group">
        <h2 class="text text-center text-dark font-weight-semibold"><?= $title; ?></h2>
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Change Title" value="<?php echo $post['title']; ?>"><br>
        <label>Body</label>
        <textarea id="editor1" class="form-control" name="body" placeholder="Change Body">
            <?php echo $post['body']; ?></textarea><br>
        <label>Category</label>
        <select id="categories" class="form-control" name="category_id">
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
            <?php endforeach; ?>
        </select><br>
        <div class="text text-center">
            <button type="submit" class="btn btn-info">Update</button>
        </div>
    </div>
</form>
