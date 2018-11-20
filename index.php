<!-- HOMEPAGE -->

<?php
// Start the session
session_start();
?>

<?php
  $domain='vacplus.com';
  $host  = $_SERVER['HTTP_HOST'];
  $uri = $_SERVER['PHP_SELF'];
  function domainCheck($host, $uri, $domain){
    $dir_name = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    if($host==$domain){
      $formattedUrl=$domain.$uri;
      Header( "HTTP/1.1 301 Moved Permanently" );
      Header( "Location: http://www.$formattedUrl" );
      exit; 
    }
  }
  domainCheck($host, $uri, $domain);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<meta name="generator" content="ShopSite Pro 12 sp3 r4 (data - -VP-homepage)">

    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Vacuums, steam cleaners, steam irons, presses, fans, heaters & air purifiers - Vacplus.com</title>
              <meta name="Keywords" content="Vacuum, Vacuums, Vacuum Cleaner, vacuums for Sale, air purifiers, heaters, fans, steam iron, iron, press, steam press, clothing press, steam cleaner, steam clean, dyson, riccar, miele, bosch, cirrus, clover, fuller, bank, eureka, maytag, oreck, reliable, ricoma, sienna, simplicity, singer, sunheat" />
              <meta name="Description" content="With a huge selection of high quality products and supplies, Vacplus.com is the place for all your home and business cleaning needs. Shop here today!" />
              <!-- Base MasterSlider style sheet -->
<link rel="stylesheet" href="/AE/masterslider/style/masterslider.css" />
 
<!-- Master Slider Skin -->
<link href="/AE/masterslider/skins/default/style.css" rel='stylesheet' type='text/css'>
  
<!-- Home slider style -->
<!--<link rel="stylesheet" href="/AE/masterslider/style/style.css">-->
 
<!-- jQuery -->
<script src="/AE/masterslider/jquery.min.js"></script>
<script src="/AE/masterslider/jquery.easing.min.js"></script>
 
<!-- Master Slider -->
<script src="/AE/masterslider/masterslider.min.js"></script>

<script language="JavaScript" src="/ad_homepage/rollover.js" type="text/javascript"></script>

<style type="text/css">
  #longarmsale {
    display:none;
  }
</style>        <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:400,100,300,700,900,900italic,700italic,400italic|Open+Sans" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/AE/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--plugins-->
    <link href="/AE/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/AE/custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="/AE/css/yamm.css" rel="stylesheet">
    <link href="/AE/css/navigation.css" rel="stylesheet">
    <!--sky form pro css-->
    <link href="/AE/sky-form/css/sky-forms.css" rel="stylesheet">           
    <!--custom css file-->
    <link href="/AE/css/vp-fonts.css" rel="stylesheet">
    <link href="/AE/css/style.css" rel="stylesheet">
    <link href="/AE/css/moreInfo.styles.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="googlebot" content="index,follow">
    <meta name="robots" content="index,follow"> 
    <meta name="rating" content="General" />
    <meta property="og:site_name" content="vacplus.com"/>
    <meta property="og:image" content="https://www.vacplus.com/media/facebook/thread2.gif"/>
    <meta property="og:title" content="Vacuums, steam cleaners, steam irons, presses, fans, heaters & air purifiers - Vacplus.com" />
    <meta property="og:description" content="With a huge selection of high quality products and supplies, Vacplus.com is the place for all your home and business cleaning needs. Shop here today!" />
    <meta property="og:type" content="website" />
    <meta itemprop="name" content="Vacuums, steam cleaners, steam irons, presses, fans, heaters & air purifiers - Vacplus.com">
    <meta itemprop="description" content="With a huge selection of high quality products and supplies, Vacplus.com is the place for all your home and business cleaning needs. Shop here today!">
    <meta itemprop="image" content="https://www.vacplus.com/media/facebook/thread2.gif">
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="Vacuums, steam cleaners, steam irons, presses, fans, heaters & air purifiers - Vacplus.com">
    <meta name="twitter:description" content="With a huge selection of high quality products and supplies, Vacplus.com is the place for all your home and business cleaning needs. Shop here today!">
    <meta name="twitter:image" content="https://www.vacplus.com/media/facebook/thread2.gif">

    <!--AJAX CART Begin-->
    <!-- BEGIN MODULE HEAD -->





<link type="text/css" rel="stylesheet" href="https://www.vacplus.com/media/en-US/css/jquery.loadmask.css">
<link type="text/css" rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/blitzer/jquery-ui.css">

<style type="text/css">
.loadmask {background-color:#CCCCCC;}
.loadmask-msg div {background-color:#FBFBFB;color:#222222;}
</style>
<style type="text/css">
        #minicart{
                text-align: left;
                position: static;
                border:1px solid;
                border-color: #751113;

        }
        
        .ui-dialog{
			z-index: 9999 !important;
		}
		
</style>
<!-- END MODULE HEAD -->


    <!--AJAX CART End-->
    
    <link href="/AE/css/smp-nav.css" rel="stylesheet">
  <script type="text/javascript" src="https://www.vacplus.com/media/en-US/javascript/jquery/jquery.js"></script>
  <script type="text/javascript">
    var ss_jQuery = jQuery.noConflict(true);
</script>

  <script type="text/javascript" src="https://www.vacplus.com/media/en-US/javascript/jquery/json2.min.js"> </script>
</head>
  <body id="moreInfo">
    <script>
      var shoppingCartURL="https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&amp;function=show";
    </script>
    <style>
      .well2,
      .well {
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        display:none;
        margin:1em;
        max-height:80%;
        overflow-y:scroll;
        max-width:600px !important;
        padding:19px;
      }  
      #geopopup,
      #callouts-pop{
        transform: scale(0.8);
      }
      .popup_visible #geopopup,
      #callouts-pop{
        transform: scale(1);
      }
    </style>
    <div class="site-wrap">
      <!--header start-->
      <header class="header">

        <!--navigation styles-->
<link rel="stylesheet" type="text/css" href="/AE/css/moreInfo.styles.css">
<link rel="stylesheet" type="text/css" href="/AE/css/vp-custom.css">
<link rel="stylesheet" type="text/css" href="/AE/css/vp-flex-nav.css">
<!--new icomoon files-->
<link href="/AE/css/vp-fonts.css" rel="stylesheet">

<!--webdr modal-->
<script language="javascript" type="text/javascript">
  function searchvalue(param){
    var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('?'); 

    for (var i = 0; i < url.length; i++) {  
      var urlparam = url[i].split('=');  
      if (urlparam[0] == param) { 
        return urlparam[1];
        //alert(urlparam[1]);  
      }
    }  
  }
  //var data1 = searchvalue('data');
  //alert( searchvalue('data') );

  //alert(data1);
  $(document).ready(function () {
    var data1 = searchvalue('data');
    //alert( searchvalue('data') );
    //alert(data1);
  
    if(data1 == 'BadLogin'){
      $('#mySignIn').modal('show');
      $( ".cr_warning" ).append(data1 );
      $(".cr_warning").css({"color": "red", "font-size": "200%"});
    }else{
    }
  });
</script>
<style>
  .modal-backdrop{
    display:none;
  }
  div.email_pw {
    margin-bottom: 10px;
    text-align: center;
  }
  div.modal-body {
    text-align: left;
    padding: 15px;
    margin: 0 auto;
  }
  span.pw, span#E_text1 {
    margin: 0 5px 0 0;
  }
  span.email_pw_note {
    display: none;
  }
</style>
<!--end webdr modal-->
<!--webdr modal-->
<center class="clogin">
  <div class="modal fade" id="mySignIn" tabindex="-1" role="dialog" aria-labelledby="mySignInForm" style="z-index: 9999;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">�</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Sign In</h4>
        </div>
        <div class="cr_warning"></div>
        <form id="sign-in-form" name="cr" class="cr" action="https://www.vacplus.com/cgi-vacplus/sb/registration.cgi" method="post">
          <div class="modal-body">
            <input type="hidden" name="storeid" value="*121deeb48a92086890509d">
            <div class="center"></div>
            <div id="sign-in-form-div">
              <div id="sign-in-form-div">
                <div class="email_pw">
                  <span class="pw" id="E_email1">Enter E-mail Address:</span>
                  <input tabindex="2" class="email_pw" type="text" name="email1" value="" data-emailcapturepoint="Registration and Login Pages" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                  <span class="email_pw_note">� <a href="https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&amp;html_reg=html&amp;func=5">I forgot my password</a></span>
                </div>
                <div class="email_pw">
                  <span id="E_text1">Enter Password:</span>
                  <input tabindex="3" class="email_pw" type="password" name="text1" value="" data-emailcapturepoint="Registration and Login Pages" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                  <span class="email_pw_note">� <a href="https://www.vacplus.com/cgi-vacplus/sb/order.cgi?html_reg=html&amp;storeid=*121deeb48a92086890509d&amp;func=1">I'm a new customer, I need to register</a></span>
                </div>
              </div>
            </div>
            <div style="width:100%; position:relative; text-align:center; margin-top:15px;">
              <input type="submit" name="function" class="signinpop"  style="width:120px; background-color:#148eff; color:#fff; border:0; border-radius:3px; padding:10px;" value="Sign In">
            </div>
          </div>
          <div class="modal-footer">
            <a  class="cart-txt-link" style="color:#148eff; font-size:14px; float:left;" href="https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&html_reg=html&func=5" title="I forgot my passowrd">I forgot my passowrd</a>
            <a  class="cart-txt-link" style="color:#148eff; font-size:14px;" href="https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&html_reg=html&func=1" title="I'm a new customer, I need to register">I'm a new customer, I need to register</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</center>
<!--end webdr modal-->
<!--top bar callouts-->
<style>
  .tippityTopbar{padding:5px; text-align:center;}
</style>

<!--template start here-->
<div class="tippityTopbar">
  <span id="moreInfo" class="midhead desktop" style="margin:0; font-family:'Open Sans', sans-serif;">
    <span class="icon-truck head-icon"></span> <span class="topbar-number">FREE</span> <span class="shiptext">Shipping over $49</span>
    <!-- Call Toll Free: <a href="tel:800-401-8151" class="topbar-number desktop" rel="nofollow">800-401-8151</a> <span class="icon-credit-card head-icon"></span> Pay NO Sales Tax* | <span class="icon-calendar head-icon"></span> <span class="topbar-number">60 Day</span> Money Back | <span class="icon-coin-dollar head-icon"></span> <span class="topbar-number">0%</span> Financing | <span class="icon-phone head-icon"></span> Tech Support -->
  </span>
