<h2 class=""><?php echo $post['title']; ?></h2><br>
    <img class="card-img-top col-md-5" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="Post image" /><div><br></div>
 	<div class="text text-justify"><?php echo $post['body']; ?></div><br>
 		<small class="text text-primary">Posted on <?php echo $post['created_at'];?></small>
	</div>
	<?php if($this->session->userdata('user_id') == $post['user_id']) : ?>
	<br>
	<?php echo form_open('/posts/delete/'.$post['id'],array(
        'class' => 'col-md-6 offset-1')); ?>
  		<a  class="btn btn-info" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
  <input type="submit" name="delete" value="Delete" class="btn btn-danger">
</form>
<?php endif; ?>

<br>
<hr noshade>
<h3 class="col-md-5 offset-1">Comments</h3>
<?php if ($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<h5 class="col-md-5 offset-1"><?php echo $comment['body']; ?><span>   </span>[by <strong><?php echo $comment['name']; ?></strong>]<span><br>at </span><?php echo $comment['created_at']; ?></h5>
	<?php endforeach; ?>
<?php else : ?>
	<p class="col-md-6 offset-1">No Comments available</p>
<?php endif; ?>
<br>
<hr noshade>
<br>
<h3 class="col-md-5 offset-1">Add Comment</h3><br>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Comments/create/'.$post['id'],array(
        'class' => 'col-md-6 offset-1')); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
    <div class="text text-center">
		   <button type="submit" class="btn btn-primary" name="button">Comment</button>
    </div><br>
</form>
