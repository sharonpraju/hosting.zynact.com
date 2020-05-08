<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="apple-touch-icon" sizes="76x76" href="https://sharonpraju.github.io/Zynact/assests/img/apple-icon.png">
   <link rel="icon" type="image/png" href="https://sharonpraju.github.io/Zynact/assests/img/zynact_fav_1.png">
   <title>
    Zynact : Free Web Hosting | Digital Solutions
   </title>
   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Nucleo Icons -->
   <link href="https://sharonpraju.github.io/Zynact/assests/css/nucleo-icons.css" rel="stylesheet" />
   <!-- CSS Files -->
   <link href="https://sharonpraju.github.io/Zynact/assests/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165588900-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-165588900-1');
    </script>
 </head>
 
<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['token']) && !empty($_POST['token']) && isset($_POST['password']) && !empty($_POST['password']))
{
    $email=$_POST['email'];
    $pass_tokenx=$_POST['token'];
    $password=$_POST['password'];
    $password=password_hash($password, PASSWORD_BCRYPT);
    $sql = "SELECT pass_token FROM user_config WHERE email='$email'"; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $pass_token=$row['pass_token'];
    if($pass_tokenx==$pass_token && $pass_token!=0)
    {
        $sql="UPDATE user_config
        SET password='$password', pass_token='0' WHERE email='$email'";
        if ($conn->query($sql) === TRUE)
        {
            session_start() ;
            session_unset();
            session_destroy();
            echo"<br><br><br><br><br><br><br><center>
            <div class='text-white'>Password Successfully Changed
            <br><br>
            <a class='btn btn-info' href='login.php'>Login</a></div></center>";
        }
        else
        {
            echo $conn->error;
            echo"<br><br><br><br><br><br><br><center>
            <div class='text-white'>Something Went Wrong
            <br>Please try again, If this happens again please contact us.
            <br> Error-Code : pass_chng01";
            echo"<br><a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
            <a class='btn btn-info' href='index.php'>Home</a></div></center>";
        }
    }
    else
    {
        echo $pass_token;
        echo $pass_tokenx;
        echo"<br><br><br><br><br><br><br><center>
        <div class='text-white'>Something Went Wrong
        <br>Please try again, If this happens again please contact us.
        <br> Error-Code : pass_chng02";
        echo"<br><a class='btn btn-info' href='https://zynact.com/contact.html'>Contact Us</a>
        <a class='btn btn-info' href='index.php'>Home</a></div></center>";
    }
    $conn->close();
}
else
{
    header("Location: login.php");
    exit;
}

?>