</div>
<div id="primary-section" class="topHead">
  <div class="topLogo">
    <a href="/">
      <div class="logoFLEX">
        <svg id="vacplus-logo" data-name="vacplus-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1036.59 316.12">
          <defs>
            <style>
              .cls-1 {
                fill: white;
              } /*@media screen and (max-width: 784px) {
                .cls-1 {fill: #494949;}
              }*/
              .cls-2 {
                fill: #148fff;
              }
            </style>
          </defs>
          <title>VacPlus.com</title>
          <polygon class="cls-1" points="146.35 154.31 129.64 108.03 104.1 108.03 140.78 191.39 141.55 191.39 196.3 108.03 172.29 108.03 146.35 154.31" />
          <path class="cls-1" d="M273.9,119.36q-8.64-15-29-15a42.39,42.39,0,0,0-23.82,6.81,46.7,46.7,0,0,0-16,17.67,48.16,48.16,0,0,0-5.67,22.58,44.55,44.55,0,0,0,4.8,21A34.55,34.55,0,0,0,217,186.39a30.79,30.79,0,0,0,16.8,4.62q11.34.18,19.69-4a48.94,48.94,0,0,0,13.35-9.41l-1.34,11.71H287l9.8-81.24H277ZM269.29,157a28.59,28.59,0,0,1-9.8,12.29,23.63,23.63,0,0,1-13.83,4.42q-10.75,0-17.38-6.82t-6.63-18a29,29,0,0,1,2.88-12.2,25.91,25.91,0,0,1,8.94-10.47q6-4.22,15.27-4.22a24.34,24.34,0,0,1,15.07,4.7,19.24,19.24,0,0,1,7.6,12.59Z" />
          <path class="cls-1" d="M360.91,174.1q-10.95,0-17.76-6.72a22.29,22.29,0,0,1-6.83-16.52,27.39,27.39,0,0,1,3.46-13.64,26.32,26.32,0,0,1,9.23-9.7A23,23,0,0,1,361.3,124a27.55,27.55,0,0,1,11.43,2.31,31,31,0,0,1,8.54,5.57l12.3-13.25q-12.68-12.3-33.62-12.3-14,0-24.3,6.73A44.59,44.59,0,0,0,320,130.3a48.06,48.06,0,0,0-5.38,22.1q0,14,6.92,22.85a38.38,38.38,0,0,0,16.71,12.58,52.55,52.55,0,0,0,18.82,3.75,56.45,56.45,0,0,0,14.79-2,44.59,44.59,0,0,0,13.06-5.67l-9.21-14.21A27,27,0,0,1,360.91,174.1Z" />
          <path class="cls-2" d="M750.48,203.64l87.91,17.41c-34.69,12.48-123.45,34.68-321.28,35.28C132,258.5,73,181.16,61.88,152.07c-14.15-37,93.83-86.15,93.83-86.15s-142,55.61-112.77,109.69c31.9,59,166.49,101.92,459,101,241-.72,319.58-36.23,344.57-54l106.27,21V228.75L750.48,189Z" />
          <polygon class="cls-2" points="956.43 228.75 956.43 243.7 997.62 203.34 997.62 188.09 956.43 228.75" />
          <path class="cls-2" d="M922.51,174.05s-26.08,6.26-31.13,23.31c-5.23-1.19-61-13.76-64.38-14.65,4-17.35,16.33-22,16.33-22l-29.48-4.95-32.56,7.77s-30.81,9.27-30.81,22.13l202.25,38.57L993.58,186Z" />
          <path class="cls-2" d="M835.08,179.12l51.24,10.76a37.34,37.34,0,0,1,35.39-19.73,57.93,57.93,0,0,1,15.51,2.09s-1-22.13-3.37-23.62-50.56-8.07-50.56-8.07S835.42,161.18,835.08,179.12Z" />
          <polygon class="cls-2" points="964.86 62.21 937.22 56.23 897.44 136.96 896.44 138.3 928.46 143.24 964.86 62.21" />
          <path class="cls-2" d="M428.52,181.78a31.25,31.25,0,0,0,11.24,7,38.32,38.32,0,0,0,13.73,2.6q15,0,26.41-6.82a47.88,47.88,0,0,0,17.77-18.35,50.91,50.91,0,0,0,6.34-25,37,37,0,0,0-5-19.3,34.57,34.57,0,0,0-13.64-13,39.74,39.74,0,0,0-19-4.61q-14,0-30.73,11.52l.19-9.41H417.19L402,228.27h21.32Zm5-43A32.12,32.12,0,0,1,444.08,126a25.38,25.38,0,0,1,14.79-4.52A23,23,0,0,1,475.2,128a21.75,21.75,0,0,1,6.91,16.52,28.77,28.77,0,0,1-3.65,14.12,28.05,28.05,0,0,1-10.37,10.66,28.91,28.91,0,0,1-15.18,4q-9,0-14.31-5.09a26,26,0,0,1-7.2-12.58Z" />
          <polygon class="cls-2" points="561.25 39.45 539.73 39.45 521.49 189.28 543 189.28 561.25 39.45" />
          <path class="cls-2" d="M598.32,192.73a40.3,40.3,0,0,0,19.21-4.7,39.28,39.28,0,0,0,14.22-12.58l-.39,13.82h19.4L660.94,108H639.23l-4.41,35.91q-1.35,13.06-8.74,21.71t-17,8.64q-6.35-.18-9.12-3.74t-2.41-9.7L604.09,108H582.57l-7.29,60.5a15.57,15.57,0,0,0-.2,2.88q0,9.61,6.43,15.46T598.32,192.73Z" />
          <path class="cls-2" d="M707.24,175.83a29.36,29.36,0,0,1-11-2.21q-5.48-2.2-11.24-9.12L674.39,176A32.89,32.89,0,0,0,690,187.74a52.48,52.48,0,0,0,17.2,3.27q11.13,0,18.63-4.14A27.85,27.85,0,0,0,737,176.31a27.1,27.1,0,0,0,3.65-13.54q0-8.07-4.52-13.06t-13-8.84a35.28,35.28,0,0,0-4-1.53,50.55,50.55,0,0,1-9.79-4.71,7.39,7.39,0,0,1-3.46-6,8.1,8.1,0,0,1,2.88-6.24c1.92-1.74,4.74-2.6,8.45-2.6a23.17,23.17,0,0,1,9.41,2,24.92,24.92,0,0,1,8.45,6.24l9.8-12.49Q733.36,105,714.15,105q-10.77,0-17.58,4.32a25.11,25.11,0,0,0-9.69,10.47A27.89,27.89,0,0,0,684,131.65q0,15.56,17.86,22.67,7.11,2.69,9.71,3.74a16.38,16.38,0,0,1,4.89,3.17,7,7,0,0,1,2.31,5.38A9,9,0,0,1,716,173C714.12,174.87,711.2,175.83,707.24,175.83Z" />
          <path class="cls-1" d="M636.61,221.26a3.74,3.74,0,0,1,2.58-1.09,2.58,2.58,0,0,1,1.93.9,3,3,0,0,1,.84,2.14,3.31,3.31,0,0,1-1.14,2.56,3.59,3.59,0,0,1-2.45,1,2.89,2.89,0,0,1-2.06-.82,2.75,2.75,0,0,1-.87-2.11A3.44,3.44,0,0,1,636.61,221.26Z" />
          <path class="cls-1" d="M661.08,226.88a15.64,15.64,0,0,1-4.18.57,15.06,15.06,0,0,1-5.33-1,11,11,0,0,1-4.72-3.56,10.16,10.16,0,0,1-2-6.47,13.62,13.62,0,0,1,1.52-6.24,12.53,12.53,0,0,1,4.43-4.89,12.26,12.26,0,0,1,6.87-1.9,13.11,13.11,0,0,1,9.51,3.47l-3.48,3.75a8.72,8.72,0,0,0-2.42-1.57,7.64,7.64,0,0,0-3.23-.66,6.48,6.48,0,0,0-3.47,1,7.39,7.39,0,0,0-2.61,2.74,7.67,7.67,0,0,0-1,3.86,6.29,6.29,0,0,0,1.93,4.67,6.83,6.83,0,0,0,5,1.9,7.63,7.63,0,0,0,4.18-1.25l2.61,4A12.67,12.67,0,0,1,661.08,226.88Z" />
          <path class="cls-1" d="M677,226.12a11.42,11.42,0,0,1-4.7-3.85,10.43,10.43,0,0,1-1.85-6.22,14.71,14.71,0,0,1,1.39-6.17,12.08,12.08,0,0,1,4.4-5,13.47,13.47,0,0,1,7.63-2,13.66,13.66,0,0,1,6,1.36,11.21,11.21,0,0,1,4.56,3.93,10.58,10.58,0,0,1,1.74,6.06,15.17,15.17,0,0,1-1.27,5.87,12.27,12.27,0,0,1-4.27,5.18,13.11,13.11,0,0,1-7.82,2.15A14.18,14.18,0,0,1,677,226.12Zm10-5a7.32,7.32,0,0,0,2.31-3,9.5,9.5,0,0,0,.73-3.64,6.67,6.67,0,0,0-1-3.85,5.69,5.69,0,0,0-2.47-2.12,6.91,6.91,0,0,0-2.88-.65,6.29,6.29,0,0,0-4,1.21,7.46,7.46,0,0,0-2.34,3.05,9.34,9.34,0,0,0-.76,3.66,6.1,6.1,0,0,0,2,4.95,6.79,6.79,0,0,0,4.45,1.63A6.3,6.3,0,0,0,687,221.13Z" />
          <path class="cls-1" d="M738.89,204.42a5.7,5.7,0,0,1,1.77,4.4,5.06,5.06,0,0,1-.06.87l-2.06,17.11h-6.09L734.3,212a5.27,5.27,0,0,0-.46-2.86,2.52,2.52,0,0,0-2.2-1.11,6.15,6.15,0,0,0-4.89,2.53,11.39,11.39,0,0,0-2.5,5.89L723,226.8h-6.08L718.66,212l.05-.82c0-2-.92-3-2.77-3.15a6.09,6.09,0,0,0-4.83,2.53,11.39,11.39,0,0,0-2.5,5.89l-1.25,10.32h-6.08l2.77-23h5.48l0,4a12.07,12.07,0,0,1,4-3.7,10.85,10.85,0,0,1,5.29-1.3,7.55,7.55,0,0,1,4.46,1.2,4.75,4.75,0,0,1,2,3.53,14.11,14.11,0,0,1,4.1-3.45,9.64,9.64,0,0,1,4.7-1.28A6.93,6.93,0,0,1,738.89,204.42Z" />
        </svg>
      </div>
    </a>
  </div>

  <div class="topLogo-mobile">
    <a href="/">
      <div class="logoSquare">
        <svg id="vacplus-logo-square" data-name="vacplus-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 393.66 393.66">
          <defs>
            <style>
              .cls-1 {
                fill: #fff;
              }

              .cls-2 {
                fill: #148fff;
              }
            </style>
          </defs>
          <title>VacPlus.com</title>
          <polygon class="cls-1" points="69.18 100.32 45.04 33.44 8.13 33.44 61.14 153.88 62.24 153.88 141.34 33.44 106.65 33.44 69.18 100.32"
          />
          <polygon class="cls-2" points="63.69 310.46 327.07 363.24 327.07 343.55 63.69 291.16 63.69 310.46" />
          <polygon class="cls-2" points="331.89 343.55 331.89 363.24 385.53 310.07 385.53 289.98 331.89 343.55" />
          <path class="cls-2" d="M287.72,271.49s-34,8.25-40.55,30.7c-6.8-1.57-79.45-18.12-83.84-19.3C168.6,260,184.61,254,184.61,254l-38.4-6.52-42.39,10.24s-40.13,12.21-40.13,29.15l263.38,50.81,53.19-50.42Z"
          />
          <path class="cls-2" d="M236.64,227.35s-62.33,27.18-62.77,50.81l66.72,14.18s12.73-27.57,46.09-26a74.72,74.72,0,0,1,20.19,2.75S305.56,240,302.48,238,236.64,227.35,236.64,227.35Z"
          />
          <polygon class="cls-2" points="253.77 224.39 295.46 230.9 342.87 124.15 306.87 116.27 255.08 222.62 253.77 224.39" />
          <path class="cls-2" d="M172.7,142.25a45.31,45.31,0,0,0,16.23,10.13,55.45,55.45,0,0,0,19.85,3.75q21.66,0,38.16-9.85a69.22,69.22,0,0,0,25.67-26.51,73.55,73.55,0,0,0,9.16-36.07q0-15.83-7.22-27.89a49.82,49.82,0,0,0-19.7-18.74,57.49,57.49,0,0,0-27.48-6.65q-20.25,0-44.4,16.64l.28-13.59H156.33l-21.92,176h30.8Zm7.22-62.16q5.82-11.93,15.26-18.45a36.7,36.7,0,0,1,21.37-6.53,33.21,33.21,0,0,1,23.59,9.44q10,9.44,10,23.86a41.75,41.75,0,0,1-5.27,20.41,40.63,40.63,0,0,1-15,15.4A41.82,41.82,0,0,1,208,130q-13,0-20.68-7.35a37.64,37.64,0,0,1-10.41-18.18Z"
          />
        </svg>
      </div>
    </a>
  </div>

  <div class="topSearch">
    <div id="searchbar-desk-target" class="icon-search icon-searchFLEX"></div>
  </div>
  <div class="topCall headNumber">
    <span class="headphone icon-phone"></span>
    <h3>Call Toll Free: </h3>
    <h2><a href="tel:800-401-8151" class="topbar-number" rel="nofollow">800-401-8151</a></h2>
  </div>
  <div class="topLogin">
    <script type="text/javascript">
      function DisplayLogName(name) {
        var account=(function(name){var b=" "+document.cookie;var c=b.search(new RegExp("\b"+name+"="));if(c==-1)c=b.indexOf(name+"=");if(c==-1)b=null;else{c=b.indexOf("=",c)+1;var d=b.indexOf(";",c);if(d==-1)d=b.length;b=unescape(b.substring(c,d));}return b;})(name);
        var cust_name = "",signed_in = -1,d=document;
      
        if (account != null) {
          var v = account.split('|');
          if(v.length == 3) {
            signed_in = (v[2] == 'yes' ? 1 : 0);
            cust_name = v[0];
          }
          //d.write("<b>" + cust_name + "</b>");
          if (signed_in == 1) {
            d.write("<a href=\"https://www.vacplus.com/cgi-vacplus/sb/order.cgi?func=3&storeid=*121deeb48a92086890509d&html_reg=html\"><div id=\"myaccount\" class=\"icon-myaccount\"></div></a>");
            /*d.write("<a href=\"https://www.vacplus.com/cgi-vacplus/sb/order.cgi?func=4&storeid=*121deeb48a92086890509d&html_reg=html\">Sign Out</a>");*/
          }
          else if(signed_in == 0)
          {
            /*d.write(" - You are no longer signed in<br>");*/
          }
        }
        if(signed_in != 1) {
          d.write("<a data-toggle=\"modal\" data-target=\"#mySignIn\" style=\"cursor: pointer; color:#000;\" id=\"modal-signin-a\"><div id=\"modal-signin-btn\"><div id=\"myaccount\" class=\"icon-myaccount\"></div></div></a>");
          /*d.write("<a href=\"https://www.vacplus.com/cgi-vacplus/sb/order.cgi?func=2&storeid=*121deeb48a92086890509d&html_reg=html\">Click here to Sign In</a>");*/
        }
      }
      DisplayLogName("ss_reg_0001549342");
    </script>
    <!--<a href="https://www.vacplus.com/cgi-vacplus/sb/order.cgi?func=3&storeid=*121deeb48a92086890509d&html_reg=html">
      <div id="myaccount" class="icon-myaccount"></div>
    </a>-->
  </div>
  <div class="topCart">
    <a href="https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&function=show">
      <div class="icon-cart">
        <span class="badge"></span>
      </div>
    </a>
  </div>
  <div class="topHamburger hamburger-icon">
    <span id="hamburger" class="icon-menu" ></span>
  </div>
