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
    require_once "./member.php";
       if(isset($_POST['submit'])){
           $username =$_POST["username"];
           $email = $_POST["email"];
           $password = $_POST["password"];

           $ret = registerUser($username);
           $ret2 = registerEmail($email);
           $ret3 = registerPassword($password);
           
           
         }else{
            $ret = null;
            $ret2 = null;
            $ret3 = null;

         }
    ?>
    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>

                <div class="card-body">
                    <h4 class="title text-center mt-4">
                        Register For More Informations!
                    </h4>
                    <form action="register.php" class="form-box px-3" method="post">
                        <div class="form-input">
                             <span><i class=""><?php echo $ret;?></i></span>
                             
                            <input type="username" name="username" id="username" placeholder="username" required>
                            
                        </div>
                        <div class="form-input">
                            <span><i class=""><?php echo $ret2;?></i></span>
                            <input type="email" name="email" id="email" placeholder="Email Address" tabindex="10" required>
                            
                        </div>


                        <div class="form-input">
                            <span><i class=""><?php echo $ret3;?></i></span>
                            <input type="password" name="password" id="password" placeholder="Password" required>

                            <div class="mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cb1" name="">
                                    <label class="custom-control-label" for="cb1">Remember me</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" id="submit" name="submit" class="btn btn-block text-uppercase">
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
</body>

</html>