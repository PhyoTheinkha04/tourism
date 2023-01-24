<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/icon" href="../assets/logo/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body style="background-image: url('img2.jpg');">

    <?php
        if(isset($_POST["submit"])){
         $email = $_POST["email"];
         $password = $_POST["password"];
         echo $email . "-" . $password;
        }
?>
    <div class="container">

        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>

                <div class="text-center" style="padding:50px 0;margin-left: 66px;">
                    <div class="logo">forgot password</div>
                    <!-- Main Form -->
                    <div class="login-form-1">
                        <form id="forgot-password-form" class="text-left">
                            <div class="etc-login-form">
                                <p>When you fill in your registered email address, you will be sent instructions on
                                    how to reset
                                    your password.</p>
                            </div>
                            <div class="login-form-main-message"></div>
                            <div class="main-login-form">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="fp_email" class="sr-only">  Email address  </label>
                                        <input type="text" class="form-control" id="fp_email" name="fp_email"placeholder="email address" style="back">
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="etc-login-form">
                                <p>already have an account? <a href="login.php" class="forget-link">login here</a></p>
                                <p>new user? <a href="register.php" class="forget-link">register</a></p>
                            </div>
                            <div class="text-right" style="margin: top 30px;">
                                <a href="../views/home_page.php" class="forget-link">
                                    Go Back To Main Page
                                </a>
                            </div>
                        </form>
                    </div>
                    <!-- end:Main Form -->
                </div>

                <div class="card-body">
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>


</html>