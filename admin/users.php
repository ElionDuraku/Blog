<?php
use Admin\Lib\User;
include "inc/header.php";
include "inc/adminnav.php";

?>

<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-12">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                $user=new User();
                $users = $user->find_all_users();
                foreach($users as $u) {                    
                    echo "<tr>";
                    echo "<td>{$u->getFirstname()}</td>";
                    echo "<td>{$u->getLastname()}</td>";
                    echo "<td>{$u->getPhone()}</td>";
                    echo "<td>" . $u->getEmail() . "</td>";
                    echo "<td><a href='edit_user.php?userid=". $u->getUserid() ."'><i class='fas fa-edit mr-2'> </i>Edit</a></td>";
                    echo "<td><a href='delete_user.php?userid=". $u->getUserid() ."'><i class='fas fa-trash-alt mr-2'> </i>Delete</a></td>";
                    echo "</tr>";

                }
                ?>
            
                </tbody>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Phone</th>
                        <th>Email</th>
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