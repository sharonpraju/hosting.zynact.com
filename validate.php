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

        $sql = "SELECT password, pro_status FROM user_config WHERE email='$email' AND status='1'"; 
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $hashed_password=$row['password'];
        $pro_status=$row['pro_status'];

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

    $conn->close();
}
else
{
    $conn->close();
    header("Location: login.php");
    exit;
}
?>