<?php require_once dirname(__DIR__) . '/controller/controller.php';
 include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description"> 

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <!-- <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a> -->
                    <a href="forms1.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Forms1</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <a href="../index.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Table</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6 card-body">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">New Form</h6>
                            <form method="POST" action="" enctype="multipart/form-data" id="frm">
                                <div class="mb-3">
                                <label class="form-label" for="fname">Firstname</label>
                                    <input type="text" class="form-control" id="fname" placeholder="Firstname" name="firstname">
                                    <span class="error-message-fname"></span>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Lastname</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Lastname" name="lastname">
                                    <span class="error-message-lname"></span>                                
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Number</label>
                                    <input type="text" class="form-control" id="number" placeholder="Number" name="number">
                                    <span class="error-message-number"></span>                                
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                    <span class="error-message-email"></span>                                
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="">
                                    <span class="error-message-password"></span>                                
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Selete States</label>
                                     <select name="states[]" id="states" class="form-control multiple-select">     
                                     <option value="">--Select Your State--</option>        
                                         <?php 
                                           $db = mysqli_connect('localhost','root','','mydatabase2');
                                            $query= "SELECT * FROM states";
                                            $s = mysqli_query($db,$query);
                                            
                                                            foreach($s as $r)
                                                             {
                                                             ?> 
                                                                 <option value="<?php echo $r['state_name']; ?>"><?php echo $r['state_name']; ?></option>
                                                             <?php    
                                                             }
                                                             ?>                     
                                        </select>
                                        <span class="error-message-states"></span>
                                        </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>  
                                    <textarea name="myCKEditor" id="myCKEditor"></textarea>
                                    <span class="error-message-address"></span>
                                </div>
                                <div class="mb-3" id="1">
                                    <label class="form-lable">Hobbies:</label>
                                    <input class="form-check-input" id="hobbies" type="checkbox" name="hobbies[]" value="cricket" checked> 
                                    <label class="form-check-label" for="cricket">
                                     Cricket
                                    </label>
                                    <input class="form-check-input" id="hobbies" type="checkbox" name="hobbies[]" value="music">
                                    <label class="form-check-label" for="music">
                                     Music
                                    </label>
                                    <input class="form-check-input" id="hobbies" type="checkbox" name="hobbies[]" value="reading">
                                    <label class="form-check-label" for="reading">
                                     Reading
                                    </label>
                                    <span class="error-message-hobbies"></span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-lable">Gender:</label>
                                    <input class="form-check-input" id="gender" type="radio" name="gender" value="male" checked>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                    <input class="form-check-input" id="gender" type="radio" name="gender" value="female">
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                    <input class="form-check-input" id="gender" type="radio" name="gender" value="other">
                                    <label class="form-check-label" for="other">
                                        Other
                                    </label>
                                    <!-- <span class="error-message-gender"></span> -->
                                 </div>
                                 <div class="mb-3">
                                      <label class="form-label">Image</label>
                                      <input type="file" name="image" id="image" class="form-control">
                                      <span class="error-message-image"></span>
                                </div>
                                <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="submit" id="submit">submit</button>
                                <a href="../index.php" class="btn btn-info col-md-1">View</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<script src="../view/js/jquery-1.11.1.min.js"></script>
<script src="../view/js/jquery.validate.min.js"></script>
<script src="../view/js/additional-methods.min.js"></script>
<script src="../view/js/select2.min.js"></script>
<script>
    // just for the demos, avoids form submit

        $("#frm").validate({
         rules:{
             firstname:{
                 required: true,
                 lettersonly: true
             },
             lastname:{
                 required: true,
                 lettersonly: true
             },
             number:{
                 required: true,
                 minlength: 10,
                 maxlength:10,
                 digits: true
             },
             email:{
                 required: true,
                 email:true 
             },
             password:{
                 required: true,
                 minlength: 8,
                 maxlength:20,
                 pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/
             },
             "states[]":{
                required: true
             },
             "hobbies[]":{
                required: true,
                minlength: 2
             },
             image:{
                required: true,
                accept:"image/jpeg, image/png",
                maxFileSize: 20971520
             }
            },
             messages: {

            firstname: {
                required: "Firstname is required",
                lettersonly: "Only latters are allowed"
            },
            lastname: {
                required: "Lastname is required",
                lettersonly: "Only latters are allowed"
            },
            number: {
                required: "Number is required",
                minlength: "Number should have 10 digits",
                maxlength:"Number should have 10 digits",
                digits:"Please enter a valid number"
            },
            email:{
                 required: "Email is required",
                 email: "Please enter a valid email ex. a@b.com" 
             },
             password:{
                 required: "Password is required",
                 minlength: "Password must have 8 character",
                 pattern: "Password format like ex.Pa$$w0rd"
             },
             "states[]":{
                required: "Please Select Your State"
             },
             "hobbies[]":{
                required: "Please Select Hobbies",
                minlength: "Please chose 2 hobbies"
             },
             image:{
                required: "Please upload image",
                accept: "Only JPG and PNG files are allowed",
                maxFileSize: "The maximum file size allowed is 20 MB"
             }
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") === "firstname") {
                error.appendTo(".error-message-fname");
            }
            if (element.attr("name") === "lastname") {
                error.appendTo(".error-message-lname");
            }
            if (element.attr("name") === "number") {
                error.appendTo(".error-message-number");
            }
            if (element.attr("name") === "email") {
                error.appendTo(".error-message-email");
            }
            if (element.attr("name") === "password") {
                error.appendTo(".error-message-password");
            }
            if (element.attr("name") === "states[]") {
                error.appendTo(".error-message-states");
            }
            if (element.attr("name") === "hobbies[]") {
                error.appendTo(".error-message-hobbies");
            }
            if (element.attr("name") === "image") {
                error.appendTo(".error-message-image");
            }
      }
     });

</script>
            <script>
            $(".multiple-select").select2({});
            </script>
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('myCKEditor');
    </script>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // require_once('controller/controller.php');
                $Controller = new Hello($db);
                $Controller->show();
    }
?>
<?php include("footer.php"); ?>
