<h2 class="text text-center"><?= $title; ?></h2><br><br>
<ul class="list-group col-md-6 offset-3">
    <?php foreach($categories as $category): ?>
        <div class="container">
            <li class="text text-center list-group-item"><h4><a style="text-decoration:none;" class="font-weight-bold" href="<?php echo site_url('/categories/posts/'.$category['id']);?>"><?php echo $category['name'] ?></a></h4>
                <?php if($this->session->userdata('user_id') == $category['user_id']) : ?>
                    <form  class="form-group" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
                        <br><input type="submit" class="btn btn-outline-danger btn-sm" value="Delete">
                    </form>
                <?php endif; ?>
            </li>
        </div><br>
    <?php endforeach; ?>
</ul>
