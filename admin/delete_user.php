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
                $user= new User();
                if(isset($_GET['userid'])){
                    $user=$user->find_user_id($_GET['userid']);
                }    
                if(isset($_POST['delete_user'])){
                    $user->delete_user();
                }
            ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Delete User</h3>
                </div>
                
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label class="small mb-1" for="firstname">First Name :</label>
                            <input class="form-control py-4" readonly value="<?php echo $user->getFirstname();?>" 
                            name="firstname"readonly id="firstname" type="text" placeholder="Enter first name" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="lastname">Last Name :</label>
                            <input class="form-control py-4" name="lastname" readonly value="<?php echo $user->getLastname();?>"
                            id="lastname" readonly type="text" placeholder="Enter last name" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="phone">Phone Number :</label>
                            <input class="form-control py-4" name="phone" readonly value="<?php echo $user->getPhone();?>"
                             id="phone" readonly type="text" placeholder="Enter phone number" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="email">Email Address :</label>
                            <input class="form-control py-4" name="email" readonly value="<?php echo $user->getEmail();?>"
                            id="email" readonly type="text" placeholder="Enter email address" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="email">Password :</label>
                            <input class="form-control py-4" name="password" readonly value="<?php echo $user->getPassword();?>"
                             id="password" readonly type="password" placeholder="Enter email password" />
                        </div>

                        <input class="btn btn-primary"  id="login" value="Delete User"  
                         type="submit" name="delete_user"/>
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
