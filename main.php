<?php
    require_once 'header.php';
    session_start();
?>

<section class="main-panel">
    <!-- <h1>Hello! <?php echo $_SESSION['username']; ?> Welcome to new page</h1> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-6 p-3">
                <ul class="list-unstyled">
                    <li class="dropdown_li">
                        <div class="dropdown">
                            <button class="btn border-0 dropdown-toggle sidebar_toggle d-flex justify-content-between" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Register Office 
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-clipboard-list"></i> Enrollment Details</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-clipboard-list"></i> Offered Enrollment</a></li>
                            </ul>
                        </div><!--dropdown-->
                    </li>
                    <li class="dropdown_li">
                        <div class="dropdown">
                            <button class="btn border-0 dropdown-toggle sidebar_toggle d-flex justify-content-between" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Examination 
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-paste"></i> Datesheet</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-award"></i> Gradebook</a></li>
                            </ul>
                        </div><!--dropdown-->
                    </li>
                    <li class="dropdown_li">
                        <div class="dropdown">
                            <button class="btn border-0 dropdown-toggle sidebar_toggle d-flex justify-content-between" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Accounts 
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-receipt"></i> Fee Summary</a></li>
                            </ul>
                        </div><!--dropdown-->
                    </li>
                    <li class="dropdown_li">
                        <div class="dropdown">
                            <button class="btn border-0 dropdown-toggle sidebar_toggle d-flex justify-content-between" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                LMS 
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-tasks"></i> Assessments</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-laptop"></i> Student Material</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-comments"></i> Discussion</a></li>
                            </ul>
                        </div><!--dropdown-->
                    </li>
                    <li class="dropdown_li">
                        <div class="dropdown">
                            <button class="btn border-0 dropdown-toggle sidebar_toggle d-flex justify-content-between" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Student Services 
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user-edit"></i> Profile Update</a></li>
                            </ul>
                        </div><!--dropdown-->
                    </li>
                </ul>
                <div class="mx-3">
                    <p class="text-primary d-inline">Notifications</p>
                    <i class="fas fa-bell text-secondary"></i>
                </div>
            </div><!--col-lg-4-->
            <div class="col-lg-10 col-md-10 col-sm-6 border-start p-0">
                <div class="main-header p-3 d-flex justify-content-between text-white">
                    <div class="menu">
                        <i class="fas fa-bars text-white"></i>
                        <div class="main-title text-white d-inline mx-2"> Lahore Leads University Student Portal</div>
                    </div><!--menu-->
                    <a href="" class="covid_message" style="color: rgb(255, 255, 255); border: 1px solid; padding: 5px; margin-left: 150px; background: rgb(233, 30, 99); text-decoration: none;">
                        HEC COVID-19 Notification
                    </a>
                    <div class="profile">
                        <div class="dropdown d-inline-block">
                            <button class="btn border-0 dropdown-toggle sidebar_toggle d-flex justify-content-between" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell text-white" style="font-size: 30px;"></i>
                            </button>
                            <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item text-secondary" href="#">No notification found.</a></li>
                            </ul>
                        </div><!--dropdown-->
                        <div class="dropdown d-inline-block ">
                            <button class="btn border-0 dropdown-toggle sidebar_toggle d-flex justify-content-between" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle text-white" style="font-size: 35px;"></i>
                            </button>
                            <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButton1">
                                <li data-bs-toggle="modal" data-bs-target="#profile_modal"><a class="dropdown-item text-secondary" href="#"><i class="fas fa-cog"></i> My Profile</a></li>
                                <li data-bs-toggle="modal" data-bs-target="#change_password"><a class="dropdown-item text-secondary" href="#"><i class="fas fa-lock"></i> Change Password</a></li>
                                <li><a class="dropdown-item text-secondary" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            </ul>
                        </div><!--dropdown-->
                    </div><!--profile-->
                </div><!--main-header-->
                <div class='alert alert-success alert-dismissible fade show m-3' role='alert'>
                    <i class="fas fa-exclamation-circle" style="font-size: 20px;"></i>
                    <h4 class="alert-heading d-inline">Attendance Notification</h4> <br>
                    <p class="mx-4">
                        Dear student, <br>
                        Please maintain your attendence at least 70% to attempt your final examination, otherwise you will not be able to sit in the exams.
                    </p>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div><!--alert-->
                <div class="dropdown mt-2 mx-3 border-bottom" style="width:25%;background:#F0F0F0;border-radius:5px;">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <small>Select Term</small> <br>
                        <h5 class="d-inline">Fall 2022 (Current Term)</h5> 
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Fall 2022 (Current Term)</a></li>
                    </ul>
                </div><!--dropdown-->
                <div class="content overflow-hidden p-3 mt-5">
                    <table class="table table-hover table-bordered text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>##</th>
                                <th>Course Code</th>
                                <th>Course Title</th>
                                <th>Section</th>
                                <th>Employee Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>CSC516</td>
                                <td>Advanced Computer Architecture</td>
                                <td>MPHIL CS-1-2</td>
                                <td>Mr. Syed Absar ul Hassan Hasan</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CSC581</td>
                                <td>Advanced Research Methodology</td>
                                <td>MPHIL CS IT -1-2</td>
                                <td>Hanan null</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CSC-618</td>
                                <td>Deep Learning</td>
                                <td>MPHIL CS IT-1-2-3-4</td>
                                <td>Dr. Faisal Rehman rehman</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--content-->
                <h4 class="text-danger m-3">Generate Challan</h4>
            </div><!--col-lg-8-->
        </div><!--row-->
    </div><!--container-->
