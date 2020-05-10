<?php
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
   
  $id = md5(rand(6000,PHP_INT_MAX));
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
   <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165588900-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-165588900-1');
  </script>
 </head>
 
 <body class="register-page">
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
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
            <a class="btn btn-link text-white" href="https://zynact.com/contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link" onclick="window.location.href ='support.php'">Support</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link" onclick="window.location.href ='faq.php'">FAQ</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="btn btn-simple btn-success" href="javascript:void(0)" onclick="window.location.href ='dashboard.php'">
              <i class="tim-icons icon-spaceship"></i> Dashboard&nbsp;&nbsp;
            </a>
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
     <div class="section section-signup">
        <div class="container">
          <div class="row row-grid justify-content-between align-items-center">
            <div class="col-lg-6 div_4">
              <h3 class="display-3 text-white">
                <span class="text-white"></span>
              </h3>
              <p class="text-white mb-3">Please Note That : </p>
				There will be total 2 email send to you<br>
				The first one contains verification link<br>and the second one will contain activation link and cpanel account credentials.<br><br><br>
                  <h4>If you haven't seen the email on your inbox please check your SPAM folder also.</h4>
            </div>
            <div class="col-lg-6 mb-lg-auto">
              <div class="card card-register">
              <h4 class="card-title"></h4>
                <div class="card-body">
                  <form class="form" action="http://zynact.top/cpanel_create.php" method="post" target="_blank">
                  &nbsp;Account Label<br>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" id="username" name="username" placeholder="&nbsp; Eg &nbsp;:&nbsp; mywebsite" required autocomplete="off">
                    </div>(This is the first part the temporary sub domain. You can add a custom domain on cpanel later)
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-book-bookmark"></i>
                        </div>
                      </div>
                      <select class="form-control" size="1" name="website_category" required>
                        <option class="dropdown-item" value="" disabled selected>Website Category</option>
				        <option class="dropdown-item" value="Personal">Personal</option>
				        <option class="dropdown-item" value="Business">Business</option>
				        <option class="dropdown-item" value="Hobby">Hobby</option>
				        <option class="dropdown-item" value="Forum">Forum</option>
				        <option class="dropdown-item" value="Adult">Adult</option>
				        <option class="dropdown-item" value="Dating">Dating</option>
				        <option class="dropdown-item" value="Software">Software / Download</option>
				      </select>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-caps-small"></i>
                        </div>
                      </div>
                      <select class="form-control" size="1" name="website_language" required>
                        <option class="dropdown-item" value="" disabled selected>Website Language</option>
				        <option class="dropdown-item" value="English">English</option>
				        <option class="dropdown-item" value="Non-English">Non-English</option>
				      </select>
                    </div>
                    <input type=hidden name="id" value="<?PHP echo $id; ?>">
                    <div><img width="250px" height="90px" src="http://order.zynact.top/image.php?id=<?PHP echo $id; ?>" alt="security_code">&nbsp; &nbsp; &nbsp; &nbsp;<small>Reload the page to reset the code</div>
                    <br>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="number" placeholder="Enter The Code Shown Above" required autocomplete="off">
                      <input type="hidden" class="form-control" name="zynact_1x" value="<?php echo $_SESSION['user']?>" required>
                      <input type="hidden" class="form-control" name="zynact_2x" value="<?php echo $_SESSION['pass']?>" required>
                    </div>
                    <div class="form-check text-left">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" required>
                        <span class="form-check-sign"></span>
                        I agree to the
                        <a href="terms.php">terms and conditions</a>.
                      </label>
                    </div><br>
                    &nbsp;&nbsp;<input type="submit" class="btn btn-info btn-round btn-lg" value="Create Account">
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
     </div>
     <br><br><br><br><br><br><br><br>
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
                    Terms and Condition
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
                  <a href="index.php" class="nav-link">
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
   <script>
     $("#username").keypress(function(e) {
      	$("#error_sp_msg").remove();
      	var k = e.keyCode,
      			$return = ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32  || (k >= 48 && k <= 57));
            if(!$return) {
            	$("<span/>",{
              	"id" : "error_sp_msg",
                "html" 	: " &nbsp; Special characters not allowed"
              }).insertAfter($(this));
            	return false;
            }

      })
   </script>
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

