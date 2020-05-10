<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://sharonpraju.github.io/Zynact/assests/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();
if(isset($_SESSION['user']))
   {
    header("Location: dashboard.php");
    exit;
   }

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function clean($string) {
    $string = str_replace(' ', '', $string); // Removes all spaces.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
 
    return preg_replace('/-+/', '', $string); // Removes multiple hyphens.
}

$user_ip = getUserIP();

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_SESSION['plan_selected']) && !empty($_SESSION['plan_selected']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $plan=$_SESSION['plan_selected'];
    $promo_code=$_POST['promo_code'];

    $passwordx=$_POST['password'];
    $password=password_hash($password, PASSWORD_BCRYPT);

    $sql = "SELECT email FROM user_config WHERE email='$email'"; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if($row >= 1)
    {
        echo"<br><br><br><br><br><br><br><br>
        <center><div class='text-white'>Sorry Account Already Exist For This Email Id<br>
        Please Login To Your Account<br><br>
        <a class='btn btn-info' href='login.php'>Log In</a></div></center>";
    }
    else
    {
        if($plan=="pro")
        {
            $plan_id=1;
            if($promo_code=="only4saranbro" or $promo_code=="only4zynact" or $promo_code=="4zynact")
            {
                $sql="INSERT INTO user_config(password, email, name, pro_status, ip)
                VALUES ('$password', '$email', '$name', '$plan_id', '$user_ip')";
                if ($conn->query($sql) === TRUE)
                {
                    $_SESSION['user']=$email;
                    $_SESSION['pass']=$passwordx;
                    $_SESSION['pro_status']=$plan_id;
                    $name=clean($name);
                    $date_time=date("Y-m-d h:i:s");
                    $sql="INSERT INTO forum_users (username, nickname, email, is_email_confirmed, password, joined_at)
                VALUES ('$name', '$name', '$email', '1', '$password', '$date_time')";
                    if ($conn->query($sql) === TRUE)
                    {
                    header("Location: dashboard.php");
                    }
                    else
                    {
                        //echo $conn->error;
                        echo"<br><br><br><br><br><br><br><center>
                        <div class='text-white'>Something Went Wrong
                        <br>Please try again, If this happens again please contact us.
                        <br> Error-Code : acc_reg_forum_01";
                        echo"<br><a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
                        <a class='btn btn-info' href='select_plan.php'>Back</a></div></center>";
                    }
                }
                else
                {
                //echo $conn->error;
                echo"<br><br><br><br><br><br><br><center>
                <div class='text-white'>Something Went Wrong
                <br>Please try again, If this happens again please contact us.
                <br> Error-Code : acc_reg01";
                echo"<br><a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
                <a class='btn btn-info' href='select_plan.php'>Back</a></div></center>";
                }
            }
            else
            {
                echo"<br><br><br><br><br><br><br><center>
                <div class='text-white'>
                <h3>Your Request Was Not Processed</h3>
                <p>Payment Gateway Integration Is Processing</p>
                <br><h4>Please Contact Us To Get Access</h4><br>
                <a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
                </div>
                </center>";
            }

        }
        else
        {
            $plan_id=0;
            $sql="INSERT INTO user_config(password, email, name, pro_status, ip)
            VALUES ('$password', '$email', '$name', '$plan_id', '$user_ip')";
            if ($conn->query($sql) === TRUE)
            {
                $_SESSION['user']=$email;
                $_SESSION['pass']=$passwordx;
                $name=clean($name);
                $date_time=date("Y-m-d h:i:s");
                $sql="INSERT INTO forum_users (username, nickname, email, is_email_confirmed, password, joined_at)
                VALUES ('$name', '$name', '$email', '1', '$password', '$date_time')";
                if ($conn->query($sql) === TRUE)
                {
                header("Location: dashboard.php");
                }
                else
                {
                    //echo $conn->error;
                    echo"<br><br><br><br><br><br><br><center>
                    <div class='text-white'>Something Went Wrong
                    <br>Please try again, If this happens again please contact us.
                    <br> Error-Code : acc_reg_forum_02";
                    echo"<br><a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
                    <a class='btn btn-info' href='select_plan.php'>Back</a></div></center>";
                }
            }
            else
            {
            //echo $conn->error;
                echo"<br><br><br><br><br><br><br>
                <center>
                <div class='text-white'>
                Something Went Wrong
                <br>Please try again, If this happens again please contact us.
                <br> Error-Code : acc_reg02";
                echo"<br><a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
                <a class='btn btn-info' href='select_plan.php'>Back</a></div></center>";
            }
        }
        
    }
    $conn->close();
}
else
{
    $conn->close();
    header("Location: select_plan.php");
    exit;
}

?>