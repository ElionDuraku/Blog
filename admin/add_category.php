<?php
use Admin\Lib\Category;
include "inc/header.php";
include "inc/adminnav.php";

?>    
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Categories</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Categories</li>
        </ol>
        <div class="row justify-content-center">
            <?php    
                if(isset($_POST['add_category'])){
                    $category = new Category();
                    $category->setName($_POST['name']);
                    $category->setDescription($_POST['description']);
                    $category->create_category();
                }
            ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Create Category</h3>
                </div>
                
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label class="small mb-1" for="name">Name :</label>
                            <input class="form-control py-4" name="name" id="name" type="text" placeholder="Enter category name" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="description">Description :</label>
                            <input class="form-control py-4" name="description" id="description" type="text" placeholder="Enter description " />
                        </div>
                        
                        <input class="btn btn-primary"  id="login" value="Create Category"  
                         type="submit" name="add_category"/>
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
