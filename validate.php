<link href="https://sharonpraju.github.io/Zynact/assests/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();
if(isset($_POST['validate']) && !empty($_POST['validate']))
{
    $validate=$_POST['validate'];

    if($validate=="login")
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql = "SELECT * FROM user_config WHERE email='$email' AND status='1'"; 
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $hashed_password=$row['password'];
        $pro_status=$row['pro_status'];
        $user_name=$row['name'];

        if(isset($_POST['reff']) && !empty($_POST['reff']))
        {
            $reff=$_POST['reff'];
        }
        else
        {
            $reff="dashboard";
        }

        if(password_verify($password, $hashed_password)) {
            $_SESSION['user']=$email;
            $_SESSION['user_name']=$user_name;
            $_SESSION['pass']=$password;
            $_SESSION['pro_status']=$pro_status;
            
                if($reff=="activate")
                {
                    header("Location: activate.php");
                }
                else
                {
                    header("Location: dashboard.php");
                }
            
        }
        else
        {
            echo"<br><br><br><br><br><br><br>
                <center>
                <div class='card' style='width:80%;'>
                <div class='card-body'>
                <div class='text-white'>
                <h3>Invalid Username or Password</h3>
                <br>Please try again
                <br><br>
                <br>
                If this happens again please contact us or click on Forgot Password.
                <br> Error-Code : acc_log01";
                echo"
                <br>
                <br>
                <a class='btn btn-info' href='login.php?reff=".$reff."'>Back</a>
                </div>
                </div>
                </div>
                </center>";

        }
    }

    if($validate=="forgot_password")
    {
        if(!empty($_POST['email']))
        {
            //do nothing
        }
        else
        {
            header("Location: login.php");
            exit;
        }
        function random_strings($length_of_string) 
        {
            // String of all alphanumeric character 
            $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            // Shufle the $str_result and returns substring 
            // of specified length 
            return substr(str_shuffle($str_result),0, $length_of_string); 
        }
            $token=random_strings(10);
            $to = $_POST['email'];
            $from = "noreply@zynact.com";
            //$name = $_REQUEST['name'];
            $subject = "Password Reset";
            //$number = $_REQUEST['number'];
            $message="We have recieved a request for reseting password for your Zynact Hosting account<br>
            please click on the link below (or copy and paste the link in your browser) to reset the password<br><br>
            https://hosting.zynact.com/password_form.php?email=".$to."&token=".$token;
            $footer="<br><br>Thank you,<br>Zynact Hosting Team";
            $headers = "From: $from";
        	$headers = "From: " . $from . "\r\n";
        	$headers .= "Reply-To: ". $from . "\r\n";
        	$headers .= "MIME-Version: 1.0\r\n";
        	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $logo = 'https://sharonpraju.github.io/Zynact/assests/img/zynact_logo_small_1.png';
            $link = 'https://hosting.zynact.com';
        	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
        	$body .= "<table style='width: 100%;'>";
        	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
        	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
        	$body .= "</td></tr></thead><tbody><tr>";
        	$body .= "<tr><td></td></tr>";
            $body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
            $body .= "<tr><td colspan='2' style='border:none;'>{$footer}</td></tr>";
        	$body .= "</tbody></table>";
            $body .= "</body></html>";
            $sql="UPDATE user_config
                SET pass_token='$token'
                WHERE email='$to'";
                if ($conn->query($sql) === TRUE)
                {
                    $send = mail($to, $subject, $body, $headers);
                    echo"<br><br><br><br><br><br><br><center>
                    <div class='text-white'>We have sent an email to ".$to."
                    <br>Please click on the link in that email to reset your password.
                    <br>Check the spam folder also for the email.
                    <br><br>
                    <a class='btn btn-info' href='login.php'>Back</a></div></center>";
                }
                else
                {
                    //echo $conn->error;
                    echo"<br><br><br><br><br><br><br><center>
                    <div class='text-white'>Something Went Wrong
                    <br>Please try again, If this happens again please contact us.
                    <br> Error-Code : pass_chng01";
                    echo"<br><a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
                    <a class='btn btn-info' href='login.php'>Login</a></div></center>";
                }
    }

    if($validate=="change_password")
    {
        if(isset($_SESSION['user']))
        {
          //do nothing
        }
        else
        {
         header("Location: login.php");
         exit;
        }

        function random_strings($length_of_string) 
        {
            // String of all alphanumeric character 
            $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            // Shufle the $str_result and returns substring 
            // of specified length 
            return substr(str_shuffle($str_result),0, $length_of_string); 
        }
            $token=random_strings(10);
            $to = $_SESSION['user'];
            $from = "noreply@zynact.com";
            //$name = $_REQUEST['name'];
            $subject = "Password Reset";
            //$number = $_REQUEST['number'];
            $message="We have recieved a request for reseting password for your Zynact Hosting account<br>
            please click on the link below (or copy and paste the link in your browser) to reset the password<br><br>
            https://hosting.zynact.com/password_form.php?email=".$to."&token=".$token;
            $footer="<br><br>Thank you,<br>Zynact Hosting Team";
            $headers = "From: $from";
        	$headers = "From: " . $from . "\r\n";
        	$headers .= "Reply-To: ". $from . "\r\n";
        	$headers .= "MIME-Version: 1.0\r\n";
        	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $logo = 'https://sharonpraju.github.io/Zynact/assests/img/zynact_logo_small_1.png';
            $link = 'https://hosting.zynact.com';
        	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
        	$body .= "<table style='width: 100%;'>";
        	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
        	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
        	$body .= "</td></tr></thead><tbody><tr>";
        	$body .= "<tr><td></td></tr>";
            $body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
            $body .= "<tr><td colspan='2' style='border:none;'>{$footer}</td></tr>";
        	$body .= "</tbody></table>";
            $body .= "</body></html>";
            $sql="UPDATE user_config
                SET pass_token='$token'
                WHERE email='$to'";
                if ($conn->query($sql) === TRUE)
                {
                    $send = mail($to, $subject, $body, $headers);
                    echo"<br><br><br><br><br><br><br><center>
                    <div class='text-white'>We have sent an email to ".$to."
                    <br>Please click on the link in that email to reset your password.
                    <br>Check the spam folder also for the email.
                    <br><br>
                    <a class='btn btn-info' href='login.php'>Back</a></div></center>";
                }
                else
                {
                    //echo $conn->error;
                    echo"<br><br><br><br><br><br><br><center>
                    <div class='text-white'>Something Went Wrong
                    <br>Please try again, If this happens again please contact us.
                    <br> Error-Code : pass_chng01";
                    echo"<br><a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
                    <a class='btn btn-info' href='index.php'>Home</a></div></center>";
                }
    }
    

    $conn->close();
}
else
{
    $conn->close();
    header("Location: login.php");
    exit;
}
?>