<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="shortcut icon" type="image/icon" href="../assets/logo/favicon.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../login/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</head>

<body>
    <?php 
// Start session 
session_start(); 
 
// Get data from session 
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
 
// Get status from session 
if(!empty($sessData['status']['msg'])){ 
    $statusMsg = $sessData['status']['msg']; 
    $status = $sessData['status']['type']; 
    unset($_SESSION['sessData']['status']); 
} 
 
$postData = array(); 
if(!empty($sessData['postData'])){ 
    $postData = $sessData['postData']; 
    unset($_SESSION['postData']); 
} 
?>

    <!-- Status message -->

    <div class="container">
        <<div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>
                <div class="card-body">
                    <span><i class=""> </i></span>
                    <h4 class="title text-center mt-4">
                        Register For More Informations!
                    </h4>
                    <form action="userAccount.php" class="form-box px-3" method="post">
                       
                        
                        <div class="form-input">
                            <input type="text" name="username" placeholder="Username"
                                value="<?php echo !empty($postData['username'])?$postData['username']:''; ?>">
                        </div>

                        <div class="form-input">
                            <input type="email" name="email" placeholder="EMAIL"
                                value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>">
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="PASSWORD">
                        </div>
                        <div class="form-input">
                            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD">
                        </div>
                        <div class="mb-3 send-button">
                            <div class="send-button">
                            <button type="submit" name="signupSubmit" > submit

                            </button>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="login.php" class="forget-link">
                                Go Back To Login
                            </a>
                        </div>
                        <hr class="my-4">


                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="regisFrm">






    </div>