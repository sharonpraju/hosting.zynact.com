<?php
 session_start();
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
 
 <body class="landing-page">
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
            <a class="btn btn-simple btn-success" onclick="window.location.href ='index.php'">Free Web Hosting</a>
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
   <br><br><br><br>
   <style>
    @media (max-width:480px)  {
      .ad_container_wide{
        display: none;
      }
      .ad_container_short{
        display: block;
      }
    }
    
    @media (min-width:480px)  {
      .ad_container_wide{
        display: block;
      }
      .ad_container_short{
        display: none;
      }
    }
    
    </style>
    <div class="ad_container_wide">
        <center><script type="text/javascript">
            atOptions = {
                'key' : '4f2fd96ddeae8382fea17ca27cf5290e',
                'format' : 'iframe',
                'height' : 90,
                'width' : 728,
                'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.hiprofitnetworks.com/4f2fd96ddeae8382fea17ca27cf5290e/invoke.js"></scr' + 'ipt>');
        </script></center>
    </div>
    <br><br><br>
   <section class="section section-lg">
    <div class="container">
        <h1>Terms And Conditions</h1>
        <p><br><br>
        <h4>1. ACCEPTANCE OF TERMS</h4>
            Zynact welcomes you.<br>
            We provides our service to you subject to the following Terms and Conditions, 
            which may be updated by us from time to time without notice to you.
            In addition, when using particular Zynact owned or operated services, 
            you and Zynact shall be subject to any posted guidelines or rules applicable to such services, 
            which may be posted from time to time. All such guidelines or rules 
            (including but not limited to our Spam Policy) are hereby incorporated by reference into the TOS (Terms Of Service). 
            Zynact may also offer other services that are governed by different Terms and Conditions.
            <br><br><br><br>
            <h4>2. DESCRIPTION OF SERVICE</h4>
            Zynact provides users with access to a rich collection of resources, including various communications tools, forums, shopping services, search services, personalized content and branded programming through its network of properties which may be accessed through any various medium or device now known or hereafter developed (the "Service").
             You also understand and agree that the Service may include advertisements and that these advertisements are necessary for Zynact to provide the Service. 
             You also understand and agree that the Service may include certain communications from Zynact, such as service announcements, administrative messages and the Zynact Newsletter, and that these communications are considered part of Zynact membership and you will not be able to opt out of receiving them.
             You understand and agree that the Service is provided "AS-IS" and that Zynact assumes no responsibility for the timeliness, deletion, mis-delivery or failure to store any user communications or personalization settings. 
             You are responsible for obtaining access to the Service, and that access may involve third-party fees (such as Internet service provider or airtime charges).
             You are responsible for those fees, including those fees associated with the display or delivery of advertisements.
             In addition, you must provide and are responsible for all equipment necessary to access the Service.
             <br><br><br><br>
             <h4>3. MEMBER ACCOUNT, PASSWORD AND SECURITY</h4>
             You will receive a password and account designation upon completing the Service's registration process. You are responsible for maintaining the confidentiality of the password and account and are fully responsible for all activities that occur under your password or account. You agree to
             <br>(a) immediately notify Zynact of any unauthorized use of your password or account or any other breach of security, and
             <br>(b)  ensure that you exit from your account at the end of each session. Zynact cannot and will not be liable for any loss or damage arising from your failure to comply with this Section 5.
             <br><br><br><br>
             <h4>4. MEMBER CONDUCT</h4>
             You understand that all information, data, text, software, music, sound, photographs, graphics, video, messages, tags, 
             or other materials ("Content"), whether publicly posted or privately transmitted, are the sole responsibility 
             of the person from whom such Content originated. This means that you, and not Zynact, are entirely responsible for 
             all Content that you upload, post, email, transmit or otherwise make available via the Service. Zynact does not control 
             the Content posted via the Service and, as such, does not guarantee the accuracy, integrity or quality of such Content. 
             You understand that by using the Service, you may be exposed to Content that is offensive, pornographic, indecent or 
             objectionable. Under no circumstances will Zynact be liable in any way for any Content, including, but not limited to, 
             any errors or omissions in any Content, or any loss or damage of any kind incurred as a result of the use of any Content 
             posted, emailed, transmitted or otherwise made available via the Service.
             <br><br><br><br>
             <p><b>Please note that :</b></p>
             <p>Do not create sub domains with the extension '.zynact.com'. Any user violating this will be suspended.<br><br>You can create unlimited sub domain with any other extension available on the Control Panel.
             <br>When you create an account we will give you a sub domain with extention '.zynact.com', this sub domain is not applicable to this condition.<br>This condition is only applicable to extra subdomains you create in the Control Panel (CPanel).</p>
             <br><br>
             <h5>Zynact hereby states that Zynact will not be responsible for anything that you do or use, which are related to our services
                and Zynact will not be responsible for any kind of issues or problems or damages or loss caused to you by using any of our products or services.
                <br>We will not be responsible for any legal actions that is take because of you or anything that you do with our products or services.
                <br><br>
                By using our hosting service you are required to agree with our Terms and Conditions.
                <br><br>
                By using our hosting service you are also required to agree with our partners TOS, they can be found here <a href="http://byethost.com/legal.php">Partner Terms</a>
            </h5>
        </p>
    </div>
  </section>
     <br><br>
     <?php include 'ad.html'; ?>
     <br><br>
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
                  <a href="https://zynact.com/index.html" class="nav-link">
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
     $(document).ready(function() {
       // Javascript method's body can be found in https://sharonpraju.github.io/Zynact/assests/assets-for-demo/js/demo.js
       demo.initLandingPageChart();
     });

     function scrollToPlans() {

    if ($('#plans').length != 0) {
    $("html, body").animate({
      scrollTop: $('#plans').offset().top
    }, 1000);
    }
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
 