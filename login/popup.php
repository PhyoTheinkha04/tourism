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
   
    




    <!-- partial:index.partial.html -->
    <div class="container2">
        <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
            Login
        </button>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 59%;">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container2">
                        <div class="row px-3">
                            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                                <div class="img-left d-none d-md-flex"></div>
                                <div class="card-body">
                                    <div class="modal-header border-bottom-0">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="d-flex flex-column text-center">
                                        <span><i class=""> </i></span>
                                        <h4 class="title text-center mt-4">
                                            Register For More Informations!
                                        </h4>
                                        <form action="userAccount.php" class="form-box px-3" method="post">
                                            <div class="">
                                                <?php if(!empty($statusMsg)){ ?>
                                                <div class="status-msg <?php echo $status; ?> card2">
                                                    <?php echo $statusMsg; ?></div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-input">
                                                <div class="input-group">
                                                    <input autocomplete="off" name="username" id="username"
                                                        class="input"
                                                        value="<?php echo !empty($postData['username'])?$postData['username']:''; ?>"
                                                        placeholder="Username">
                                                    <div></div>
                                                </div>

                                            </div>
                                            <div class="form-input">
                                                <div class="input-group">
                                                    <input autocomplete="off" name="email" id="email" class="input"
                                                        type="email"
                                                        value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"
                                                        placeholder="Email">
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="form-input">
                                                <div class="input-group">
                                                    <input autocomplete="off" name="password" id="password"
                                                        class="input" type="password" placeholder="Password">
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="form-input">
                                                <div class="input-group">

                                                    <input autocomplete="off" name="confirm_password" id="password"
                                                        class="input" type="password" placeholder="Confirm Password">
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="mb-3 send-button">
                                                <div class="send-button">
                                                    <button type="submit" name="signupSubmit">submit</button>
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
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- partial -->





    <footer>
        <!-- jQuery -->
        <script src='../assets/js/jquery.min.js'></script>
     
        
      
        <script src='../assets/js/bootstrap.min.js'></script>
        <!-- Custom Script -->
        
    </footer>
</body>

</html>