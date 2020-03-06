<h2 class="text text-center text-dark font-weight-semibold"><?= $title ?></h2><br>
<?php foreach($posts as $post) : ?>
  <h3 class="text text-primary"><?php echo $post['title']; ?></h3>
    <div class="col-md-3 col-sm-4">
      <img class="card-img-top" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="Post image" /><div><br></div>
    </div>
    <div class="col-md-11 col-sm-8">
        <div class="text text-justify"><?php echo word_limiter($post['body'],50); ?></div>
          <small class="text text-primary">Posted on
            <?php echo $post['created_at']; ?> in
            <strong><?php echo $post['name'];?></strong>
        </small><br><br>
          <p class="">
            <a class="btn btn-outline-info" href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a>
          </p>
      </div>
<?php endforeach; ?>

<div class="pagination justify-content-end">
    <?php echo $this->pagination->create_links(); ?>
</div>
