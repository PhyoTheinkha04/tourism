<?php
//start session
session_start();
use phpmailer\phpmailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;
                require '../vendor/phpmailer/phpmailer/src/Exception.php';
                require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
                require '../vendor/phpmailer/phpmailer/src/SMTP.php';
//load and initialize user class
include 'user.php';
$user = new User();

if(isset($_POST['forgotSubmit'])) {
    //check whether email is empty
    if(!empty($_POST['email'])){
        //check whether user exists in the database
        $prevCon['where'] = array('email'=>$_POST['email']);
        $prevCon['return_type'] = 'count';
        $prevUser = $user->getRows($prevCon);
        if($prevUser > 0){
            //generat unique string
            $uniqidStr = md5(uniqid(mt_rand()));;
            
            //update data with forgot pass code
            $conditions = array(
                'email' => $_POST['email']
            );
            $data = array(
                'forgot_pass_identity' => $uniqidStr
            );
            $update = $user->update($data, $conditions);
            
            if($update){
                $resetPassLink = 'http://localhost/tourism/login/resetpassword.php?forget_key='. $uniqidStr;
                
                //get user details
                $con['where'] = array('email'=>$_POST['email']);
                $con['return_type'] = 'single';
                $userDetails = $user->getRows($con);
                
                //send reset password email
                $to = $userDetails['email'];

                //set content-type header for sending HTML email
                //send email
                
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->Mailer = "smtp";
                $mail->SMTPDebug  = 1;  
                $mail->SMTPAuth   = TRUE;
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;
                $mail->Host       = "smtp.gmail.com";
                $mail->Username   = "towtnaung042@gmail.com";
                $mail->Password   = "rxzzfbpdkatetqmd";
                $mail->IsHTML(true);
                $mail->AddAddress($to);
                $mail->SetFrom("ngphyoe.tunar@gmail.com", "tunar tour");
       
                $mail->Subject ="Password Update Request";
                $mailContent = 'Dear '.$userDetails['username'].', 
                <br/>Recently a request was submitted to reset a password for your account. If this was a mistake, just ignore this email and nothing will happen.
                <br/>To reset your password, visit the following link: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
                <br/><br/>Regards,
                <br/>TunarTour';
                
                $mail->MsgHTML($mailContent); 
                if(!$mail->Send()) {
                    echo "Error while sending Email.";
                    var_dump($mail);
                } else {
                    echo "Email sent successfully";
                }
                
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'Please check your e-mail, we have sent a password reset link to your registered email.';
            }else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Some problem occurred, please try again.';
            }
        }else{
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Given email is not associated with any account.'; 
        }
        
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Enter email to create a new password for your account.'; 
    }
    //store reset password status into the session
    $_SESSION['sessData'] = $sessData;
    //redirect to the forgot pasword page
    header("Location:forgotpassword.php");
} elseif(isset($_POST['resetSubmit'])) {
    if(!empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['forget_key'])) {
        $forget_key = $_POST['forget_key'];
        //password and confirm password comparison
        if($_POST['password'] !== $_POST['confirm_password']) {
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Confirm password must match with the password.'; 
        } else {
            //check whether identity code exists in the database
            $prevCon['where'] = array('forgot_pass_identity' => $forget_key);
            $prevCon['return_type'] = 'single';
            $prevUser = $user->getRows($prevCon);

            
            if(!empty($prevUser)){
                //update data with new password
                $conditions = array(
                    'forgot_pass_identity' => $forget_key
                );
                $data = array(
                    'password' => md5($_POST['password'])
                );
                $update = $user->update($data, $conditions);
                if($update){
                    $sessData['status']['type'] = true;
                    $sessData['status']['msg'] = 'Your account password has been reset successfully. Please login with your new password.';
                }else{
                    $sessData['status']['type'] = false;
                    $sessData['status']['msg'] = 'Some problem occurred, please try again.';
                }
            }else{
                $sessData['status']['type'] = false;
                $sessData['status']['msg'] = 'You does not authorized to reset new password of this account.';
            }
        }
    } 

    // //store reset password status into the session
    $_SESSION['sessData'] = $sessData;
    if(isset($sessData['status']['type']) && $sessData['status']['type'] == true) {
        header("Location: login.php");    
    } else {
        header("Location: resetpassword.php?forget_key=".$_POST['forget_key']);
    }
}