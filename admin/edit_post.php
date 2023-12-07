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
                $post= new Post();
                if(isset($_GET['postid'])){
                    $post=$post->find_post_id($_GET['postid']);
                }    
                if(isset($_POST['edit_post'])){
                    $post->setTitle($_POST['title']);
                    $post->setContent($_POST['content']);
                    $post->setAuthor($_POST['author']);
                    $post->setTags($_POST['tags']);
                    $post->setData($_POST['data']);
                    $post->update_post();
                }
            ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Update Post</h3>
                </div>
                
                <div class="card-body">
                    <form method="post" action="">
                    <div class="form-group">
                        <label class="small mb-1" for="title">Title:</label>
                        <input class="form-control py-4" value="<?php echo $post->getTitle();?>" 
                            name="title" id="title" type="text" placeholder="Enter title" />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="content">Content:</label>
                        <input class="form-control py-4" name="content" value="<?php echo $post->getContent();?>"
                            id="content" type="text" placeholder="Enter content" />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="author">Author name:</label>
                        <input class="form-control py-4" name="author" value="<?php echo $post->getAuthor();?>"
                            id="author" type="text" placeholder="Enter author name" />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="tags">Tags:</label>
                        <input class="form-control py-4" name="tags" value="<?php echo $post->getTags();?>"
                            id="tags" type="text" placeholder="Enter tags" />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="data">Data:</label>
                        <input class="form-control py-4" name="data" value="<?php echo $post->getData();?>"
                            id="data" type="data" placeholder="Enter Data" />
                    </div>
                        <input class="btn btn-primary"  id="login" value="Update Post"  
                         type="submit" name="edit_post"/>
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
