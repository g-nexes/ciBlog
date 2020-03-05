<h2 class="header"><?= $title; ?></h2>
<ul>
    <?php foreach($categories as $category): ?>
        <div class="cat_container">
            <li><a class="cat_header" href="<?php echo site_url('/categories/posts/'.$category['id']);?>"><?php echo $category['name'] ?></a>
                <?php if($this->session->userdata('user_id') == $category['user_id']) : ?>
                    <form  class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
                        <input type="submit" class="cat_btn" value="Delete">
                    </form>
                <?php endif; ?>
            </li>
        </div>
    <?php endforeach; ?>
</ul>
