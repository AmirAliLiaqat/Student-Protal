
    <?php
        require_once 'header.php';
        require_once 'config.php';

        session_start();

        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $login_user = "SELECT * FROM `users` WHERE `email` = '$email'";

            $login_user_query = mysqli_query($conn, $login_user) or die("Query Failed");

            if(mysqli_num_rows($login_user_query) > 0) {
                while($row = mysqli_fetch_assoc($login_user_query)) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['father_name'] = $row['father_name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['roll_number'] = $row['roll_number'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['cnic'] = $row['cnic'];
                    $_SESSION['program'] = $row['program'];
                    $_SESSION['address'] = $row['address'];
                    header('location: main.php');
                }
            } else {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    User details are incorrect. Please try again...
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
        }

    ?>
    
    <section class="login-section">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 login-box">
                <div class="card">
                    <form action="" method="post">
                        <div class="card-header">
                            <h5 class="card-title text-white">Login</h5>
                        </div><!--card-header-->
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fas fa-user"></i>
                                    </div><!--col-1-->
                                    <div class="col-11">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div><!--col-11-->
                                </div><!--row-->
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fas fa-lock"></i>
                                    </div><!--col-1-->
                                    <div class="col-11">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div><!--col-11-->
                                </div><!--row-->
                            <div class="body-footer d-flex justify-content-between mt-5">
                                <a href="" class="text-decoration-none">Forgot Password ?</a>
                                <input type="submit" class="btn btn-primary text-uppercase" name="login" value="Login">
                            </div><!--body-footer-->
                        </div><!--card-body-->
                        <div class="card-footer text-center border-0 bg-transparent">
                            <p class="text-danger">If there is any issue with login please use any proxy</p>
                            <a href="">Browsec</a> /
                            <a href="">Zenmate</a> /
                            <a href="">Stealthy</a>
                        </div><!--card-footer-->
                    </form>
                </div><!--card-->
            </div><!--col-md-5-->
        </div><!--container-->
    </section>