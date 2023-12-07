<?php include "inc/header.php" ?>
<?php include "inc/adminnav.php" ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <!-- CRUD per USERS  -->
                <h4 class="mt-4">Users</h3>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div>
                        <?php
                        use Admin\Lib\User;

                        $user = new User();
                        $result_set = $user->find_all_users();


                        foreach ($result_set as $anetar) {
                            echo "<tr>";
                            echo "<td>" . $anetar->getFirstname() . "</td>";
                            echo "<td>" . $anetar->getLastname() . "</td>";
                            echo "<td>" . $anetar->getPhone() . "</td>";
                            echo "<td>" . $anetar->getEmail() . "</td>";
                            echo "</tr>";
                        }

                        //Shtimi i shenimeve per User
                        // $user=new User();
                        // $user->setFirstname("Adriatik");
                        // $user->setLastname("Nikqi");
                        // $user->setPhone("044555115");
                        // $user->setEmail("adiatik.mikqi@probitacademy.com");
                        // $user->setPassword("123456");
                        // $user->create_user();

                        //Modifikimi i shenimeve per User
                        // $user=$user->find_user_id(3);
                        // $user->setPhone("045888999");
                        // $user->update_user();

                        //Fshirja e shenimeve per User
                        // $user=$user->find_user_id(3);
                        // $user->delete_user();
                        ?>
                </table>

                <?php
                // $user_result = $user->find_user_id(1);
                // echo $user_result->firstname;

                ?>
            
            <br>



            <!-- CRUD per KATEGORITE  -->
            <h4 class="mt-4">Categories</h3>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?php
                        use Admin\Lib\Category;

                        $category = new Category();
                        $category_set = $category->find_all_categories();

                        foreach ($category_set as $category) {
                            echo "<tr>";
                            echo "<td>" . $category->getName() . "</td>";
                            echo "<td>" . $category->getDescription() . "</td>";
                            echo "</tr>";
                        }

                        
                        //Shtimi i shenimeve per Category
                        // $category->setName("Python");
                        // $category->setDescription("Python Language");
                        // $category->create_category();

                        //Modifikimi i shenimeve per Category
                        // $category = $category->find_category_id(3);
                        // $category->setDescription("Test");
                        // $category->update_category();

                        //Fshirja e shenimeve per Category
                        // $category = $category->find_category_id(7);
                        // $category->delete_category();
                    ?>
            </table>

            <br>

            
            <!-- CRUD per POSTIMET  -->
            <h4 class="mt-4">Posts</h3>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?php
                    use Admin\Lib\Post;
                    $post = new Post();
                    $post_result = $post->find_all_posts();

                    foreach ($post_result as $post) {
                        echo "<tr>";
                        echo "<td>" . $post->getTitle() . "</td>";
                        echo "<td>" . $post->getContent() . "</td>";
                        echo "<td>" . $post->getAuthor() . "</td>";
                        // echo "<td>" . $post->image_url() . "</td>";
                        echo "<td>" . $post->getTags() . "</td>";
                        echo "<td>" . $post->getData() . "</td>";
                        echo "</tr>";
                    }

                    //Shtimi i shenimeve per Post
                        // $post->setTitle("Postimi 1");
                        // $post->setContent("Test");
                        // $post->setAuthor("Elion Duraku");
                        // $post->setTags("php,mysql.laravel,oop");
                        // $post->setData("2023");
                        // $post->create_post();

                        //Modifikimi i shenimeve per Post
                        // $post=new Post();
                        // $post=$post->find_post_id(5);
                        // $post->setContent("Trajnimi OOP PhP & MySQL ofron mesimin e pjeses se programimit te orientuar ne objekte dhe MySQL. Ne kuader te trajnimit perfshihet dhe projekti Blog.	");
                        // $post->update_post();

                        //Fshirja e shenimeve per Post
                        // $post=$post->find_post_id(6);
                        // $post->delete_post();
                    ?>
                </table> 

                <br>

            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Primary Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Warning Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Success Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Danger Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                        <div class="card-body">
                            <canvas id="myAreaChart" width="100%" height="40"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                        <div class="card-body">
                            <canvas id="myBarChart" width="100%" height="40"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    </main>
<?php include "inc/footer.php" ?>