</section>

<!-- Modal Box For Profile Image -->
<div class="modal fade" id="profile_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="staticBackdropLabel">My Profille</h5>
            </div><!--modal-header-->
            <div class="modal-body text-secondary">
                <div class="row my-3">
                    <div class="col-6">
                        <i class="fas fa-user-circle" style="font-size:35px;"></i>
                        <span class="mx-2 pb-2"><?php echo $_SESSION['username']; ?></span>
                    </div><!--col-6-->
                    <div class="col-6">
                        <i class="fas fa-user profile_icon"></i>
                        <span class="mx-2 pb-2"><?php echo $_SESSION['father_name']; ?></span>
                    </div><!--col-6-->
                </div><!--row-->
                <div class="row my-3">
                    <div class="col-6">
                        <div class="my-3">
                            <span>CNIC</span>
                        </div>
                        <div class="border-bottom">
                            <i class="fas fa-id-card profile_icon"></i>
                            <span class="mx-2 pb-2"><?php echo $_SESSION['cnic']; ?></span>
                        </div>
                    </div><!--col-6-->
                    <div class="col-6">
                        <div class="my-3">
                            <span>Phone No</span>
                        </div>
                        <div class="border-bottom">
                            <i class="fas fa-phone-alt profile_icon"></i>
                            <span class="mx-2 pb-2"><?php echo $_SESSION['phone']; ?></span>
                        </div>
                    </div><!--col-6-->
                </div><!--row-->
                <div class="row my-3">
                    <div class="col-6">
                        <div class="my-3">
                            <span>Roll Number</span>
                        </div>
                        <div class="border-bottom">
                            <i class="fas fa-database profile_icon"></i>
                            <span class="mx-2 pb-2"><?php echo $_SESSION['roll_number']; ?></span>
                        </div>
                    </div><!--col-6-->
                    <div class="col-6">
                        <div class="my-3">
                            <span>Email</span>
                        </div>
                        <div class="border-bottom">
                            <i class="far fa-envelope profile_icon"></i>
                            <span class="mx-2 pb-2"><?php echo $_SESSION['email']; ?></span>
                        </div>
                    </div><!--col-6-->
                </div><!--row-->
                <div class="row my-3">
                    <div class="col-4">
                        <div class="my-3">
                            <span>Current Semester</span>
                        </div>
                        <div class="border-bottom">
                            <i class="far fa-dot-circle profile_icon"></i>
                            <span class="mx-2 pb-2">1</span>
                        </div>
                    </div><!--col-4-->
                    <div class="col-8">
                        <div class="my-3">
                            <span>Program</span>
                        </div>
                        <div class="border-bottom">
                            <i class="fas fa-address-card profile_icon"></i>
                            <span class="mx-2 pb-2"><?php echo $_SESSION['program']; ?></span>
                        </div>
                    </div><!--col-8-->
                </div><!--row-->
                <div class="row my-3">
                    <div class="col-12">
                        <div class="my-3">
                            <span>Address</span>
                        </div>
                        <div class="border-bottom">
                            <i class="fas fa-home profile_icon"></i>
                            <span class="mx-2 pb-2"><?php echo $_SESSION['address']; ?></span>
                        </div>
                    </div><!--col-12-->
                </div><!--row-->
            </div><!--modal-body-->
            <div class="modal-footer border-0">
                <span class="text-uppercase btn text-primary" data-bs-dismiss="modal">Cancel</span>
            </div><!--modal-footer-->
        </div><!--modal-content-->
    </div><!--modal-dialog-->
</div><!--modal Box For Profile Image-->

<!-- Modal Box For Change Password -->
<div class="modal fade" id="change_password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="staticBackdropLabel"><i class="fas fa-lock text-white"></i> Change Password</h5>
            </div><!--modal-header-->
            <div class="modal-body text-secondary">
                <div class="row my-3">
                    <div class="col-md-12">
                        <label for="current_password">Current Password</label>
                        <input type="password" name="current_password" class="form-control">
                    </div><!--col-md-12-->
                </div><!--row-->
                <div class="row my-3">
                    <div class="col-md-6">
                        <label for="new_password">New Password</label>
                        <input type="password" name="new_password" class="form-control">
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control">
                    </div><!--col-md-6-->
                </div><!--row-->
            </div><!--modal-body-->
            <div class="modal-footer border-0">
                <span class="text-uppercase btn text-primary" data-bs-dismiss="modal">Cancel</span>
                <input type="submit" class="btn btn-primary text-uppercase" name="update" value="Change Password">
            </div><!--modal-footer-->
        </div><!--modal-content-->
    </div><!--modal-dialog-->
</div><!--modal Box For Change Password-->

<?php
    require_once 'footer.php';
?>