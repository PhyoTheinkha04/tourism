<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/icon" href="../assets/logo/favicon.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/reg.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>


<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
<body>


    <div class="container2" style="width: 80%;">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>
                <div class="card-body">
                    <div class="d-flex flex-column text-center">
                        <span><i class=""> </i></span>
                        <h2 style="margin-bottom:50px;">Enter the Email of Your Account to Reset New Password</h2>
                        <div class="regisFrm">
                            <form action="userAccount.php" class="form-box px-3" method="post">
                                <div class="form-input">
                                    <div class="input-group">
                                        <input autocomplete="off" name="email" id="email" class="input" type="email"
                                            placeholder="EMAIL">
                                    </div>
                                </div>
                                <div class="mb-3 send-button">
                                    <div class="send-button">
                                        <button type="submit" name="forgotSubmit" value="CONTINUE" >submit</button>
                                    </div>
                                </div>


                                <p>Don't have an account? <a href="register.php">Register</a></p>
                                <a href="forgotPassword.php">Forgot password?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

    </div>
    <footer>
        <!-- jQuery -->
        <script src='../assets/js/jquery.min.js'></script>



        <script src='../assets/js/bootstrap.min.js'></script>
        <!-- Custom Script -->

    </footer>
</body>