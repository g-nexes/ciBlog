<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">

    <title>CI Post Bloger</title>
</head>
<body>
    <nav class="navbar  navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/logo.svg"
            width="30" height="30" class="d-inline-block align-top" alt=""> Blogger CI</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="nav nav-pills ">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="pills-home-tab"
                    href="<?php echo base_url(); ?>home" role="tab">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                    href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Posts & Categories</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>posts">
                            View Posts</a>

                        <?php if($this->session->userdata('logged_in')) : ?>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>posts/create">
                            Create Post</a>
                        <?php endif; ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>categories">
                            Show Categories</a>

                        <?php if($this->session->userdata('logged_in')) : ?>
                            <a class="dropdown-item"
                                href="<?php echo base_url(); ?>categories/create">
                            Create Post Category</a>
                        <?php endif; ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-about-tab"
                    href="<?php echo base_url(); ?>about">
                        About
                    </a>
                </li>
                <?php if(!$this->session->userdata('logged_in')) : ?>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab"
                    href="<?php echo base_url(); ?>users/register" role="tab">
                        Register
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab"
                    href="<?php echo base_url(); ?>users/login" role="tab">
                        Login
                    </a>
                </li>
                <?php endif; ?>

                <?php if($this->session->userdata('logged_in')) : ?>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab"
                    href="<?php echo base_url(); ?>users/logout" role="tab">
                        Logout
                    </a>
                </li>
            <?php endif; ?>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="col-md-10 offset-1"><br>

            <!-- Flash messages -->
            <?php if($this->session->flashdata('user_registered')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
            <?php endif; ?>

            <!-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded mr-2" alt="...">
                    <strong class="mr-auto">Bootstrap</strong>
                    <small class="text-muted">11 mins ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div> -->

            <?php if($this->session->flashdata('user_loggedin')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
            <?php endif; ?>

            <?php if($this->session->flashdata('login_failed')): ?>
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedout')): ?>
                <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('user_loggedout').'</p>';?>
            <?php endif; ?>

            <?php if($this->session->flashdata('category_created')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>';?>
            <?php endif; ?>

            <?php if($this->session->flashdata('category_deleted')): ?>
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('category_deleted').'</p>';?>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_created')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>';?>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_updated')): ?>
                <?php echo '<p class="alert alert-info">'.$this->session->flashdata('post_updated').'</p>';?>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_deleted')): ?>
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('post_deleted').'</p>';?>
            <?php endif; ?>