</div>

<div id="search-bar" class="search-bar-inactive">
  <form action="/cgi-vacplus/sb/productsearch.cgi?storeid=vacplus" name="searchsite">
    <input type="hidden" name="storeid" value="vacplus">
    <input type="text" name="search_field" size="17" style="height: 30px; margin: 0px; padding:0 5px;" />
    <div class="searchButton desktop">
      <span id="icon-search-button" class="icon-search-button" onclick="searchsite.submit()"></span>
    </div>
  </form>
</div>

<div id="menu-root" class="menu-root inactive">
  <!--begin main panel-->
  <div id="category-panel" class="nav-panel clearfix">
    <!--begin btn navigation: back-->
    <div id="navigation-back" class="nav-back inactive">
      <span class="icon-back"></span>BACK 
    </div>
    <!--end btn navigation: back-->
    <!--begin btn category: vacuums-->
    <div id="category-vacuums" class="nav-btn">
      <span class="dropdown-active">VACUUMS <span class="icon-dropdown"></span></span>
      <!--begin sub category panel: by brand-->
      <div id="category-vacuums-panel" class="clearfix subcategory-panel inactive">
        <!--first column-->
        <div>
          <a href="/upright-vacuum-cleaners.php">
            <div id="subcategory-vacs" class="sub-btn">
              UPRIGHT
            </div>
          </a>
          <a href="/canister-vacuum-cleaners.php">
            <div id="subcategory-vacs" class="sub-btn">
              CANISTER
            </div>
          </a>
          <a href="/handheld-vacuum-cleaners.php">
            <div id="subcategory-vacs" class="sub-btn">
              HANDHELD
            </div>
          </a>
          <a href="/robotic-floor-vacuums.php">
            <div id="subcategory-vacs" class="sub-btn">
              ROBOTIC
            </div>
          </a>
          <a href="/sweepers.php">
            <div id="subcategory-vacs" class="sub-btn">
              SWEEPERS
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--end btn category: vacuums-->
    <!--begin btn category: garment-->
    <div id="category-garment" class="nav-btn">
      <span class="dropdown-active">GARMENT CARE <span class="icon-dropdown"></span></span>
      <!--begin sub category panel: garment-->
      <div id="category-garment-panel" class="clearfix subcategory-panel inactive">
        <!--first column-->
        <div>
          <a href="/irons.php">
            <div id="subcategory-garment" class="sub-btn">
              IRONS
            </div>
          </a>
          <a href="/clothing-presses.php">
            <div id="subcategory-garment" class="sub-btn">
              PRESSES
            </div>
          </a>
          <a href="/ironing-boards.php">
            <div id="subcategory-garment" class="sub-btn">
              IRONING BOARDS
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--end btn category: garment-->
    <!--begin btn category: air-->
    <div id="category-air" class="nav-btn">
      <span class="dropdown-active">AIR <span class="icon-dropdown"></span></span>
      <!--begin sub category panel: air-->
      <div id="category-air-panel" class="clearfix subcategory-panel inactive">
        <!--first column-->
        <div>
          <a href="/fans.php">
            <div id="subcategory-air" class="sub-btn">
              FANS
            </div>
          </a>
          <a href="/zone-heaters.php">
            <div id="subcategory-air" class="sub-btn">
              HEATERS
            </div>
          </a>
          <a href="/air-purifiers.php">
            <div id="subcategory-air" class="sub-btn">
              PURIFIERS
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--end btn category: air-->
    <!--begin btn category: steamers-->
    <div id="category-steamers" class="nav-btn">
      <span class="dropdown-active">STEAMERS <span class="icon-dropdown"></span></span>
      <!--begin sub category panel: steamers-->
      <div id="category-steamers-panel" class="clearfix subcategory-panel inactive">
        <!--first column-->
        <div>
          <a href="/commercial-steamers.php">
            <div id="subcategory-steamers" class="sub-btn">
              COMMERCIAL
            </div>
          </a>
          <a href="/portable-steamers.php">
            <div id="subcategory-steamers" class="sub-btn">
              PORTABLE
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--end btn category: steamers-->
    <!--begin btn category: sale-->
    <a href="/coffee-makers.php">
      <div id="category-sale" class="nav-btn">
        <span>COFFEE</span>
      </div>
    </a>
    <!--end btn category: sale-->
    <!--begin btn category: accessories-->
    <div id="category-accessories" class="nav-btn">
      <span class="dropdown-active">ACCESSORIES <span class="icon-dropdown"></span></span>
      <!--begin sub category panel: accessories-->
      <div id="category-accessories-panel" class="clearfix subcategory-panel inactive">
        <div>
          <a href="/vacuum-bags.php">
            <div id="subcategory-bags" class="sub-btn">
              BAGS
            </div>
          </a>
          <a href="/brush-rolls.php">
            <div id="subcategory-bags" class="sub-btn">
              BRUSH ROLLS
            </div>
          </a>
          <a href="/vacuum-filters.php">
            <div id="subcategory-bags" class="sub-btn">
              FILTERS
            </div>
          </a>
          <a href="/vacuum-attachments.php">
            <div id="subcategory-bags" class="sub-btn">
              ATTACHMENTS
            </div>
          </a>
          <a href="/vacuum-attachments.php">
          <div id="subcategory-bags" class="sub-btn">
            REPLACEMENT PARTS
          </div>
          </a>
        </div>
        <!--second column
        <div class="col-lg-4 col-md-4 col-sm-4 last-target">
        </div>
        third column
        <div class="col-lg-4 col-md-4 col-sm-4">
        </div> -->
      </div>
    </div>
    <!--end btn category: accessories-->
    <!--begin btn category: by brand-->
    <div id="category-bybrand" class="nav-btn">
      <span class="dropdown-active">SHOP BY BRAND <span class="icon-dropdown"></span></span>
      <!--begin sub category panel: by brand-->
      <div id="category-bybrand-panel" class="clearfix subcategory-panel inactive">
        <!--first column-->
        <div class="col-lg-3 col-md-3 col-sm-3 last-target">
          <a href="/bissell-vacuums.php">
            <div id="subcategory-brand" class="sub-btn">
              BISSELL
            </div>
          </a>
          <a href="/bosch-vacuum-cleaners.php">
            <div id="subcategory-brand" class="sub-btn">
              BOSCH
            </div>
          </a>
          <a href="/carpet-pro-brand.php">
            <div id="subcategory-brand" class="sub-btn">
              CARPET PRO
            </div>
          </a>
          <a href="/cirrus-vacuum-machines.php">
            <div id="subcategory-brand" class="sub-btn">
              CIRRUS
            </div>
          </a>
          <a href="/dust-care-brand.php">
            <div id="subcategory-brand" class="sub-btn">
              DUST CARE
            </div>
          </a>
          <a href="/vacuum-bags-dvc.php">
            <div id="subcategory-brand" class="sub-btn">
              DVC
            </div>
          </a>
          <a href="/dyson.php">
            <div id="subcategory-brand" class="sub-btn">
              DYSON
            </div>
          </a>
          <a href="/vacuum-bags-envirocare.php">
            <div id="subcategory-brand" class="sub-btn">
              ENVIROCARE
            </div>
          </a>
          <a href="/eurika-vacuum-cleaners.php">
            <div id="subcategory-brand" class="sub-btn">
              EUREKA
            </div>
          </a>
          <a href="/feiyue-press.php">
            <div id="subcategory-brand" class="sub-btn">
              FEIYUE
            </div>
          </a>
          <a href="/fitall-brand.php">
            <div id="subcategory-brand" class="sub-btn">
              FITALL
            </div>
          </a>
        </div>
        <!--second column-->
        <div class="col-lg-3 col-md-3 col-sm-3 last-target">
          <a href="/fuller-vacuums.php">
            <div id="subcategory-brand" class="sub-btn">
              FULLER
            </div>
          </a>
          <a href="/goldstar-irons.php">
            <div id="subcategory-brand" class="sub-btn">
              GOLDSTAR
            </div>
          </a>
          <a href="/hoky-brand.php">
            <div id="subcategory-brand" class="sub-btn">
              HOKY
            </div>
          </a>
          <a href="/hoover-vacuum-cleaners.php">
            <div id="subcategory-brand" class="sub-btn">
              HOOVER
            </div>
          </a>
          <a href="/irons-presses-brands-jiffy.php">
            <div id="subcategory-brand" class="sub-btn">
              JIFFY STEAMER
            </div>
          </a>
          <a href="/vacuum-bags-kirby.php">
            <div id="subcategory-brand" class="sub-btn">
              KIRBY
            </div>
          </a>
          <a href="/vacuum-bags-kenmore.php">
            <div id="subcategory-brand" class="sub-btn">
              KENMORE
            </div>
          </a>
          <a href="/laurastar-irons.php">
            <div id="subcategory-brand" class="sub-btn">
              LAURASTAR
            </div>
          </a>
          <a href="/maytag.php">
            <div id="subcategory-brand" class="sub-btn">
              MAYTAG
            </div>
          </a>
          <a href="/miele.php">
            <div id="subcategory-brand" class="sub-btn">
              MIELE
            </div>
          </a>
          <a href="/irons-oliso.php">
            <div id="subcategory-brand" class="sub-btn">
              OLISO
            </div>
          </a>
        </div>
        <!--third column-->
        <div class="col-lg-3 col-md-3 col-sm-3 last-target">
          <a href="/oreck-vacuums.php">
            <div id="subcategory-brand" class="sub-btn">
              ORECK
            </div>
          </a>
          <a href="/pacificsteam-irons.php">
            <div id="subcategory-brand" class="sub-btn">
              PACIFIC STEAM IRONS
            </div>
          </a>
          <a href="/panasonic-irons.php">
            <div id="subcategory-brand" class="sub-btn">
              PANASONIC
            </div>
          </a>
          <a href="/reliable-brands.php">
            <div id="subcategory-brand" class="sub-btn">
              RELIABLE
            </div>
          </a>
          <a href="/riccar.php">
            <div id="subcategory-brand" class="sub-btn">
              RICCAR
            </div>
          </a>
          <a href="/ricoma-presses.php">
            <div id="subcategory-brand" class="sub-btn">
              RICOMA
            </div>
          </a>
          <a href="/irons-brands-rowenta.php">
            <div id="subcategory-brand" class="sub-btn">
              ROWENTA
            </div>
          </a>
          <a href="/royal-vacuum-cleaners.php">
            <div id="subcategory-brand" class="sub-btn">
              ROYAL
            </div>
          </a>
          <a href="/sanitaire-brand.php">
            <div id="subcategory-brand" class="sub-btn">
              SANITAIRE
            </div>
          </a>
          <a href="/vacuum-bags-sanyo.php">
            <div id="subcategory-brand" class="sub-btn">
              SANYO
            </div>
          </a>
          <a href="/vacuum-bags-shopvac.php">
            <div id="subcategory-brand" class="sub-btn">
              SHOP VAC
            </div>
          </a>
        </div>
        <!--fourth column-->
        <div class="col-lg-3 col-md-3 col-sm-3 last-target">
          <a href="/sienna-brand.php">
            <div id="subcategory-brand" class="sub-btn">
              SIENNA
            </div>
          </a>
          <a href="/simplicity-brand.php">
            <div id="subcategory-brand" class="sub-btn">
              SIMPLICITY
            </div>
          </a>
          <a href="/singer-presses.php">
            <div id="subcategory-brand" class="sub-btn">
              SINGER
            </div>
          </a>
          <a href="/strap-ez.php">
            <div id="subcategory-brand" class="sub-btn">
              STRAP EZ
            </div>
          </a>
          <a href="/sunheat.php">
            <div id="subcategory-brand" class="sub-btn">
              SUNHEAT
            </div>
          </a>
          <a href="/vacuum-bags-tristar.php">
            <div id="subcategory-brand" class="sub-btn">
              TRISTAR
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--end btn category: by brand-->
    <!--begin btn category: sale-->
    <a href="/sale.php">
      <div id="category-sale" class="nav-btn">
        <span>ON SALE</span>
      </div>
    </a>
    <!--end btn category: sale-->
  </div>
  <!--end main-panel-->
