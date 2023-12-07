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
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <div class="row justify-content-center">
            <?php    
                if(isset($_POST['add_user'])){
                    $user = new User();
                    $user->setFirstname($_POST['firstname']);
                    $user->setLastname($_POST['lastname']);
                    $user->setPhone($_POST['phone']);
                    $user->setEmail($_POST['email']);
                    $user->setPassword($_POST['password']);
                    $user->create();
                }

                
            ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Create User</h3>
                </div>
                
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label class="small mb-1" for="firstname">First Name :</label>
                            <input class="form-control py-4" name="firstname" id="firstname" type="text" placeholder="Enter first name" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="lastname">Last Name :</label>
                            <input class="form-control py-4" name="lastname" id="lastname" type="text" placeholder="Enter last name" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="phone">Phone Number :</label>
                            <input class="form-control py-4" name="phone" id="phone" type="text" placeholder="Enter phone number" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="email">Email Address :</label>
                            <input class="form-control py-4" name="email" id="email" type="text" placeholder="Enter email address" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="email">Password :</label>
                            <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter email password" />
                        </div>
                        <input class="btn btn-primary"  id="login" value="Create User"  
                         type="submit" name="add_user"/>
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
