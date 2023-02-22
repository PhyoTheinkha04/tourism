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
 
// If the user already logged in 
if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){ 
    include_once 'User.class.php'; 
    $user = new User(); 
    $conditions['where'] = array( 
        'id' => $sessData['userID'] 
    ); 
    $conditions['return_type'] = 'single'; 
    $userData = $user->getRows($conditions); 
} 
?>

<?php if(!empty($userData)){ ?>
<!-- <h2>Welcome <?php echo $userData['username']; ?>!</h2> -->
<?php include 'index.php';?>
<a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>

<div class="regisFrm">
</div>

<?php }else{ ?>

<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>
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

<body>


    <div class="container2" style="width: 80%;">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>
                <div class="card-body">
                    <div class="d-flex flex-column text-center">
                        <span><i class=""> </i></span>
                        <h2 style="margin-bottom:50px;">Login to Your Account</h2>
                        <div class="regisFrm">
                            <form action="userAccount.php" class="form-box px-3" method="post">
                                <div class="form-input">
                                    <div class="input-group">
                                        <input autocomplete="off" name="email" id="email" class="input" type="email"
                                            placeholder="EMAIL"
                                            value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"
                                            required="">
                                    </div>
                                </div>
                                <div class="form-input">
                                    <div class="input-group">
                                        <input utocomplete="off" type="password" name="password" id="password"
                                            class="input" placeholder="PASSWORD" required="">

                                    </div>
                                </div>
                                <div class="mb-3 send-button">
                                    <div class="send-button">
                                        <button type="submit" name="loginSubmit">submit</button>
                                    </div>
                                </div>


                                <p>Don't have an account? <a href="register.php">Register</a></p>
                        </div>
                        </form>
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
<?php } ?>