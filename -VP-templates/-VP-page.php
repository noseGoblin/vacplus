<?php
  // Start the session
  session_start();

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
[--DEFINE LINK_TO_PAGE--]
  [--IF PAGE.NumItems 0--]
    [-- IF PAGE.Field1 "no" --]
      <!-- IGNORE PAGE LINK IF IT HAS NO ITEMS AND IS NOT A SUBDIRECTORY -->
    [-- END_IF --]
    [-- IF PAGE.Field1 "yes" --]
      [-- IF VAR.counter "0" --]
        <tr>
      [-- END_IF --]
      [-- VAR.counter INC --]
      <td class="pageLink">
      [--IF PAGE.LinkGraphic--]
        <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]">
          <center>
            <img [-- PAGE.LinkGraphic REMOVE_HTML --] /><br>
            [--PAGE.LinkName--]
          </center>
        </a>
      [--ELSE--]
        <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]">
          <center><b>
            [--PAGE.LinkName--]
          </b></center>
        </a>
      [--END_IF--]
      </td>
      [-- IF VAR.counter "5" --]
        </tr>
        [-- VAR.counter "0" --]
      [-- END_IF --]
    [-- END_IF --]
  [--ELSE--]
    [-- IF VAR.counter "0" --]
      <tr>
    [-- END_IF --]
    [-- VAR.counter INC --]
    <td class="pageLink" cellpadding="5">
    [--IF PAGE.LinkGraphic--]
      <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]">
        <center>
          <img [-- PAGE.LinkGraphic REMOVE_HTML --]><br>
          <b>[--PAGE.LinkName--]</b>
        </center>
      </a>
    [--ELSE--]
      <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]"><center><b>[--PAGE.LinkName--]</b></center></a>
    [--END_IF--]
    </td>
    [-- IF VAR.counter "5" --]
      </tr>
      [-- VAR.counter "0" --]
    [-- END_IF --]
  [--END_IF--]
[--END_DEFINE LINK_TO_PAGE--]


[-- VAR.Secure "no" --]
[-- DEFINE PAGE --]
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--<style>.async-hide { opacity: 0 !important}</style>
    <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
    h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
    (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
    })(window,document.documentElement,'async-hide','dataLayer',4000,
    {'GTM-KTCLFC5':true});</script>-->
    
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    [--IF PAGE.Title --]
      <title>[--PAGE.Title REMOVE_HTML --]</title>
    [--ELSE--]
      <title>[-- PAGE.Name REMOVE_HTML --]</title>
    [--END_IF--]
    [-- IF PAGE.MetaKeywords --]
      <meta name="Keywords" content="[-- PAGE.MetaKeywords --]" />
    [--ELSE--]
      <meta name="Keywords" content="[-- PAGE.Name REMOVE_HTML --]" />
    [--END_IF--]
    [--IF PAGE.MetaDescription --]
      <meta name="Description" content="[-- PAGE.MetaDescription --]" />
    [--ELSE--]
      <meta name="Description" content="[--PAGE.Name REMOVE_HTML --]" />
    [--END_IF--]
    [-- IF PAGE.Field5 --]
      [-- PAGE.Field5 --]
    [--END_IF--]
    <!-- Google Fonts -->
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
    <!-- <link href="/AE/css/vp-custom-page.css" rel="stylesheet"> -->
    <link href="/AE/css/fonts.css" rel="stylesheet">
    <link href="/AE/css/style.css" rel="stylesheet">
    <link href="/AE/js/lightbox/css/lightbox.css" rel="stylesheet">
    <link href="/AE/css/moreInfo.styles.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <meta name="googlebot" content="index,follow">
    <meta name="robots" content="index,follow"> 
    <meta name="rating" content="General" />
    <meta property="og:site_name" content="VacPlus.com"/>
    <meta property="og:image" content="https://vacplus.com/media/facebook/thread2.gif"/>
    <meta property="og:title" content="[--PAGE.Title--]" />
    <meta property="og:description" content="[-- PAGE.MetaDescription --]" />
    <meta property="og:type" content="website" />
    <meta itemprop="name" content="[--PAGE.Title--]">
    <meta itemprop="description" content="[-- PAGE.MetaDescription --]">
    <meta itemprop="image" content="https://vacplus.com/media/facebook/thread2.gif">
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="[--PAGE.Title--]">
    <meta name="twitter:description" content="[-- PAGE.MetaDescription --]">
    <meta name="twitter:image" content="https://vacplus.com/media/facebook/thread2.gif">


    <!--AJAX CART Begin-->
    [-- INCLUDE LexiConnAACSimpleHeadDialog PROCESS --]
    <!--AJAX CART End-->
    <link href="/AE/css/smp-nav.css" rel="stylesheet">
  </head>
<body id="moreInfo">
<script>
  var shoppingCartURL="[--SHOPPING_CART_URL--]";
</script>
<style>
  .well2, .well {
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    display:none;
    margin:1em;
    max-height:80%;
    overflow-y:scroll;
    max-width:600px !important;
    padding:19px;
  }  
  #geopopup, #callouts-pop{
    transform: scale(0.8);
  }
  .popup_visible #geopopup, #callouts-pop{
    transform: scale(1);
  }
</style>

