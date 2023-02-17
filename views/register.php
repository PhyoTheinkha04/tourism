<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="shortcut icon" type="image/icon" href="../assets/logo/favicon.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
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

        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>

                <div class="card-body">
                    <span><i class="" </i></span>
                    <h4 class="title text-center mt-4">
                        Register For More Informations!
                    </h4>
                    <form action="userAccount.php" class="form-box px-3" method="post">
                        <div class="form-input">

                        </div>
                        <div class="form-input">

                        </div>

                        <div class="form-input">
                            
                            
                        </div>

                            <div class="mb-3">
                                <button type="submit" name="signupSubmit" class="btn btn-block text-uppercase">
                                    Register
                                </button>
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
    <!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script>
    $(document).ready(function() {             
$('#loginModal').modal('show');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
</script>
</body>

</html>