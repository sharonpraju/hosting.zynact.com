<link href="https://sharonpraju.github.io/Zynact/assests/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();

/*if(isset($_SESSION['user']))
 {
   $user=$_SESSION['user'];
 }
 else
 {
  header("Location: https://hosting.zynact.com/login.php");
  exit;
 }*/

 $x=0;

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['website_category']) && !empty($_POST['website_category']) && isset($_POST['website_language']) && !empty($_POST['website_language']) && isset($_POST['number']) && !empty($_POST['number']) && isset($_POST['zynact_1x']) && !empty($_POST['zynact_1x']) && isset($_POST['zynact_2x']) && !empty($_POST['zynact_2x']))
{
    $usernamex=$_POST['username'];
    $usernamex = preg_replace('/\s+/', '', $usernamex);
    $username=$usernamex;
    $usernamex="http://".$username.".zynact.top";
    $email=$_POST['zynact_1x'];

    $sql = "SELECT email FROM user_config WHERE email='$email'"; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if($row >= 1)
    {
      //do nothing
    }
    else
    {
      header("Location: https://hosting.zynact.com/login.php");
      exit;
    }

    $sql = "SELECT url, email, status FROM cpanel_accounts WHERE url='$usernamex'"; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    $row1 = mysqli_fetch_assoc($result);
    if($row >= 1)
    {
      if($row1['email']=="$email" AND $row1['status']==0)
      {
        $sql="DELETE FROM cpanel_accounts WHERE url='$usernamex'";
        if ($conn->query($sql) === TRUE)
        {
          $x=1;
        } 
        else
        {
          echo "Error: cp_acc_del_01";
        }
      }
      else
      {
        echo"<br><br><br><br><br><br><br><br>
        <center><div class='text-white'>Sorry Account Already Exist With This Account Label<br>
        Please Try Again With Another Account Label<br><br><br><br>
        If this cpanel account with this account label belongs to you and if it is suspended or closed,
        <br>please contact the customer support agent to reinstate the account.<br><br>
        <a class='btn btn-info' href='https://hosting.zynact.com/cpanel_signup.php'>Back</a></div></center>";
      }
    }
    else
    {
      $x=1;
    }
}
else
{
  header("Location: https://hosting.zynact.com/cpanel_signup.php");
  exit;
}
?>



<form class="form signup" id="updatedetails" name="updatedetails" action="http://order.zynact.top/register2.php" method="post">
<input type="text" class="form-control" name="username" value="<?PHP if($x==1){echo $username;} ?>" required hidden readonly>
<input type="text" class="form-control" name="website_category" value="<?PHP  if($x==1){echo $_POST['website_category'];} ?>" required hidden readonly>
<input type="text" class="form-control" name="website_language" value="<?PHP  if($x==1){echo $_POST['website_language'];} ?>" required hidden readonly>
<input type=hidden name="email" value="<?PHP  if($x==1){echo $_POST['zynact_1x'];} ?>">
<input type=hidden name="password" value="<?PHP  if($x==1){echo $_POST['zynact_2x'];} ?>">
<input type=hidden name="id" value="<?PHP  if($x==1){echo $_POST['id'];} ?>">

<?php
$sql = "SELECT pro_status FROM user_config WHERE email='$email' AND status='1'"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$pro_status=$row['pro_status'];

if($pro_status==1)
{
  if($x==1){echo'<input type="hidden" name="plan_name" value="pro">';}
}
else
{
  if($x==1){echo'<input type="hidden" name="plan_name" value="free">';}
}
?>

<input type="text" class="form-control" name="number" value="<?PHP if($x==1){echo $_POST['number'];} ?>" hidden readonly>
</form>

<?php
if($x==1)
{
    $url=$usernamex;
    $sql="INSERT INTO cpanel_accounts(email, url)
    VALUES ('$email', '$url')";
    if ($conn->query($sql) === TRUE)
    {
        echo"<script>
        document.forms['updatedetails'].submit();
        </script>";
    }
    else
    {
        echo"<br><br><br><br><br><br><br>
                <center>
                <div class='card' style='width:80%;'>
                <div class='card-body'>
                <div class='text-white'>
                <h3>Something Went Wrong</h3>
                <br>Account Already Exist
                <br><br>
                <br>
                If this happens again please contact the support support agent.
                <br> Error-Code : cp_acc_reg_01";
                echo"
                <br>
                <br>
                <a class='btn btn-info' href='https://hosting.zynact.com/cpanel_signup.php'>Back</a>
                </div>
                </div>
                </div>
                </center>";
    }
}
$conn->close();
?>