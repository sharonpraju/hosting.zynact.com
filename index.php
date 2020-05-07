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
   <style>
     .span_div{
        margin-top:-200px;
      }
     @media (max-width:480px)  {
      .span_div{
        margin-top:10px;
      }
     }
   </style>
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
     <div class="page-header">
       <img src="https://sharonpraju.github.io/Zynact/assests/img/blob.png" class="path">
       <img src="https://sharonpraju.github.io/Zynact/assests/img/path2.png" class="path2">
       <img src="https://sharonpraju.github.io/Zynact/assests/img/triunghiuri.png" class="shapes triangle">
       <img src="https://sharonpraju.github.io/Zynact/assests/img/waves.png" class="shapes wave">
       <img src="https://sharonpraju.github.io/Zynact/assests/img/patrat.png" class="shapes squares">
       <img src="https://sharonpraju.github.io/Zynact/assests/img/cercuri.png" class="shapes circle">
       <div class="content-center">
         <div class="row row-grid justify-content-between align-items-center text-left">
           <div class="col-lg-6 col-md-6">
             <h1 class="text-white">Free Unlimited
               <br/>
               <span class="text-white">Web Hosting</span>
             </h1>
             <p class="text-white mb-3 txt_1">"What's the best price when its free...."<br></p>
             <p class="text-white mb-3">"We believe that everyone should have their space in this digital world. So we are providing premium Web Hosting facilities completely for free."<br></p>
             <div class="btn-wrapper mb-3">
                <button class="btn btn-info" onclick="window.location.href ='register.php'">Sign Up Now</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-link btn-success" onclick="scrollToPlans()">View Plans</button>
             </div>
             <div class="btn-wrapper">
               <div class="button-container">
               </div>
             </div>
           </div>
           <div class="col-lg-4 col-md-5">
             <img src="https://sharonpraju.github.io/Zynact/assests/img/hosting_main.png" alt="Circle image" class="img-fluid">
           </div>
         </div>
       </div>
     </div>
     <section class="section section-lg section-coins">
       <img src="https://sharonpraju.github.io/Zynact/assests/img/path3.png" class="path">
       <div class="container span_div" id="plans">
         <div class="row">
           <div class="col-md-4">
             <hr class="line-info">
             <h1>Choose the plan
               <span class="text-info">that fits your needs</span>
             </h1>
           </div>
         </div>
         <div class="row div_cntr">
           <div class="col-md-4">
             <div class="card card-coin card-plain">
               <div class="card-header">
                 <img src="https://sharonpraju.github.io/Zynact/assests/img/etherum.png" class="img-center img-fluid">
               </div>
               <div class="card-body">
                 <div class="row">
                   <div class="col-md-12 text-center">
                     <h4 class="text-uppercase">Free unlimited Hosting</h4>
                     <span>Plan</span>
                     <hr class="line-success">
                   </div>
                 </div>
                 <div class="row">
                   <div class="table-responsive">
                    <table class="table tablesorter " id="plain-table">
                      <tbody>
                        <tr>
                          <td>
                            Monthly Bandwidth
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Web Disk Space
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Addon Domains
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Sub-Domains
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            MySQL Databases
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Free Website Builder
                          </td>
                          <td>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            SEO Tools, Softaculous
                          </td>
                          <td>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Ads On Control Panel<br>(Not in your website)
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td>
                            &nbsp;
                          </td>
                          <td>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            &nbsp;
                          </td>
                          <td>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Price (Lifetime Validity)
                          </td>
                          <td>
                            $0.00
                          </td>
                        </tr>
                        <tr>
                          <td>
                          </td>
                          <td>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                 </div>
               </div> <br>
               <div class="card-footer text-center" style="margin-top: -70px;">
                 <a class="btn btn-success btn-simple" href="register.php?plan=free">Sign Up</a>
               </div>
             </div>
           </div>
           <div class="col-md-4 div_3">
             <div class="card card-coin card-plain">
               <div class="card-header">
                 <img src="https://sharonpraju.github.io/Zynact/assests/img/ripp.png" class="img-center img-fluid">
               </div>
               <div class="card-body">
                 <div class="row">
                   <div class="col-md-12 text-center">
                     <h4 class="text-uppercase">Premium Web Hosting</h4>
                     <span>Plan</span>
                     <hr class="line-info">
                   </div>
                 </div>
                 <div class="row">
                  <div class="table-responsive">
                    <table class="table tablesorter " id="plain-table">
                      <tbody>
                        <tr>
                          <td>
                            Monthly Bandwidth
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Web Disk Space
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Addon Domains
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Sub-Domains
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            MySQL Databases
                          </td>
                          <td>
                            Unlimited
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Free Website Builder
                          </td>
                          <td>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            SEO Tools, Softaculous
                          </td>
                          <td>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            No Ads On Control Panel
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Fast Customer Support
                          </td>
                          <td>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            &nbsp;
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Price
                          </td>
                          <td>
                            $5.00/Year
                          </td>
                        </tr>
                        <tr>
                          <td>
                          </td>
                          <td>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                 </div>
               </div>
               <div class="card-footer text-center" style="margin-top: -50px;">
               <a class="btn btn-success btn-simple" href="register.php?plan=pro">Sign Up</a>
               </div>
             </div>
           </div>
         </div>
         <br><br><br><br><br><br>
         <center>
           <div class="col-md-4 div_3">
             <div class="card card-coin card-plain">
               <div class="card-header">
                 <img src="https://sharonpraju.github.io/Zynact/assests/img/bitcoin.png" class="img-center img-fluid">
               </div>
               <div class="card-body">
                 <div class="row">
                   <div class="col-md-12 text-center">
                     <h4 class="text-uppercase">Ultra Premium Web Hosting</h4>
                     <span>Plan</span>
                     <hr class="line-info">
                   </div>
                 </div>
                 <div class="row">
                   <br><br><br><br>
                 </div>
               </div>
               <div class="card-footer text-center" style="margin-top: -50px;">
               <a class="btn btn-success btn-simple" href="https://ifastnet.com/portal/sharedhosting.php">Learn More</a>
               </div>
             </div>
           </div>
        </center>
       </div>
       
     </section>
     <div style="margin-left: 5%; margin-right: 5%;">
      <h4>Whys us?</h4>
       <p>We use a powerful cluster of web servers that are all interconnected
          to act as one giant super computer. 
          This technology is years ahead of most other hosting companies. 
          Combining the power of many servers creates lightning fast website speed. 
          Not only is the service extremely fast, it is resistant to failures that 
          effect 'single server' hosting, used by most other free and paid hosting providers. 
          If one of our clustered servers were to fail or have a problem, your website will 
          continue to run normally using the working servers!</p>
     </div>
     <br><br><br><br>
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