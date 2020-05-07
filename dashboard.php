<?php
 include 'db_connection.php';
 $conn = OpenCon();
 session_start();
 if(isset($_SESSION['user']))
  {
    $user=$_SESSION['user'];
  }
  else
  {
   header("Location: login.php");
   exit;
  }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 
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

   <script>
      function change_user(xvalue){
          document.getElementById("input_username1").value= xvalue;
          document.getElementById("input_username2").value= xvalue;
          document.getElementById("input_username3").value= xvalue;
          var url=document.getElementById("url"+xvalue).value;
          change_url(url);
          }

      function change_link(xvalue){
          x=document.getElementById("cpanel_link");
          x.setAttribute("href", xvalue);
          var url=document.getElementById("url"+xvalue).value;
          change_url_1(url);
          }

   </script>

 </head>
 
 <body class="register-page">
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://zynact.com/index.html">
          <span>Zynact</span>
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                Zynact
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-link text-white" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link text-white" href='https://zynact.com/contact.html'>Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link" onclick="window.location.href ='support.php'">Support</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link" onclick="window.location.href ='faq.php'">FAQ</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="btn btn-simple btn-success" onclick="window.location.href ='index.php'">Free Web Hosting</a>
          </li>
          <br>
          <?php
          if(isset($_SESSION["user"]) && !empty($_SESSION["user"]))
          {
              echo'<li class="nav-item" id="btn_log_out">
              <a class="btn btn-simple btn-success"  href="logout.php">
                <i class="tim-icons icon-single-02"></i> Log Out&nbsp;&nbsp;
              </a>
            </li>';
          }
          else
          {
              echo'<li class="nav-item" id="btn_sign_in">
              <a class="btn btn-simple btn-success" href="login.php">
                <i class="tim-icons icon-single-02"></i> Sign In&nbsp;&nbsp;
              </a>
            </li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
   <!-- End Navbar -->
   <div class="wrapper">
      <div class="modal fade modal-black" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; margin-top:-10px;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove text-white"></i>
              </button>
              <div class="text-muted text-center ml-auto mr-auto">
                <h3 class="mb-0">Cpanel Access</h3>
              </div>
            </div>
            <div class="modal-body">
              <div class="text-center text-muted mb-4 mt-3">
                <small>Click the button below to access Cpanel.</small>
              </div>
                <div class="text-center">
                  <a id="cpanel_link" href="" target="_blank" class="btn-green text-white">Goto Control Panel</a>
                  <br><br>
                </div>
                <br>
                <small><p><b>Website Url : <input type="text" class="btn-link" id="input_url_1" style="width:100%;" readonly></b></p> </small> 
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-black" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; margin-top:-150px;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove text-white"></i>
              </button>
              <div class="text-muted text-center ml-auto mr-auto">
                <h3 class="mb-0">Account Details</h3>
              </div>
            </div>
            <div class="modal-body">
              <div class="table-responsive ps">
                      <table class="table tablesorter " id="plain-table">
                        <tbody>
                          <tr>
                            <td>
                              CPanel Username
                            </td>
                            <td>
                              <input type="text" class="btn-link" id="input_username1" readonly>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              MySql Username
                            </td>
                            <td>
                            <input type="text" class="btn-link" id="input_username2" readonly>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Ftp Username
                            </td>
                            <td>
                            <input type="text" class="btn-link" id="input_username3" readonly>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Website Url
                            </td>
                            <td>
                            <input type="text" class="btn-link" id="input_url" style="width:100%;" readonly>
                            </td>
                          </tr>
                          <tr>
                          </tr>
                        </tbody>
                      </table>
              </div>
              <div class="text-white text-muted" style="margin-top:-20px; margin-left:5px;">
                <small>Use these nameservers for custom domains
                <br>
                ns1.zynact.top<br>
                ns2.zynact.top<br>
                ns3.zynact.top<br>
                ns4.zynact.top<br>
                ns5.zynact.top</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-black" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove text-white"></i>
              </button>
              <div class="text-muted text-center ml-auto mr-auto">
                <h3 class="mb-0">Account Not Activated</h3>
              </div>
            </div>
            <div class="modal-body">
              <div class="text-white text-muted text-center" style="margin-top:-20px; margin-left:5px;">
                <p>Your Account is not activated.<br><br>
                We have sent you another email.<br>Please click on the link in the email to activate your account<br>
                Then after reload this page.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
     <br><br><br>
     <center>
      <div class="col-md-6 div_acc_1">
       <br><br>
              <h4></h4>
              <nav class="navbar navbar-expand-lg bg-info">
                <div class="container">
                  <p class="navbar-brand" >Dashboard</p>
                </div>
              </nav>
      </div>
     </center>
      <br><span class="span_2">Your Control Panel accounts are listed below<span><br><br>
     <center>
      <div class="div_acc">
          <div class="table-responsive ps">
                      <table class="table tablesorter " id="plain-table">
                        <thead class=" text-primary">
                          <tr>
                            <th class="header">
                              Account label
                            </th>
                            <th class="header">
                              
                            </th>
                            <th class="header">
                              
                            </th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                          $sql = "SELECT * FROM cpanel_accounts WHERE email='$user'"; 
                          $result = mysqli_query($conn, $sql);
                          $row = mysqli_num_rows($result);
                          while ($row = $result->fetch_assoc()) {
                            $username=$row['username'];
                            $url=$row['url'];
                            $urlx=substr($url, 7);
                            $url=substr($url, 7);
                            $url=substr($url, 0, -11);
                            //url is account label
                            //urlx is the url without https://
                            $status=$row['status'];
                            require_once('lib/lib.php');
                            try {
                                  $panel = new Panel('developer.zynact@gmail.com', '0s9xfnw58qrt');
                                  $typeofsearch='domain';
                                  $users = $panel->findUsers($typeofsearch, $urlx);
                                  $account=$users[0];
                                  if($account!="" OR $account!='' OR $account!=NULL)
                                  {
                                    if($status==0)
                                    {
                                      if($status==0){$status="Not Activated";}
                                      if($status==1){$status="Active";}
                                      if($status==2){$status="Suspended";}
                                      if($status==3){$status="Terminated";}
                                      echo'<tr>
                                      <td>
                                        '.$url.'<br><small>Account '.$status.'</small>
                                      </td>
                                      <td>
                                      <input type="text" id="url'.$username.'" value="'.$urlx.'" hidden readonly>
                                      <input type="text" id="url'.$link.'" value="'.$urlx.'" hidden readonly>
                                      <a class="btn btn-warning" data-toggle="modal" data-target="#myModal3" id="'.$link.'" onclick="change_link(this.id)">Control Panel</a>
                                      </td>
                                      <td>
                                       <a class="btn btn-simple btn-breez btn_2 " data-toggle="modal" data-target="#myModal3" id="'.$username.'"  onclick="change_user(this.id)">Details</a>
                                      </td>
                                      </tr>';
                                    }
                                    elseif($status==1)
                                    {
                                      $client = new Client($panel, $username);
                                      $link = $client->connectLink();
                                      $link=str_replace("zynactech.ml","zynact.top",$link);
                                      echo'<tr>
                                      <td>
                                        '.$url.'<br><small>Account '.$client->status.'</small>
                                      </td>
                                      <td>
                                      <input type="text" id="url'.$username.'" value="'.$urlx.'" hidden readonly>
                                      <input type="text" id="url'.$link.'" value="'.$urlx.'" hidden readonly>
                                      <a class="btn btn-warning" data-toggle="modal" data-target="#myModal1" id="'.$link.'" onclick="change_link(this.id)">Control Panel</a>
                                      </td>
                                      <td>
                                       <a class="btn btn-simple btn-breez btn_2" data-toggle="modal" data-target="#myModal2" id="'.$username.'"  onclick="change_user(this.id)">Details</a>
                                      </td>
                                      </tr>';
                                    }
                                    else
                                    {
                                      //do nothing
                                    }
                                  }
                                } catch (Exception $e) { echo $e->getMessage(), "\n";}
                          }
                        ?>

                        </tbody>
                      </table>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                  </div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
              </div>
            </div>
          </div>
      </div>
     </center>
     <a class="btn-green btn_1" style="color:#ffffff;" href="http://zynact.top/cpanel_create.php">Create New Account</a>
        <br><br>
        <div class="btn_1">
        <span>You can create maximum 3 cpanel accounts.<br></span>
		<span>You need to create cpanel account to host your website, click the above button to create a new cpanel account.<br></span>
        <span>If your recently created cpanel account is not listed above please check your email for activation mail.</span>
        </div>
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="footer"  style="margin-bottom: -70px;">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h1 class="title"><img class="img_footer" src="https://sharonpraju.github.io/Zynact/assests/img/zynact_logo.png" style="width: 150px;"></h1>
              <a href="https://www.gogetssl.com" style="margin-left: 20px;"><img src="https://www.gogetssl.com/skin/i/ggssl-site-seal-v1-dark.png" /></a>
            </div>
            <div class="col-md-3">
              <ul class="nav">
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a href="terms.php" class="nav-link">
                    Terms and Conditions
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="nav">
                <li class="nav-item">
                  <a href="https://zynact.com/contact.html" class="nav-link">
                    Contact Us
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://hosting.zynact.com/" class="nav-link">
                    Free web hosting
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3 class="title div_2">Follow us:</h3>
              <div class="btn-wrapper profile">
                <a href="" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.facebook.com/zynact/" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a href="" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-dribbble"></i>
                </a>
              </div>
              <br>
              <b>Crafted With <i class="tim-icons icon-heart-2"></i> From Zynact</b>
            </div>
          </div>
        </div>
      </footer>
   </div>
   <!--   Core JS Files   -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/core/jquery.min.js" type="text/javascript"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/core/popper.min.js" type="text/javascript"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/core/bootstrap.min.js" type="text/javascript"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/perfect-scrollbar.jquery.min.js"></script>
   <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/bootstrap-switch.js"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/nouislider.min.js" type="text/javascript"></script>
   <!-- Chart JS -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/chartjs.min.js"></script>
   <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/moment.min.js"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
   <!-- Black Dashboard DEMO methods, don't include it in your project! -->
   
   <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>

   <script>
      function change_url(url){
        document.getElementById("input_url").value=url;
       }

      function change_url_1(url){
        document.getElementById("input_url_1").value=url;
       }
   </script>

 <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5e9ccb5469e9320caac54d95/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

</body>
 
 </html>

 <?php
 $conn->close();
 ?>
 




 <!--
=========================================================
* BLK Design System- v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/blk-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->