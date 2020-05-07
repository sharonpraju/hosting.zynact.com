<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();

if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['user']) && !empty($_GET['user']) && isset($_GET['url']) && !empty($_GET['url']))
{
    $_SESSION['activate_username']=$_GET['user'];
    $_SESSION['activate_email']=$_GET['email'];
    $_SESSION['activate_url']=$_GET['url'];
}
if(isset($_SESSION['user']))
{
    if(isset($_SESSION['activate_username']) && !empty($_SESSION['activate_username']) && isset($_SESSION['activate_email']) && !empty($_SESSION['activate_email']) && isset($_SESSION['activate_url']) && !empty($_SESSION['activate_url']))
    { 
        if($_SESSION['user']==$_SESSION['activate_email'])
        {
            $email=$_SESSION['activate_email'];
            $username=$_SESSION['activate_username'];
            $url=$_SESSION['activate_url'];

            $sql = "SELECT username FROM cpanel_accounts WHERE email='$email' AND username='$username'"; 
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            if($row >= 1)
            {
                echo"<br><br><br><br><br><br><br><br>
                <center><div class='text-white'>Account Already Activated<br>
                Please Login To Your Account<br><br>
                <a class='btn btn-info' href='login.php'>Log In</a></div></center>";
            }
            else
            {
                $sql="UPDATE cpanel_accounts
                SET username='$username', status='1'
                WHERE url='$url' AND email='$email'";
                if ($conn->query($sql) === TRUE)
                {
                    $email=0;
                    $username=0;
                    $url=0;
                    $_SESSION['activate_email']=0;
                    $_SESSION['activate_username']=0;
                    $_SESSION['activate_url']=0;

                    header("Location: dashboard.php");
                    exit;

                }
                else
                {
                //echo $conn->error;
                echo"<br><br><br><br><br><br><br><center>
                <div class='text-white'>Something Went Wrong
                <br>Please try again, If this happens again please contact us.
                <br> Error-Code : acc_val01";
                echo"<br><a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
                <a class='btn btn-info' href='select_plan.php'>Back</a></div></center>";
                }
            }
        }
    }
    else
    {
        echo"<br><br><br><br><center><div class='text-white'>Invalid Request</div></center>";
    }
    $conn->close();
}
else
{
    $conn->close();
    header("Location: login.php?reff=activate");
    exit;
}
?>