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
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-12">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Author</th>
                        <th>Tags</th>
                        <th>Data</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                $post=new Post();
                $posts = $post->find_all_posts();
                foreach($posts as $p) {                    
                    echo "<tr>";
                    echo "<td>{$p->getTitle()}</td>";
                    echo "<td>{$p->getContent()}</td>";
                    echo "<td>{$p->getAuthor()}</td>";
                    echo "<td>{$p->getTags()}</td>";
                    echo "<td>{$p->getData()}</td>";
                    echo "<td><a href='edit_post.php?postid=". $p->getPostId() ."'><i class='fas fa-edit mr-2'> </i>Edit</a></td>";
                    echo "<td><a href='delete_post.php?postid=". $p->getPostId() ."'><i class='fas fa-trash-alt mr-2'> </i>Delete</a></td>";
                    echo "</tr>";

                }
                ?>
            
                </tbody>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Author</th>
                        <th>Tags</th>
                        <th>Data</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
           </div>
           </div>	    
        </div>
    </div>
</main>







<?php include "inc/footer.php"; ?>