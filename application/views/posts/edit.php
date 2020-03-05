<?php echo validation_errors(); ?>

<?php echo form_open('posts/update');?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
<div class="form_container">
  <h2 class="header"><?= $title; ?></h2>
  <label>Title</label>
  <input type="text" class="form_control" name="title" placeholder="Change Title" value="<?php echo $post['title']; ?>">
  <label>Body</label>
  <textarea id="editor1" class="form_control" name="body" placeholder="Change Body">
    <?php echo $post['body']; ?></textarea>
  <label>Category</label>
    <select id="categories" class="form-control" name="category_id">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
      <?php endforeach; ?>
  </select>
  <button type="submit" rows="15" cols="50" class="submit_btn">Update!</button>
</div>
</form>