</div>
<div id="main-overlay"></div>
        <script src="/AE/bower_components/jquery/dist/jquery.min.js"></script>
  <script language="javascript">

  $(function() {

    var cookies = document.cookie,
    start = cookies.indexOf("ss_cart_0001549342="),
    cartvalues = "",
    linecount = 0,
    start1,
    end1,
    tmp,
    $output="";

    if (start == -1) {

      $output = "0";

    } else {

      start = cookies.indexOf("=", start) +1;  
      var end = cookies.indexOf(";", start);  

      if (end == -1) end = cookies.length;
      cartvalues = unescape(cookies.substring(start,end)); //read in just the cookie data
      start = 0;

      while ((start = cartvalues.indexOf("|", start)) != -1)
      {
        start++;
        end = cartvalues.indexOf("|", start);
        if (end != -1)
        {
          linecount++;
          if (linecount == 2) // Total Quantity of Items
          {
            tmp = cartvalues.substring(start,end);
            zcolon = tmp.indexOf(":", 0);
            $output += tmp.substring(zcolon+1,end - start);
          }
          start = end;
        } else {
          break;
        }
      }
    }

    $('.icon-cart').find('.badge').text($output);

  });
  </script>
      </header>
      <!--header end-->
      <div class="cmlla" id="cmlla">


        <!--main start-->
        <main role="main">
          <style type="text/css">
            #expertsewingconsultants {
              text-align:center;
              padding: 15px 0 0 0;
            }
            .expert-mobile-remove2 {
              display:block;
              clear:left;
            }
            #expert-number-callout {
              font-size: 30px;
            }
            #expertsewingconsultants-sticky-wrapper {
              position:relative;
            }
            .is-sticky #expertsewingconsultants {
              background-color:white;
              border-bottom:1px solid gray;
              padding:5px;

            }
            @media(max-width:861px){
              #expertsewingconsultants .expert-mobile-remove2 {
                font-size:14px;
              }
              #expert-number-callout {
                font-size:23px;
              }
            }
            @media(max-width:657px){
              #expertsewingconsultants .expert-mobile-remove1 {
                display:block;
                clear:left;
                font-size:20px;
              }
              #expertsewingconsultants .expert-mobile-remove2 {
                display:none;
              }
              #expert-number-callout {
                font-size:30px;
              }
            }
            @media (min-width:767px) and (max-width:1199px) {
              .is-sticky #expertsewingconsultants {margin-top:0px;}
            }
          </style>

          <div id="expertsewingconsultants">
            <span id="expert-number-callout" style="color: red;">Call <a href="tel:800-401-8151">800-401-8151</a> <span class="expert-mobile-remove1" style="color:black;">To Speak With An Expert Sewing Consultant</span></span>
            <span class="expert-mobile-remove2" style="margin-top: 5px;">We'll help you find the perfect product and provide <b>lifetime support</b> for any purchase. <a href="/expert-sewing-consultants.php">E-mail us here</a>.</span>
          </div>


                        <!--MAIN BANNER-->
