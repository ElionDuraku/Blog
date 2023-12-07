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
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-12">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                // $category= new Category();
                // $categories = $category->find_all_categories();
                // foreach ($categories as $c) {                    
                //     echo "<tr>";
                //     echo "<td>{$c->setName()}</td>";
                //     echo "<td>{$c->setDescription()}</td>";
                //     echo "<td><a href='edit_category.php?categoryid=". $u->getCategoryId() ."'><i class='fas fa-edit mr-2'> </i>Edit</a></td>";
                //     echo "<td><a href='delete_category.php?categoryid=". $u->getCategoryId() ."'><i class='fas fa-trash-alt mr-2'> </i>Delete</a></td>";
                //     echo "</tr>";

                // }

                $category = new Category();
                $categories = $category->find_all_categories();
                foreach ($categories as $c) {
                    echo "<tr>";
                    echo "<td>{$c->getName()}</td>"; // Use getName() to retrieve the name
                    echo "<td>{$c->getDescription()}</td>"; // Use getDescription() to retrieve the description
                    echo "<td><a href='edit_category.php?categoryid=" . $c->getCategoryid() . "'><i class='fas fa-edit mr-2'> </i>Edit</a></td>";
                    echo "<td><a href='delete_category.php?categoryid=" . $c->getCategoryid() . "'><i class='fas fa-trash-alt mr-2'> </i>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            
                </tbody>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Category Name</th>
                        <th>Description</th>
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