<div class="site-wrap">
  <!--header start-->
  <header class="header">
    [-- INCLUDE -VP-header-nav --]
    [-- INCLUDE -VP-header-minicart PROCESS --]
  </header>
  <!--header end-->
  <div class="cmlla" id="cmlla">

    <!--main start-->
    <main role="main">

    <style type="text/css">
      #expertsewingconsultants {
        text-align:center;
        display:none;
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
        display:block !important;

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
      @media (min-width:768px) and (max-width:1199px) {
         #geolocationshipping {margin-top:10px;}
      }
    </style>



    <div id="geolocationshipping" style="text-align:center;font-size:2.5em;">
      <div id="address"></div>
    </div>
    <script src="https://vacplus.com/AE/jquery-popup/jquery.popupoverlay.js"></script>
    <script>
     var j = jQuery.noConflict();
     j(document).ready(function() {
       // Initialize the plugin
       j('#geopopup, #callouts-pop').popup({
         transition: 'all 0.3s',
         scrolllock: true
       });
     });
    </script>


    <div class="space-20"></div>
    <div class="container">
      <div class="row">
        <div id="promo-banner" style="display:none; color:#fff;">
          <a href="/promotions-clearance.php"><img src="//vacplus.com/media/promotions/2014-october/page-banner.jpg" border="0"></a>
        </div>
        [-- IF PAGE.Field2 --]
          <div align="center">[-- PAGE.Field2 --]</div>
        [--END_IF--]
        [-- IF PAGE.Text1 --]
          <div class="pageText1" style="margin-bottom:20px;">[-- PAGE.Text1 --]</div>
        [-- END_IF --]
        [-- IF PAGE.Field4 --]
          [-- PAGE.Field4 --]
        [--END_IF--]
        [-- IF PAGE.NumLinks 0 --]
        [-- ELSE --]
          <center><table cellpadding="4">
          [-- VAR.counter "0" --]
          [-- LOOP LINKS --]
            [-- LINK --]
          [-- END_LOOP LINKS --]
          </table></center>
          [-- IF VAR.counter "0" --]
          [-- ELSE --]
          [-- END_IF --]
          [-- IF PAGE.NumProducts 0 --]
          [-- ELSE --]
            <br /><hr width="50%" /><br />
          [-- END_IF --]
        [-- END_IF --]
        [--IF PAGE.NumProducts 0 --]
          [--ELSE--]
            <style>
              .flex-parent-product{display:flex; flex-direction:row; flex-wrap:wrap;justify-content:center;}
              .margin-flex-product{width:200px; margin:0; flex:0 1 auto;}
            </style>
            <div class="container">
              <div id="product-section" class="col-sm-12 col-md-9 col-lg-9 flex-parent-product">
                [--LOOP PRODUCTS--]
                  <div id="product-list-grid2" class="margin-flex-product" style="padding:15px 0;" align="center">
                    [--PRODUCT--]
                  </div>
                [--END_LOOP PRODUCTS--]
              </div>
            </div>
          [--END_IF--]
          [-- IF PAGE.Field8 --]
          <hr>
          [-- PAGE.Field8 --]
        [-- END_IF --]
            </div>
          </div>
        [-- IF PAGE.Text3 --]
          [-- PAGE.Text3 --]
        [-- END_IF --]
      </main><!--main end-->
    </div>
  </div><!--end cmlla-->
  [-- INCLUDE -VP-mailing-list --]
  [-- INCLUDE -VP-footer --]
  [-- INCLUDE LexiConnAACSimpleBody_Dialog PROCESS --]<!--AJAX CART-->
<!--vp bronto commerce js-->
    <script data-name="__br_tm" type="text/javascript">
  var _bsw = _bsw || [];
  _bsw.push(['_bswId', '4d7f1015da2759b9b3c3081ef7fb302e8cb3dfe15558ada93c0a378ff32878f8']);
  (function() {
    var bsw = document.createElement('script'); bsw.type = 'text/javascript'; bsw.async = true;
    bsw.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'js.bronto.com/c/8izgrt7glchsjjhf8fbz6zc7cwds08rotrvt8n8r62smhobl2s/4d7f1015da2759b9b3c3081ef7fb302e8cb3dfe15558ada93c0a378ff32878f8/s/b.min.js';
    var t = document.getElementsByTagName('script')[0]; t.parentNode.insertBefore(bsw, t);
  })();
</script>
    <!--end vp bronto commerce js-->
</body>

[-- INCLUDE -VP-AE-js-plugins --]

<script>
    $(document).ready(function(){
      loginReturn("ss_reg_0001549342");  
    });
</script>
<script src="//vacplus.com/AE/js/lightbox/js/lightboxkyle.js"></script>
<script>
  lightbox.option({
    'showImageNumberLabel': false,
    'alwaysShowNavOnTouchDevices': true,
    'wrapAround': true
  })
</script>
<!-- Shopper Approved stars code -->
<script type="text/javascript"> function saLoadScript(src) { var js = window.document.createElement('script'); js.src = src; js.type = 'text/javascript'; document.getElementsByTagName("head")[0].appendChild(js); } saLoadScript('//www.shopperapproved.com/widgets/group2.0/27462.js'); </script>
</html>
[-- END_DEFINE PAGE --]
