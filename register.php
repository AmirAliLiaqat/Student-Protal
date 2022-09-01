<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Register</title>
    <?php require_once 'links.php'; ?>
</head>
<body>

    <?php
        require_once 'config.php';

        if(isset($_POST['register'])) {
            $username = $_POST['username'];
            $father_name = $_POST['father_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cnic = $_POST['cnic'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $roll_number = $_POST['roll_number'];
            $program = $_POST['program'];

            $register_user = "INSERT INTO `users`(`username`, `father_name`, `email`, `password`, `roll_number`, `phone`, `cnic`, `program`, `address`) 
            VALUES ('$username','$father_name','$email','$password','$roll_number','$phone','$cnic','$program','$address')";

            $register_user_query = mysqli_query($conn, $register_user) or die("Query Failed");

            if($register_user_query) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Hurry! User Register Successfully...
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            } else {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Soory! User Can't Register...
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
                            <h5 class="card-title text-white">Register</h5>
                        </div><!--card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-1">
                                    <i class="fas fa-user"></i>
                                </div><!--col-1-->
                                <div class="col-11">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div><!--col-11-->
                            </div><!--row-->
                            <div class="row">
                                <div class="col-1">
                                    <i class="fas fa-user-tie"></i>
                                </div><!--col-1-->
                                <div class="col-11">
                                    <label for="father_name">Father Name</label>
                                    <input type="text" name="father_name" class="form-control">
                                </div><!--col-11-->
                            </div><!--row-->
                            <div class="row">
                                <div class="col-1">
                                    <i class="fas fa-id-card"></i>
                                </div><!--col-1-->
                                <div class="col-5">
                                    <label for="cnic">CNIC</label>
                                    <input type="text" name="cnic" class="form-control">
                                </div><!--col-11-->
                                <div class="col-1">
                                    <i class="fas fa-phone-alt"></i>
                                </div><!--col-1-->
                                <div class="col-5">
                                    <label for="phone">Phone No</label>
                                    <input type="text" name="phone" class="form-control">
                                </div><!--col-11-->
                            </div><!--row-->
                            <div class="row">
                                <div class="col-1">
                                    <i class="fas fa-home"></i>
                                </div><!--col-1-->
                                <div class="col-11">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control">
                                </div><!--col-11-->
                            </div><!--row-->
                            <div class="row">
                                <div class="col-1">
                                    <i class="fas fa-database"></i>
                                </div><!--col-1-->
                                <div class="col-5">
                                    <label for="roll_number">Roll Number</label>
                                    <input type="text" name="roll_number" class="form-control">
                                </div><!--col-11-->
                                <div class="col-1">
                                    <i class="fas fa-address-card"></i>
                                </div><!--col-1-->
                                <div class="col-5">
                                    <label for="program">Program</label>
                                    <input type="text" name="program" class="form-control">
                                </div><!--col-11-->
                            </div><!--row-->
                            <div class="row">
                                <div class="col-1">
                                    <i class="fas fa-at"></i>
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
                                <a href="login.php" class="text-decoration-none">Already Have an account.</a>
                                <input type="submit" class="btn btn-primary text-uppercase" name="register" value="Register">
                            </div><!--body-footer-->
                        </div><!--card-body-->
                    </form>
                </div><!--card-->
            </div><!--col-md-5-->
        </div><!--container-->
    </section>

</body>
</html>