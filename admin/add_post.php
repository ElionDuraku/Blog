<?php
use Admin\Lib\Post;
include "inc/header.php";
include "inc/adminnav.php";

?>    
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Posts</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Posts</li>
        </ol>
        <div class="row justify-content-center">
            <?php    
                if(isset($_POST['add_post'])){
                    $post = new Post();
                    $post->setTitle($_POST['title']);
                    $post->setContent($_POST['content']);
                    $post->setAuthor($_POST['author']);
                    $post->setTags($_POST['tags']);
                    $post->setData($_POST['data']);
                    $post->create_post();
                }
            ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Create Post</h3>
                </div>
                
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label class="small mb-1" for="title">Title :</label>
                            <input class="form-control py-4" name="title" id="title" type="text" placeholder="Enter title" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="content">Content :</label>
                            <input class="form-control py-4" name="content" id="content" type="text" placeholder="Enter content" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="author">Author :</label>
                            <input class="form-control py-4" name="author" id="author" type="text" placeholder="Enter author" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="tags">Tags :</label>
                            <input class="form-control py-4" name="tags" id="tags" type="text" placeholder="Enter tags" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="data">Data :</label>
                            <input class="form-control py-4" name="data" id="password" type="data" placeholder="Enter data" />
                        </div>
                        <input class="btn btn-primary"  id="login" value="Create Post"  
                         type="submit" name="add_post"/>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">
                        <a href="register.html">
                            Have an account? Go to login</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "inc/footer.php"?>