<style>
  #expertsewingconsultants {display: none;}
  .parallax {-webkit-backgound-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;padding: 0px;}
  .space-40 {width: 100%;height: 40px;clear: both;}
  .section1 {background: url('/media/banners/2017-holidays/bg1.jpg') no-repeat center center fixed;background-size: cover;background-color: #fff;}
  .section2 {background: url('/media/banners/2017-holidays/bg2.jpg') no-repeat center center fixed;background-size: cover;background-color: #52070d;}
  .section3 {background: url('/media/banners/2017-holidays/bg3.jpg') no-repeat center center fixed;background-size: cover;background-color: #916a45;}
</style>
<!--remove script-->
<style>
  .well {box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);display: none;margin: 1em;max-height: 80%;overflow-y: scroll;max-width: 65%;}
  #packages #craftsy-pop #local-pop #financing-pop,#callouts-pop,#lowest-price-pop {transform: scale(0.8);}
  .popup_visible #packages #craftsy-pop #local-pop #financing-pop {transform: scale(1);}
  .hps-title1 {font-size: 2vw;background-color: rgba(250, 250, 250, 0.8);padding: 10px;text-align: right;}
  .shop-now-button {display: inline-block;color: #fff;font-size: 2vw;background-color: #148fff;padding: 2vw;}
  .percoff {font-weight: 900;font-style: italic;}
  #masterslider {align-self:flex-start;}
  @media (min-width:1025px) {.percoff {font-size: 21px;}}
  @media (max-width:1024px) and (min-width:768px) {.percoff {font-size: 23px;}}
  @media (max-width:767px) {.ms-skin-light-6 .ms-nav-next, .ms-skin-light-6 .ms-nav-prev {top: 75%;} .hps-title1 {font-size: 12vw;} .shop-now-button {font-size: 13vw;} .percoff {font-size: 19px;} #masterslider{align-self:center;}}
</style>
<script src="//vacplus.com/AE/jquery-popup/jquery.popupoverlay.js"></script>
  
<!-- masterslider -->
<div class="master-slider ms-skin-default desktop-view" id="masterslider">
  <!-- new slide -->
  <div class="ms-slide slide-1" data-delay="14">
    <!-- slide background -->
    <img src="masterslider/blank.gif" data-src="/AE/images/hbanner/slide1-hbanner.jpg" alt="Slide1 background">
    <h3 class="ms-layer hps-title1 master-desktop-title" style="right: 4.5vw; top: 4vw;" data-type="text">
      <span style="font-weight:bold;">Miele: Tested to last up to 20 years!</span>
      <br> No daily routine can be as tough as a Miele product test<br>
      <span style="color:#148fff;">All of them provide superior air filtration.</span>
    </h3>
    <a href="/miele.php"></a><span class="ms-layer shop-now-button master-desktop-button">SHOP NOW ></span></a>
  </div>
  <!-- end of slide -->
  <!-- new slide -->
  <div class="ms-slide slide-2" data-delay="14">
    <!-- slide background -->
    <img src="masterslider/blank.gif" data-src="/AE/images/hbanner/slide2-hbanner.jpg" alt="Slide2 background">
    <h3 class="ms-layer hps-title1 master-desktop-title" style="right: 4.5vw; top: 4vw;" data-type="text">
      <span style="font-weight:bold;">Clothing wrinkles ruin everything</span>
      <br> Jiffy Steamers removes clothing wrinkles quickly and easily.<br>
      <span style="color:#148fff;">Handcrafted and American-made</span>
    </h3>
    <a href="/irons-presses-brands-jiffy.php"><span class="ms-layer shop-now-button master-desktop-button">SHOP NOW ></span></a>
  </div>
  <!-- end of slide -->
  <!-- new slide -->
  <div class="ms-slide slide-2" data-delay="14">
    <!-- slide background -->
    <img src="masterslider/blank.gif" data-src="/AE/images/hbanner/slide3-hbanner.jpg" alt="Slide2 background">
    <h3 class="ms-layer hps-title1 master-desktop-title" style="right: 4.5vw; top: 4vw;" data-type="text">
      <span style="font-weight:bold;">Dyson Cyclone v10</span>
      <br> The most powerful suction of any cord-free vacuum.<br>
      <span style="color:#148fff;">Floor to ceiling cleaning.</span>
    </h3>
    <a href="/SV10AN.php"><span class="ms-layer shop-now-button master-desktop-button">SHOP NOW ></span></a>
  </div>
  <!-- end of slide -->
</div>
<!--end masterslider-->
<!-- masterslider mobile-->
<div class="master-slider ms-skin-default mobile-view" id="masterslider-mobile">
  <!-- new slide -->
  <div class="ms-slide slide-1" data-delay="14">
    <!-- slide background -->
    <img src="masterslider/blank.gif" data-src="/AE/images/hbanner/slide1-hbanner-mobile.jpg" alt="Slide1 background">
    <h3 class="ms-layer hps-title1 master-mobile-title" data-type="text">
      <span style="font-weight:bold;">Miele: Tested to last up to 20 years!</span>
      <br> No daily routine can be as tough as a Miele product test<br>
      <span style="color:#148fff;">All of them provide superior air filtration.</span>
    </h3>
    <a href="/miele.php"><span class="ms-layer shop-now-button master-mobile-button">SHOP NOW ></span></a>
  </div>
  <!-- end of slide -->
  <!-- new slide -->
  <div class="ms-slide slide-2" data-delay="14">
    <!-- slide background -->
    <img src="masterslider/blank.gif" data-src="/AE/images/hbanner/slide2-hbanner-mobile.jpg" alt="Slide2 background">
    <h3 class="ms-layer hps-title1 master-mobile-title" data-type="text">
      <span style="font-weight:bold;">Clothing wrinkles ruin everything</span>
      <br> Jiffy Steamers removes clothing wrinkles quickly and easily.<br>
      <span style="color:#148fff;">Handcrafted and American-made</span>
    </h3>
    <a href="/irons-presses-brands-jiffy.php"><span class="ms-layer shop-now-button master-mobile-button">SHOP NOW ></span></a>
  </div>
  <!-- end of slide -->
  <!-- new slide -->
  <div class="ms-slide slide-2" data-delay="14">
    <!-- slide background -->
    <img src="masterslider/blank.gif" data-src="/AE/images/hbanner/slide3-hbanner-mobile.jpg" alt="Slide2 background">
    <h3 class="ms-layer hps-title1 master-mobile-title" data-type="text">
      <span style="font-weight:bold;">Dyson Cyclone v10</span>
      <br> The most powerful suction of any cord-free vacuum.<br>
      <span style="color:#148fff;">Floor to ceiling cleaning.</span>
    </h3>
    <a href="/SV10AN.php"><span class="ms-layer shop-now-button master-mobile-button">SHOP NOW ></span></a>
  </div>
  <!-- end of slide -->
</div>
<!--end masterslider mobile-->

<script type="text/javascript">
  var slider = new MasterSlider();
  var sliderMobile = new MasterSlider();

  // adds Arrows navigation control to the slider.
  slider.control('arrows');
  slider.control('timebar', {
    insertTo: '#masterslider',
    insertTo: '#masterslider-mobile'
  });
  slider.control('bullets');

  if(sessionStorage.getItem('ux')==='desktop'){
    slider.setup('masterslider', {
      width: 1400, // slider standard width
      height: 580, // slider standard height
      space: 1,
      speed: 35,
      layout: 'fullwidth',
      loop: true,
      preload: 0,
      autoplay: false
    });
  }else{
    sliderMobile.setup('masterslider-mobile', {
      width: 767, // slider standard width
      height: 680, // slider standard height
      space: 1,
      speed: 35,
      layout: 'fullwidth',
      loop: true,
      preload: 0,
      autoplay: false
    });
  }  
  
  // adds Arrows navigation control to the slider.
  /*slider.control('arrows');
  slider.control('bullets',{autohide:false});*/
</script>

<div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:15px; padding:0;">
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="padding:2px;">
    <a href="/miele-accessories.php"><img src="/AE/images/hbanner/mini-slide1.jpg" class="img-responsive"></a>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="padding:2px;">
    <a href="/irons-presses-brands-jiffy.php"><img src="/AE/images/hbanner/mini-slide2.jpg" class="img-responsive"></a>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="padding:2px;">
    <a href="/dyson-fans.php"><img src="/AE/images/hbanner/mini-slide3.jpg" class="img-responsive"></a>
  </div>
  
</div>

<style>
  a.tout-tab-title {color: #828282;font-size: 14px;font-weight: bold;display: table-cell;vertical-align: middle;padding:0 15px;}
  a.tout-tab-title:hover {color: #fff;background-color: #d6d6d6;}
  a.tout-tab-title-active {color: #148fff;font-size: 14px;font-weight: bold;display: table-cell;vertical-align: middle;}
  a.tout-tab-title-active:hover {color: #555555;background-color:#d6d6d6;}
  .tout-tab {padding: 0px;text-align: center;height: 54px;border: solid thin #fff;display: table;}
  .tout-tabs {border-bottom: 1px solid #828282;}
  .inactive-tout {opacity: 0;visibility: hidden;}
  .active-tout {opacity: 1;visibility: visible;}
  .inactive-tab {color: #828282;}
  .active-tab {background-color: #fff;}
  #tout-showcase {position: relative; height: 340px;}
  .tabcolc{flex:1 0 auto; align-self:center; text-align:center;}
  #tout-showcase .tout-holder {position: absolute;}
  #tout-showcase .section-heading { margin-right: 0;}
  #tout-showcase .row {margin-right: 0;}
  /*@media(max-width:991px) {
    .tout-tab {
      height: 100%;
    }
    #tout-showcase {
      top: 177px;
    }
    #showcase-wrap {
      height: 610px;
    }
  }
  @media(max-width:768px) {
    #showcase-wrap {
      height: 695px;
    }
  }*/
</style>
<script>
  function toutTabSwitch(name) {
    event.preventDefault();
    currentTab(name);
    if ($('#' + name + '-tout').hasClass('inactive-tout')) {
      //$('#'+name+'-tout button.slick-next').click();
      $('#tout-showcase').find('div.active-tout').removeClass('active-tout').addClass('inactive-tout');
      $('#' + name + '-tout').removeClass('inactive-tout').addClass('active-tout');
    }
  }

  function currentTab(name) {
    if ($('#' + name + '-tab').parent().hasClass('inactive-tab')) {
      $('.tout-tabs').find('div.tout-tab.active-tab').removeClass('active-tab').addClass('inactive-tab');
      $('#' + name + '-tab').parent().removeClass('inactive-tab').addClass('active-tab');
      $('.tout-tab-title-active').removeClass('tout-tab-title-active').addClass('tout-tab-title');
      $('#' + name + '-tab').removeClass('tout-tab-title').addClass('tout-tab-title-active');
    }
  }
</script>
<div class="space-20"></div>
<!--tout showcase-->

<style>
  /*.tout-tabs .col-lg-2 {
    width:20%;
  } @media (min-width: 1200px) {
    .tout-tabs .col-lg-2 {
      width:20%;
    }
  }*/
</style>

<div class="row dbox">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="padding:0px;" id="showcase-wrap">
    <div class="cbox tout-tabs" style="padding:0px;">
      <!--upright tab-->
      <div class="tabcolc tout-tab active-tab">
        <a href="#" class="tout-tab-title-active" onclick="toutTabSwitch('cat1');" id="cat1-tab">UPRIGHT</a>
      </div>
      <!-- canister tab-->
      <div class="tabcolc tout-tab inactive-tab">
        <a href="#" class="tout-tab-title" onclick="toutTabSwitch('cat2')" id="cat2-tab">CANISTER</a>
      </div>
      <!--handheld tab-->
      <div class="tabcolc tout-tab inactive-tab">
        <a href="#" class="tout-tab-title" onclick="toutTabSwitch('cat3')" id="cat3-tab">HANDHELD</a>
      </div>
      <!--industrial tab-->
      <div class="tabcolc tout-tab inactive-tab">
        <a href="#" class="tout-tab-title" onclick="toutTabSwitch('cat4')" id="cat4-tab">INDUSTRIAL</a>
      </div>
      <!--accessories tab-->
      <div class="tabcolc tout-tab inactive-tab">
        <a href="#" class="tout-tab-title" onclick="toutTabSwitch('cat5')" id="cat5-tab">ACCESSORIES</a>
      </div>
      <!--steamers tab-->
      <div class="tabcolc tout-tab inactive-tab">
        <a href="#" class="tout-tab-title" onclick="toutTabSwitch('cat6')" id="cat6-tab">STEAMERS</a>
      </div>
      <!--irons tab-->
      <div class="tabcolc tout-tab inactive-tab">
        <a href="#" class="tout-tab-title" onclick="toutTabSwitch('cat7')" id="cat7-tab">IRONS</a>
      </div>
      <!--ironing boards tab-->
      <div class="tabcolc tout-tab inactive-tab">
        <a href="#" class="tout-tab-title" onclick="toutTabSwitch('cat8')" id="cat8-tab">IRONING BOARDS</a>
      </div>
      <!--presses tab-->
      <div class="tabcolc tout-tab inactive-tab">
        <a href="#" class="tout-tab-title" onclick="toutTabSwitch('cat9')" id="cat9-tab">PRESSES</a>
      </div>
      <!--presses tab-->
      <div class="tabcolc tout-tab inactive-tab">
        <a href="#" class="tout-tab-title" onclick="toutTabSwitch('cat10')" id="cat10-tab">AIR</a>
      </div>
    </div>

    <!--begin touts-->
    <div id="tout-showcase">
      <!--upright tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder active-tout" id="cat1-tout" style="padding:0px;">
        <!--SHOP BY TOP UPRIGHT VACUUMS-->
        <?php include "mm-top-upright.php"; ?>
      </div>
      <!--canister tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder inactive-tout" id="cat2-tout" style="padding:0px;">
        <!--SHOP BY TOP CANISTER VACUUMS-->
        <?php include "mm-top-canister.php"; ?>
      </div>
      <!--handheld tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder inactive-tout" id="cat3-tout" style="padding:0px;">
        <!--SHOP BY TOP HANDHELD VACUUMS-->
        <?php include "mm-top-handheld.php"; ?>
      </div>
      <!--industrial tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder inactive-tout" id="cat4-tout" style="padding:0px;">
        <!--SHOP BY TOP INDUSTRIAL VACUUMS-->
        <?php include "mm-top-industrial.php"; ?>
      </div>
      <!--accessories tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder inactive-tout" id="cat5-tout" style="padding:0px;">
        <!--SHOP BY TOP ACCESSORIES-->
        <?php include "mm-top-accessories.php"; ?>
      </div>
      <!--irons tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder inactive-tout" id="cat6-tout" style="padding:0px;">
        <!--SHOP BY TOP STEAMERS-->
        <?php include "mm-top-steamers.php"; ?>
      </div>
      <!--irons tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder inactive-tout" id="cat7-tout" style="padding:0px;">
        <!--SHOP BY TOP IRONS-->
        <?php include "mm-top-irons.php"; ?>
      </div>
      <!--ironing boards tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder inactive-tout" id="cat8-tout" style="padding:0px;">
        <!--SHOP BY TOP IRONING BOARDS-->
        <?php include "mm-top-ironing-boards.php"; ?>
      </div>
      <!--ironing boards tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder inactive-tout" id="cat9-tout" style="padding:0px;">
        <!--SHOP BY TOP PRESSES-->
        <?php include "mm-top-presses.php"; ?>
      </div>
      <!--fans, heaters, purifiers and humidifiers tout-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix tout-holder inactive-tout" id="cat10-tout" style="padding:0px;">
        <!--SHOP BY TOP AIR-->
        <?php include "mm-top-fans-heaters-purifiers-humidifiers.php"; ?>
      </div>
    </div>
  </div>
</div>                                  <!-- <div class="space-20"></div>
<section class="top-categories wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="blocks-main">
        <div class="col-sm-4">
          <a href="/sewing-machines.php" class="blocks-col">
            <img src="/AE/images/top-categories-1.jpg" alt="" class="img-responsive">
            <div class="block-overlay">
              <h4>House hold sewing machines</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="/industrial-sewing-machines.php" class="blocks-col">
            <img src="/AE/images/top-categories-2.jpg" alt="" class="img-responsive">
            <div class="block-overlay">
              <h4>Industrial Machines</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="/quilting-notions.php" class="blocks-col">
            <img src="/AE/images/top-categories-3.jpg" alt="" class="img-responsive">
            <div class="block-overlay">
              <h4>Quilting Supplies</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="/sewing-furniture.php" class="blocks-col">
            <img src="/AE/images/top-categories-4.jpg" alt="" class="img-responsive">
            <div class="block-overlay">
              <h4>Sewing Furniture</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="/irons-and-presses.php" class="blocks-col">
            <img src="/AE/images/top-categories-5.jpg" alt="" class="img-responsive">
            <div class="block-overlay">
              <h4>Garment Care</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="/machinebrands.php" class="blocks-col">
            <img src="/AE/images/top-categories-6.jpg" alt="" class="img-responsive">
            <div class="block-overlay">
              <h4>Popular Brands</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section> -->                                  <!-- Empty field [Text3]  -->                                                                    </main>
        <!--main end-->
      </div>
    </div><!--cmlla end-->
    <script>
  function validateForm() {
    var x = document.getElementById("userEmail").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
      alert("Bad Email!");
      return false;
    } else {
      document.getElementById("emailSend").src = 'https://app.bronto.com/public/?q=direct_add&fn=Public_DirectAddForm&id=ahasusrikanixytkoqsyrrwdrylhblk&email=' + x + '&list1=0bbe03ec0000000000000000000000141976';
      //hide form and display a thank you for registering
      document.getElementById("email-signup-form").style.display = "none";
      document.getElementById("email-thank-you").style.display = "block";
      return false;
    }
  }
</script>

<section class="newsletter">

  <hr class="foothr">

  <div class="container">
    <div class="row" id="email-thank-you" style="display:none;">
      <div class="col-md-6">
        <h3>Let us know if you have any questions! We're happy to help</h3>
      </div>
      <div class="col-md-6">
        <h2 style="text-align:center;">Thank You for Signing Up!</h2>
        <img id="emailSend" src="" width="0" height="0" border="0" alt="" />
      </div>
    </div>
    <div class="col-sm-12" id="email-signup-form" style="text-align:center;margin:0 auto 15px auto;">
      <div class="col-md-12">
        <div id="moreInfo">
          <div class="nowrapflex" style="align-items:center;">
            <div class="dcol2" style="align-self:right;flex:0 1 auto; padding: 10px 0;">
              <h3>Join our mailing list for Coupons and Promotions!</h3>
            </div>
            <div class="fcol" style="align-self:left;flex:.5 2 auto;">
              <form role="form" class="subscribe-form assan-newsletter" id="emailCaptureSignupForm">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <input type="text" class="form-control" name="email" id="userEmail" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-sm-4 text-center">
                    <div style="display:block; max-width:200px;">
                      <button class="newsletter-btn btn-block" name="submit" onclick="return validateForm();">Sign Up!</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>    <!--changes to style.css-->
<style>
  .footer{/*1408*/
    background-color:#e9e9e9;
    color:#2d2f31;
  }
  .footer ul.link-list li{
     cursor:pointer;
  }
  .footer ul.link-list h3{/*1444*/
    border-bottom:1px solid #d3d3d3;
  }
  .footer ul.link-list h3{
    color:#148eff;
    border-bottom:1px solid #b6b6b6;
  }
  .col-md-3[itemprop="address"] {
    margin-top: 20px;
  }
  .col-md-9[itemprop="footielinks"] {
    margin-top: 20px;
    margin-bottom: 40px;
  }
  @media(max-width:1199px){/*1548*/
    .footer ul.link-list{
      padding:0 3% 0 3%;
    }
    .footer.showroom-text:before{/*1604*/
      content:"\e947";
      font-family:'vp-icomoon';
      color:#148eff;
    }
    .col-md-3[itemprop="address"] {
      width: 35%;
    }
    .col-md-9[itemprop="footielinks"] {
      width: 65%;
    }
    .footer ul.social-footer {
      text-align: left;
      margin: 20px auto;
    }
    .footer ul.social-footer li {
      float: none;
      display: inline-block;
      width: 40px !important;
      /* margin-right: 10px; */
    }
    .footer ul.social-footer {
      width: 100%;
      /* text-align: center; */
    }
  }
  .footer-bottom p.copyright{
    margin:20px 0;
    padding-bottom:0;
  }
  @media(max-width:991px){
    .footer-bottom p.copyright{
      margin:auto 0;
      text-align: center;
    }
    .footer-bottom .payment{
      margin:0 auto !important;
      float:none;
    }
    .footer ul.social-footer,
    .phone-contact {
      text-align:center;
      margin: 0 auto;
    }
    .footer ul.social-footer {
      margin: 20px auto;
      width: 40%;
    }
    .col-md-3[itemprop="address"] {
      width: 100%;
    }
    .col-md-9[itemprop="footielinks"] {
      width: 100%;
      margin-bottom: 50px;
    }
  }
  @media (max-width: 670px) {
    .footer .phone-contact h2 {
      font-size: 28px;
    }
    .footer .phone-contact h3 {
      font-size: 14px;
    }
    .footer .phone-contact h4 {
      font-size: 14px;
    }
    .footer ul.social-footer {
      margin: 10px auto;
    }
    .footer {
      padding: 30px 0 0;
    }
  }
  @media screen and (max-width: 360px) {
    .footer ul.social-footer li {
      width: 35px !important;
    }
  }
  .newsletter h3:before{
    content:"\e945";
    font-family:'vp-icomoon';
  }
  /* .footer ul.social-footer li{
    width:11% !important;
  } */
</style>

<!--footer start-->
<footer id="footer" class="footer">
  <div class="row rowpad">
    <div class="container lightfooter">
      <div class="col-md-3 margin-b-30" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <ul class="list-unstyled phone-contact margin-b-30">
          <li><h3>Call Toll Free:</h3></li>
          <li><h2><a href="tel:800-401-8151" style="font-weight: 700;" class="topbar-number" rel="nofollow">800-401-8151</a></h2></li>
          <li><h4 style="font-weight: 400;">Talk to an Expert!</h4></li>
        </ul>
        <div itemprop="socmed">
          <ul class="list-unstyled social-footer clearfix">
            <li><a target="_blank" href="http://www.facebook.com/pages/SewingMachinesPluscom/132223788425" data-toggle="tooltip" data-placement="top" data-title="Facebook"><span class="icon-facebook"></span></a></li>
            <li><a target="_blank" href="http://www.pinterest.com/sewmachplus/" data-toggle="tooltip" data-placement="top" data-title="Pinterest"><span class="icon-pinterest"></span></a></li>
            <li><a target="_blank" href="https://twitter.com/Sewmachinesplus" data-toggle="tooltip" data-placement="top" data-title="Twitter"><span class="icon-twitter"></span></a></li>
            <li><a target="_blank" href="http://instagram.com/sewingmachinesplusdotcom?ref=badge" data-toggle="tooltip" data-placement="top" data-title="Instagram"><span class="icon-instagram"></span></a></li>
            <li><a target="_blank" href="http://www.youtube.com/user/SeamsAmazing/" data-toggle="tooltip" data-placement="top" data-title="Youtube"><span class="icon-youtube"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-9 margin-b-30" itemprop="footielinks">
        <ul class="link-list">
          <li>
            <h3 class="footh3">Shop
              <span class="expand-trigger">
                <i class="fa fa-caret-down"></i>
              </span>
            </h3>
            <ul class="list-unstyled footerlinks">
              <li><a href="/vacuum-cleaners.php">Vacuum Cleaners</a></li>
              <li><a href="/upright-vacuum-cleaners.php">Upright Vacuums</a></li>
              <li><a href="/canister-vacuum-cleaners.php">Canister Vacuums</a></li>
              <!--<li><a href="/industrial-vacuum-cleaners.php">Industrial Vacuums</a></li>-->
              <li><a href="/handheld-vacuum-cleaners.php">Handheld Vacuums</a></li>
              <li><a href="/vacuum-bags.php">Vacuum Bags</a></li>
              <li><a href="/steam-cleaners.php">Steam Cleaners</a></li>
              <!-- <li><a href="/start-selling.php">Sell Your Products</a></li> -->
            </ul>
          </li>
          <li>
            <h3 class="footh3">About
              <span class="expand-trigger">
                <i class="fa fa-caret-down"></i>
              </span>
            </h3>
            <ul class="list-unstyled footerlinks">
              <li><a href="/about-us.php">About Us</a></li>
              <!-- <li><a href="/careers.php">Careers</a></li> -->
              <li><a href="/faq.php">FAQ</a></li>
            </ul>
          </li>
          <li>
            <h3 class="footh3">Service
              <span class="expand-trigger">
                <i class="fa fa-caret-down"></i>
              </span>
            </h3>
            <ul class="list-unstyled footerlinks">
              <!--<li><a href="/trackorder.php">Order Status</a></li>-->
              <li><a href="/contact-us.php">Contact Us</a></li>
              <li><a href="/customer-service.php">Policies</a></li>
              <li><a href="/customer-service.php#3yr">Warranty</a></li>
              <!-- <li><a href="/machine-service.php">Service &amp; Repair</a></li> -->
            </ul>
          </li>
          <li>
            <h3 class="footh3">Resources
              <span class="expand-trigger">
                <i class="fa fa-caret-down"></i>
              </span>
            </h3>
            <ul class="list-unstyled lastlist footerlinks">
              <li><a href="/customer-service.php#fin">Financing</a></li>
              <!--<li><a href="/smp-affiliate.php">Affiliate Program</a></li>-->
            </ul>
          </li>
          <ul class="hidden">
            <li></li>
          </ul>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p class="copyright">&copy; 2018 Vacplus.com <span class="divider">|</span> <a href="/sitemap_vacplus.php">Site map</a></p>
        </div>
        <div class="col-md-4">
          <img src="//vacplus.com/AE/images/footer-logos_amazon.png" alt="Your experience is secure &amp; protected on Vacplus.com" title="Your experience is secure &amp; protected on Vacplus.com" class="img-responsive payment">
        </div>
      </div>
    </div>
  </div>
</footer>    <!-- BEGIN MODULE BODY -->
<!--[if lt IE 9]>
     <script src="https://www.vacplus.com/media/en-US/javascript/jquery/jquery.js" type="text/javascript"></script>
     <script type="text/javascript">
         var ss_jQuery = jQuery.noConflict(true);

     </script>
<![endif]-->

<div id="cart_message" title="Item(s) Added to Cart" style="display: none; z-index: 99999;">
    <div id="cart_message_body" style="position: relative; height: 140px; overflow: hidden;">
  <div id="cart_message_prod_img" style="position: absolute; left: 10px; top: 0; height: 200px; width: 100px; overflow: hidden;">
    <img id="cart_message_img" src="" width="100" />
        </div>
        <div style="position: absolute; left: 130px; height: 200px; top: 0;">
    <div id="cart_message_error" style="display: none; margin-top: 10%;"></div>
    <div id="cart_message_products" style="margin-top: 5%;"></div>
  </div>
  <div id="cart_message_inner" style="position: absolute; bottom: 10px; left: 50px;">
    <center></center>
        </div>
   </div>
</div>

<script src="https://www.vacplus.com/media/en-US/javascript/jquery/jquery.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="/aac_module/scripts/jquery.form.js"></script> -->
<script type="text/javascript">
  var ss_jQuery = jQuery.noConflict(true);
</script>
<script type="text/javascript" src="/aac_module/scripts/jquery.loadmask.min.js"></script>
<script type="text/javascript" src="/aac_module/scripts/jquery_ui.js"></script>
<script type="text/javascript">
  window.add_cart_loadmaskphrase='Adding Item to Cart';
  window.empty_cart_loadmaskphrase='Clearing Cart';
  window.loadmaskimage = new Image(25,25);
  window.loadmaskimage.src = 'https://www.vacplus.com/media/en-US/css/images/loadmask.gif';
</script>

<script type="text/javascript">
ss_jQuery(function () {

    window.minicart = {
        serialnum: '0001549342',
        cartURL: "https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&amp;function=show?storeid=*121deeb48a92086890509d&amp;function=show",
        storeid: "*121deeb48a92086890509d",
        minicartIcon: "https://www.vacplus.com/media/en-US/themesmedia/cart-black.gif",
        cartvalues: "",
        totals: [],
        productCount: 0,
        zip: '',
        country: '',
        cc: 0,
        cookieSet: false,
        subtotal: 0,
        order_total: 0,
        start1: 0,
        end1: 0,
        emptyMessage: "No items in cart",
        products: [],
        textColor: "black",
        backgroundColor: "transparent",
        showCart: "no",
        cartColor: "black",
        textAlign: "left",
        cart_form_values: [],
        readCookie: function () {
            var cookies = document.cookie;
            var start = cookies.indexOf("ss_cart_" + this.serialnum + "=");
            var cartvalues = "";
            var tmp;
            var start = cookies.indexOf("=", start) + 1;
            var end = cookies.indexOf(";", start);
            if (end == -1) {
                end = cookies.length;
            }
            this.cartvalues = unescape(cookies.substring(start, end));
            if (this.cartvalues.length > 0) {
                this.cookieSet = true;
            } else {
                this.cookieSet = false;
            }
            if (this.cookieSet == false) {
                this.removeCookie("totals");
            }
            var tstart = cookies.indexOf("totals");
            var tstart = cookies.indexOf("=", tstart) + 1;
            var tend = cookies.indexOf(";", tstart);
            if (tend == -1) {
                tend = cookies.length;
            }
            var t = unescape(cookies.substring(tstart, tend));
            var t_temp = t.split("|");
            this.totals = new Array();
            for (n = 0; n < t_temp.length; n++) {
                var t_split = t_temp[n].split(":");
                var name = t_split[0];
                var value = t_split[1];
                this.totals[name] = value;
            }

        },

        parseCartValues: function () {
            start = 0;
            var linecount = 0;
            var total_count = 0;
            while ((start = this.cartvalues.indexOf("|", start)) != -1) {
                start++;
                end = this.cartvalues.indexOf("|", start);
                if (end != -1) {
                    linecount++;

                    if (linecount == 3) {
                        this.start1 = start;
                        this.end1 = end;
                    }

                    if (linecount > 3) {
                        tmp = this.cartvalues.substring(start, end);
                        colon = tmp.indexOf(":", 0);

                        var product_quantity = tmp.substring(0, colon);

                        if (product_quantity > 0) {
                            total_count += product_quantity / 1;

                            colon2 = tmp.indexOf(":", colon + 1);
                            var product_name = tmp.substring(colon2 + 1, end - start);
                            var product_price = tmp.substring(colon + 1, colon2);

                            var p_object = {
                                name: product_name,
                                price: product_price,
                                quantity: product_quantity
                            };
                            this.products.push(p_object);
                        }
                    }
                    start = end;
                } else {
                    break;
                }
            }

            if (total_count == 1) {
                this.productCount = total_count + " Item";
            } else {
                this.productCount = total_count + " Items";
            }

            tmp = this.cartvalues.substring(this.start1, this.end1);
            colon = tmp.indexOf(":", 0);
            this.subtotal = tmp.substring(colon + 1, this.end1 - this.start1);
            ss_jQuery("#minicart_subtotal_summary").text(this.subtotal);

        },
        setCookie: function (name, value, days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
            } else {
                var expires = "";
                document.cookie = name + "=" + value + expires + "; path=/";
            }
        },

        removeCookie: function (name) {
            this.setCookie(name, "", -1);
        },

        getCookie: function (c_name) {
            var i, x, y, ARRcookies = document.cookie.split(";");
            for (i = 0; i < ARRcookies.length; i++) {
                x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
                y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
                x = x.replace(/^\s+|\s+$/g, "");
                if (x == c_name) {
                    return unescape(y);
                }
            }
        },

        addProductRow: function (qnty, pname, price) {
            var new_row = '<tr><td class="minicart_qnty">' + qnty + '</td><td class="minicart_name">' + pname + '</td><td class="minicart_price">' + price + '</td></tr>';
            ss_jQuery("#minicart_4_ptable").append(new_row);
        },

        updateMinicart: function () {
            ss_jQuery.ajax({
                type: "POST",
                cache: false,
                url: "https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&amp;function=show",
                data: "&storeid=*121deeb48a92086890509d&function=show",
                async: false,
                crossDomain: false,
                dataType: 'html',
                success: function (msg) {
                    var ss_jQuerydoc = ss_jQuery(msg);

                    var f_input = ss_jQuerydoc.find("form[name='order']");

            //window.cart_html = ss_jQuerydoc.find("form[name='order']").parent().html();

                    window.cart_data = f_input.serialize();

                    var form_values = f_input.serializeArray();

                    var total_regex = /^Total.*/;

                    var total = null;

                    ss_jQuery.each(form_values, function (i, field) {
                        window.minicart.cart_form_values[field.name] = field.value;
                    });

                    var totals_table = ss_jQuerydoc.find("table.totals > tbody > tr > td");
                    var total_value = null;
                    var total_index = null;

                    totals_table.each(function (i, field) {


                        if (total_index != null) {
                            if (i == total_index) {
                                total_value = field.innerHTML;
                            }
                        }
                    });




                    if (total_value != null) {
                        this.order_total = total_value;
                    } else {
                        this.order_total = "$0";
                    }

                }
            });

            this.products = new Array();
            this.readCookie();
            if (this.cookieSet == true) {
                this.parseCartValues();

                if (this.products.length > 0) {

                    if (this.products.length == 1) {
                        ss_jQuery("#minicart_item_count").text(this.productCount);
                    } else {
                        ss_jQuery("#minicart_item_count").text(this.productCount);
                    }

        

                } else {
                            ss_jQuery("#minicart_item_count").text("");
                    ss_jQuery("#minicart_subtotal_summary").text("");

                }

            } else {
                    ss_jQuery("#minicart_empty_wrap").show();
                ss_jQuery("#minicart_product_table_body").empty();
                ss_jQuery("#minicart_quantity").text("");
                ss_jQuery("#minicart_subtotal").text(this.emptyMessage);
            }

        }
    }

    window.minicart.updateMinicart();

});

function emptyCart() {
    window.minicart.removeCookie("totals");
    var scrollTop = ss_jQuery(window).scrollTop();
    var wheight = ss_jQuery(window).height();

    var mpos = scrollTop + Math.round(wheight / 2);

    ss_jQuery('body').mask(window.empty_cart_loadmaskphrase, 0, mpos);
    var ajaxTime = new Date().getTime();
    ss_jQuery.ajax({
        type: "POST",
        cache: false,
        url: "https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&amp;function=show",
        data: window.cart_data + "&function=Empty Cart",
        async: true,
        crossDomain: false,
        dataType: 'html',
        success: function (msg) {
            var ss_jQuerydoc = ss_jQuery(msg);
            window.minicart.updateMinicart();
            ss_jQuery("#minicart_shipping_options").empty();
            var totalTime = new Date().getTime() - ajaxTime;
            var timeout = 1000 - totalTime;

            setTimeout('ss_jQuery("body").unmask()', timeout);
        }
    });
}


ss_jQuery(function () {

        ss_jQuery("form[action*='order.cgi']").submit(function (event) {
            event.preventDefault();
            var pid = ss_jQuery(this).attr("class").replace("form", "");/*was .attr("id"), changed to class to fix slick clones on homepage touts*/
            var pn = 'product_name_' + pid;
            var product_name = ss_jQuery("input[name='" + pn + "']").val();
            var murl = 'media_url_' + pid;
            var media_url = ss_jQuery("input[name='" + murl + "']").val();
            var pg = 'product_graphic_' + pid;
        var product_image = ss_jQuery("input[name='" + pg + "']").val();
        var pi = (product_image.length > 0) ? true : false;

        var ajaxTime = new Date().getTime();
            var sender = event.target.itemnum.value;
            var scrollTop = ss_jQuery(window).scrollTop();
            var wheight = ss_jQuery(window).height();

            var mpos = scrollTop + Math.round(wheight / 2);

            ss_jQuery('body').mask(window.add_cart_loadmaskphrase, 0, mpos);

            var dataObj = ss_jQuery(this).serializeArray();
            var data = ss_jQuery.param(dataObj, false);

            ss_jQuery.ajax({
                type: "POST",
                cache: false,
                url: "https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&amp;function=show",
                data: data,
                async: true,
                crossDomain: false,
                dataType: 'html',
                success: function (msg) {
                    var ss_jQuerydoc = ss_jQuery(msg);

                    var f_input = ss_jQuerydoc.find("form[name='order']");
            //window.cart_html = ss_jQuerydoc.find("form[name='order']").parent().html();

                    window.cart_data = f_input.serialize();

                    var f_array = f_input.serializeArray();
                    for (var index in f_array) {
                        window.minicart.cart_form_values[index] = f_array[index];
                    }
                    if (ss_jQuerydoc.find('.inv_err').length > 0) {
            window.cart_error = ss_jQuery.trim(ss_jQuerydoc.find('.inv_err td.inv_err').text());

                        ss_jQuery("#cart_message_" + sender).empty();
                        ss_jQuery("#cart_message_" + sender).html(ss_jQuerydoc.find('.inv_err td.inv_err').text());
                        window.minicart.updateMinicart();

                        var totalTime = new Date().getTime() - ajaxTime;
                        var timeout = 1000 - totalTime;

                        ss_jQuery("#cart_message_error").html(window.cart_error);
                        if(pi==true){
                            var image_path = media_url + product_image;
                          ss_jQuery("#cart_message_img").attr("src", image_path);
                          ss_jQuery("#cart_message_img").show();
                        } else{
                          ss_jQuery("#cart_message_img").hide();
                        }

                        ss_jQuery("#cart_message_error").show();
                        ss_jQuery("#cart_message_inner").hide();
                        ss_jQuery("#cart_message_products").empty();

                        ss_jQuery(".loadmask-msg").hide();

                        ss_jQuery( "#cart_message" ).dialog({
                                    autoOpen: false,
                                    height: 300,
                                    width: 400,
                                    modal: true,
                                  //  closeText: "",
                                    buttons: {
                      "Continue Shopping": function() {
                                        ss_jQuery( this ).dialog( "close" );
                                  },
                      "View Cart": function() {
                                        window.location.href = "https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&function=show";
                      }
                  },
                  close: function() {
                    ss_jQuery("body").unmask();
                  }
              });
        ss_jQuery( "#cart_message" ).dialog("open");

                    } else {
                        window.minicart.updateMinicart();

                        var totalTime = new Date().getTime() - ajaxTime;
                        var timeout = 1000 - totalTime;

                        ss_jQuery("#cart_message_error").empty();
                        ss_jQuery("#cart_message_error").hide();
                        ss_jQuery("#cart_message_inner").show();
                        ss_jQuery("#cart_message_products").html(product_name);

                        if(pi==true){
                          var image_path = media_url + product_image;
                          ss_jQuery("#cart_message_img").attr("src", image_path);
                          ss_jQuery("#cart_message_img").show();
                        } else{
                          ss_jQuery("#cart_message_img").hide();
                        }

                        ss_jQuery(".loadmask-msg").hide();

      ss_jQuery( "#cart_message" ).dialog({
                                autoOpen: false,
                                height: 300,
                                width: 400,
                                modal: true,
                                //closeText: "",
                                buttons: {
                                        "Continue Shopping": function() {
                                                ss_jQuery( this ).dialog( "close" );
                                        },
                                        "View Cart": function() {
                                        window.location.href = "https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&function=show";
                    }
                                },
                                close: function() {
                                        ss_jQuery("body").unmask();
                                }
                        });

      ss_jQuery( "#cart_message" ).dialog("open");

                    }
                }
            });

  });

        ss_jQuery("a[href*='function=add']").click(function (event) {
                event.preventDefault();
                var ajaxTime = new Date().getTime();
                var url = event.currentTarget.href;
                var product_name = ss_jQuery(this).attr("title");

                var s_data = url.split('?');
                var data = s_data[1];

                var scrollTop = ss_jQuery(window).scrollTop();
                var wheight = ss_jQuery(window).height();

                var mpos = scrollTop + Math.round(wheight / 2);

                ss_jQuery('body').mask(window.add_cart_loadmaskphrase, 0, mpos);

                ss_jQuery.ajax({
                    type: "GET",
                    cache: false,
                    url: "https://www.vacplus.com/cgi-vacplus/sb/order.cgi",
                    data: data,
                    async: true,
                    crossDomain: false,
                    dataType: 'html',
                    success: function (msg) {
                        var ss_jQuerydoc = ss_jQuery(msg);

                        var f_input = ss_jQuerydoc.find("form[name='order']");

                        window.cart_data = f_input.serialize();

                        var f_array = f_input.serializeArray();
                        for (var index in f_array) {
                            window.minicart.cart_form_values[index] = f_array[index];
                        }
                        if (ss_jQuerydoc.find('.inv_err').length > 0) {
                            ss_jQuery("#cart_message_" + sender).empty();
                            ss_jQuery("#cart_message_" + sender).html(ss_jQuerydoc.find('.inv_err td.inv_err').text());
                            var error_msg = ss_jQuery.trim(ss_jQuery("#cart_message_" + sender).text());
                            alert(error_msg);
                            window.minicart.updateMinicart();
                            var totalTime = new Date().getTime() - ajaxTime;
                            var timeout = 1000 - totalTime;

                            setTimeout('ss_jQuery("body").unmask()', timeout);

                        } else {
                            window.minicart.updateMinicart();

                            ss_jQuery("#cart_message_error").empty();
                            ss_jQuery("#cart_message_error").hide();
                            ss_jQuery("#cart_message_inner").show();
                            ss_jQuery("#cart_message_products").html(product_name);

                            ss_jQuery(".loadmask-msg").hide();

                ss_jQuery( "#cart_message" ).dialog({
                                    autoOpen: false,
                                    height: 300,
                                    width: 400,
                                    modal: true,
                                  //  closeText: "",
                                    buttons: {
                                            "Continue Shopping": function() {
                                                    ss_jQuery( this ).dialog( "close" );
                                            },
                                            "View Cart": function() {
                                            
              window.location.href = "https://www.vacplus.com/cgi-vacplus/sb/order.cgi?storeid=*121deeb48a92086890509d&function=show";
                        }
                                    },
                                    close: function() {
                                            ss_jQuery("body").unmask();
                                    }
                            });

      ss_jQuery( "#cart_message" ).dialog("open");

                        }
                    }
            });

        });
});

</script>
<!-- END MODULE BODY -->

<!--vp bronto commerce-->
<script data-name="__br_tm" type="text/javascript">
  var _bsw = _bsw || [];
  _bsw.push(['_bswId', '4d7f1015da2759b9b3c3081ef7fb302e8cb3dfe15558ada93c0a378ff32878f8']);
  (function() {
    var bsw = document.createElement('script'); bsw.type = 'text/javascript'; bsw.async = true;
    bsw.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'js.bronto.com/c/8izgrt7glchsjjhf8fbz6zc7cwds08rotrvt8n8r62smhobl2s/4d7f1015da2759b9b3c3081ef7fb302e8cb3dfe15558ada93c0a378ff32878f8/s/b.min.js';
    var t = document.getElementsByTagName('script')[0]; t.parentNode.insertBefore(bsw, t);
  })();
</script>
<!--end vp bronto commerce-->
  </body>
  <!--js plugins-->
  <script src="/AE/bower_components/jquery/dist/jquery.min.js"></script>  
  <script src="/AE/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="/AE/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
  <script src="/AE/bootstrap/js/bootstrap.min.js"></script>       
  <script src="/AE/js/jquery.sticky.js" type="text/javascript"></script>
  <!--        <script src="/AE/js/bootstrap-hover-dropdown.min.js"></script>-->
  <script src="/AE/js/jquery.mousewheel.min.js" type="text/javascript"></script>
  <script src="/AE/js/jquery.matchHeight-min.js" type="text/javascript"></script>
  <script src="/AE/js/slick.min.js" type="text/javascript"></script>
  <script src="/AE/js/wow.min.js" type="text/javascript"></script>
  <script src="/AE/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
  <script src="/AE/js/navigation.js" type="text/javascript"></script> 
  <script src="/AE/js/custom.js?v=1.0.1" type="text/javascript"></script>
  <script  src="/AE/js/hoverIntent.js" type="text/javascript"></script>
  <script  src="/AE/js/vp-custom.js" type="text/javascript"></script>
  <script type="text/javascript"> function saLoadScript(src) { var js = window.document.createElement('script'); js.src = src; js.type = 'text/javascript'; document.getElementsByTagName("head")[0].appendChild(js); } saLoadScript('//www.shopperapproved.com/widgets/group2.0/27462.js'); </script>
<script>
    $(document).ready(function(){
      loginReturn("ss_reg_0001549342");  
    });
</script>
</html>
