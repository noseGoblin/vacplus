[-- DEFINE SUBPRODUCT --] [--IF PRODUCT.DisplayPrice--]
<div class="media" align="center">
  <div class="media-left">
    <a href="[-- PRODUCT.MoreInfoURL --]" style="text-decoration:none;" target="_blank">
      <img src="//vacplus.com/media/[-- IMAGE Product.MoreInformationGraphic --]" class="img-responsive" style="min-height:10px; max-height:180px;"
      />
    </a>
    <!--<a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;" target="_blank"><img src="//vacplus.com/media/[-- IMAGE PRODUCT.Graphic --]" width="75" height="75" /></a>-->
    <!--<input type="checkbox" name="itemnum" value="[-- PRODUCT.RECORDNUMBER --]">-->
  </div>
  <div class="media-center">
    <div class="title">
      <a href="[-- PRODUCT.MoreInfoURL --]" target="_blank">[-- PRODUCT.Name --]</a>
    </div>
    <div class="price">
      [-- IF PRODUCT.SaleOn--]
      <del>[--PRODUCT.Price--]</del> [--PRODUCT.SaleAmount--] [--ELSE--] [-- IF PRODUCT.DisplayPrice --] [--PRODUCT.Price--] [--
      END_IF --] [--END_IF--]
    </div>
    <div class="new-win-info">(Clicking this product will display information in a new window.)</div>
  </div>
  <div class="media-right">
    [-- IF PRODUCT.SaleOn--]
    <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
      <input type="hidden" name="storeid" value="[--Store.id--]">
      <input type="hidden" name="dbname" value="products">
      <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
      <input type="hidden" name="function" value="add">
      <div class="add-buttons">
        <label for="btn_att_cart" class="btn-att-cart">
          <span class="hide">Add to Bag</span>
          <!--<input id="btn_att_cart" data-original-title="Add to Bag" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="Add to Bag"  />-->
          <input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block"
            name="Add to Bag" type="submit" value="Add To My Bag" data-original-title="" title="" style="background-color: rgb(40, 177, 29);">
        </label>
      </div>
      <!--<input class="addtocart_button" src="//vacplus.com/images/addtocart.gif" name="Add to Bag" type="image" width="53" height="85" />-->
      [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]
      <!--AJAX CART-->
    </form>
    [--ELSE--] [-- IF PRODUCT.DisplayPrice --]
    <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
      <input type="hidden" name="storeid" value="[--Store.id--]">
      <input type="hidden" name="dbname" value="products">
      <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
      <input type="hidden" name="function" value="add">
      <div class="add-buttons">
        <label for="btn_att_cart" class="btn-att-cart">
          <span class="hide">Add to Bag</span>
          <!--<input id="btn_att_cart" data-original-title="Add to Bag" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="Add to Bag"  />-->
          <input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block"
            name="Add to Bag" type="submit" value="Add To My Bag" data-original-title="" title="" style="background-color: rgb(40, 177, 29);">
        </label>
      </div>
      <!--<input class="addtocart_button" src="//vacplus.com/images/addtocart.gif" name="Add to Bag" type="image" width="53" height="85" />-->
      [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]
      <!--AJAX CART-->
    </form>
    [-- END_IF --] [--END_IF--]
  </div>
</div>
[-- ELSE --]
<span style="display: none;"></span>
[--END_IF--] [-- END_DEFINE SUBPRODUCT --] [-- VAR.Secure "no" --] [-- DEFINE PRODUCT --]
<input type="hidden" class="viewlist" value="[-- PRODUCT.Field13 --]" />
<input type="hidden" class="googleProdCat" value="[-- Product.GoogleProductType --]" />
<style>
  .brand-text {
    color: #989898;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: bold;
    margin-bottom: 5px;
    clear: both;
    line-height: 1em;
    min-height: 1.2em;
    max-height: 1.2em;
  }

  .productLinkName {
    width: 90%;
    font-family: "Lato", sans-serif;
    font-size: 15px;
    line-height: 1.2em;
    min-height: 2.3em;
    max-height: 2.4em;
    margin: 10px 0 15px 0;
    overflow: hidden;
    display: -webkit-box;
    position: relative;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
  }

  .productPricesInfo {
    line-height: 1em;
    /*min-height: 3em;
      max-height: 3em;*/
    margin-top: 8px;
  }

  .productLinkPrice {
    color: #00af47;
  }

  .or {
    color: #000000;
    text-decoration: none;
  }

  /*.productmsrp{
      color:#313131;
    }*/

  /*  Bootstrap Clearfix */

  /*  Tablet  */

  @media (min-width:767px) {
    /* Column clear fix */
    .col-lg-1:nth-child(12n+1),
    .col-lg-2:nth-child(6n+1),
    .col-lg-3:nth-child(4n+1),
    .col-lg-4:nth-child(3n+1),
    .col-lg-6:nth-child(2n+1),
    .col-md-1:nth-child(12n+1),
    .col-md-2:nth-child(6n+1),
    .col-md-3:nth-child(4n+1),
    .col-md-4:nth-child(3n+1),
    .col-md-6:nth-child(2n+1) {
      clear: none;
    }
    .col-sm-1:nth-child(12n+1),
    .col-sm-2:nth-child(6n+1),
    .col-sm-3:nth-child(4n+1),
    .col-sm-4:nth-child(3n+1),
    .col-sm-6:nth-child(2n+1) {
      clear: left;
    }
  }

  /*  Medium Desktop  */

  @media (min-width:992px) {
    /* Column clear fix */
    .col-lg-1:nth-child(12n+1),
    .col-lg-2:nth-child(6n+1),
    .col-lg-3:nth-child(4n+1),
    .col-lg-4:nth-child(3n+1),
    .col-lg-6:nth-child(2n+1),
    .col-sm-1:nth-child(12n+1),
    .col-sm-2:nth-child(6n+1),
    .col-sm-3:nth-child(4n+1),
    .col-sm-4:nth-child(3n+1),
    .col-sm-6:nth-child(2n+1) {
      clear: none;
    }
    .col-md-1:nth-child(12n+1),
    .col-md-2:nth-child(6n+1),
    .col-md-3:nth-child(4n+1),
    .col-md-4:nth-child(3n+1),
    .col-md-6:nth-child(2n+1) {
      clear: left;
    }
  }

  /*  Large Desktop  */

  @media (min-width:1200px) {
    /* Column clear fix */
    .col-md-1:nth-child(12n+1),
    .col-md-2:nth-child(6n+1),
    .col-md-3:nth-child(4n+1),
    .col-md-4:nth-child(3n+1),
    .col-md-6:nth-child(2n+1),
    .col-sm-1:nth-child(12n+1),
    .col-sm-2:nth-child(6n+1),
    .col-sm-3:nth-child(4n+1),
    .col-sm-4:nth-child(3n+1),
    .col-sm-6:nth-child(2n+1) {
      clear: none;
    }
    .col-lg-1:nth-child(12n+1),
    .col-lg-2:nth-child(6n+1),
    .col-lg-3:nth-child(4n+1),
    .col-lg-4:nth-child(3n+1),
    .col-lg-6:nth-child(2n+1) {
      clear: left;
    }
  }
</style>
<!--BEGIN OVERLAY IMAGE JAY 3/2/2018-->
[--IF PRODUCT.DisplayMoreInformationPage--] [--IF PRODUCT.Field14--]
<div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
<a href="[--PRODUCT.MoreInfoURL--]" style="color:#000000; text-decoration:none;">
  <div style="margin:5px 0; min-height:130px; max-height:130px; overflow:hidden; background-image: url(/media/[-- IMAGE PRODUCT.Graphic --]); background-size:130px 130px; background-position: center; background-repeat: no-repeat;">
    <img src="//vacplus.com/media/overlay/[-- PRODUCT.Field14 --]" class="productLinkImg" width="130" height="130" />
  </div>
</a>
[--ELSE--]
<div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
<a href="[--PRODUCT.MoreInfoURL--]" style="color:#000000; text-decoration:none;">
  <div style="margin:5px 0; min-height:130px; max-height:130px; overflow:hidden;">
    <img src="//vacplus.com/media/[-- IMAGE PRODUCT.Graphic --]" class="productLinkImg" width="130" height="130" />
  </div>
</a>
[--END_IF--] [--ELSE--]
<div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
<a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
  <div style="margin:5px 0; min-height:130px; max-height:130px; overflow:hidden;">
    <img src="//vacplus.com/media/[-- IMAGE PRODUCT.Graphic --]" class="productLinkImg" width="130px" height="130px" />
  </div>
</a>
[--END_IF--]
<!--END OVERLAY IMAGE JAY 3/2/2018-->

[--IF PRODUCT.Field48--]
<script>
  j(function () {
    var freeShip = "[--PRODUCT.Field10--]"
    var flagVal = "[--PRODUCT.Field48--]";
    var flagsUp = "";
    if (freeShip.indexOf("free") !== -1) {
      flagsUp += "<span class='icon-truck popup-flag-HOVEROPTION free-ship-flag' data-popuptext='Free Shipping'></span><br><br>"
    } else {
      flagsUp += "<span class='icon-truck popup-flag-noHOVER'></span><br><br>"
    }
    if (flagVal.indexOf("eco") !== -1) {
      flagsUp += "<span class='icon-leaf popup-flag-HOVEROPTION eco-friendly-flag' data-popuptext='Eco-Friendly'></span><br><br>"
    } else {
      flagsUp += "<span class='icon-leaf popup-flag-noHOVER'></span><br><br>"
    }
    if (flagVal.indexOf("popular") !== -1) {
      flagsUp += "<span class='icon-heart popup-flag-HOVEROPTION popular-flag' data-popuptext='Popular'></span><br><br>"
    } else {
      flagsUp += "<span class='icon-heart popup-flag-noHOVER'></span><br><br>"
    }
    if (flagVal.indexOf("energy") !== -1) {
      flagsUp += "<span class='icon-power-cord popup-flag-HOVEROPTION energy-saver-flag' data-popuptext='Energy Saver'></span><br><br>"
    } else {
      flagsUp += "<span class='icon-power-cord popup-flag-noHOVER'></span><br><br>"
    }
    if (flagVal.indexOf("industrial") !== -1) {
      flagsUp += "<span class='icon-wrench popup-flag-HOVEROPTION industrial-flag' data-popuptext='Industrial'></span><br><br>"
    } else {
      flagsUp += "<span class='icon-wrench popup-flag-noHOVER'></span><br><br>"
    }
    j('#flag-[--PRODUCT.sku--]').append(flagsUp);
  });
</script> [--ELSE--] [--IF Product.Field10 "free"--]
<script>
  j('#flag-[--PRODUCT.sku--]').append("<span class='icon-truck popup-flag-HOVEROPTION free-ship-flag' data-popuptext='Free Shipping'></span><br><br>");
</script> [--ELSE--]
<script>
  j('#flag-[--PRODUCT.sku--]').append("<span class='icon-truck popup-flag-noHOVER'></span><br><br>");
</script> [-- END_IF --] [--END_IF--]

<!--<br clear="all" />-->
<div class="productPricesInfo">
  [-- IF PRODUCT.DisplayPrice --] [-- IF PRODUCT.SaleAmount --] [--IF PRODUCT.Field6--]
  <?php
            $price="[--PRODUCT.SaleAmount--]";
            $months="[--PRODUCT.Field6--]";
            $price=ltrim($price, "$");
            $price=str_replace(",", "", $price);
            $price=number_format($price/$months, 2);
            echo ("<span class='price-slider-monthly'><a href='[-- PRODUCT.MoreInfoURL --]'>$".$price."/mo</a></span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: #00af47; text-decoration: none;'>
            <span class='productLinkPrice productLinkPrice2'><span class='or'>or </span>[-- PRODUCT.SaleAmount --]</span></a>");
          ?>
    [--IF PRODUCT.Name--]
    <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
      <div class="productLinkName">[-- PRODUCT.Name --]</div>
    </a>
    [--END_IF--] [--ELSE--] [-- IF PRODUCT.SaleAmount --]
    <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
    <a href='[-- PRODUCT.MoreInfoURL --]' style='color: #00af47; text-decoration: none;'>
      <span class='productLinkPrice productLinkPrice2'>[-- PRODUCT.SaleAmount --]</span>
    </a>
    [--IF PRODUCT.Name--]
    <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
      <div class="productLinkName">[-- PRODUCT.Name --]</div>
    </a>
    [--END_IF--] [--END_IF--] [--END_IF--] [-- ELSE_IF PRODUCT.Price --] [--IF PRODUCT.Field6--]
    <?php
            $price="[-- PRODUCT.Price --]";
            $months="[--PRODUCT.Field6--]";
            $price=ltrim($price, "$");
            $price=str_replace(",", "", $price);
            $price=number_format($price/$months, 2);
            echo ("<span class='price-slider-monthly'><a href='[-- PRODUCT.MoreInfoURL --]'>$".$price."/mo</a></span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: #00af47; text-decoration: none;'>
            <span class='productLinkPrice productLinkPrice2'><span class='or'>or </span>[-- PRODUCT.Price --]</span></a>");
          ?>
      [--IF PRODUCT.Name--]
      <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
      [--END_IF--] [--ELSE--] [-- IF PRODUCT.Price --]
      <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
      <a href='[-- PRODUCT.MoreInfoURL --]' style='color: #00af47; text-decoration: none;'>
        <span class='productLinkPrice productLinkPrice2'>[-- PRODUCT.Price --]</span>
      </a>
      [--IF PRODUCT.Name--]
      <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
      [--END_IF--] [--END_IF--] [--END_IF--] [--ELSE--] [-- IF PRODUCT.Field24 "yes" --]
      <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
        <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="productLinkPrice productLinkPrice2" style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="callforbest">Call for best pricing!</span>
      </a>
      [--IF PRODUCT.Name--]
      <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
      [--END_IF--] [-- ELSE --]
      <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
        <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="productLinkPrice productLinkPrice2" style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="callfordeets">Call for details</span>
      </a>
      [--IF PRODUCT.Name--]
      <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
      [--END_IF--] [-- END_IF --] [-- END_IF --] [--ELSE--]
      <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
        <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="productLinkPrice productLinkPrice2" style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="callfordeets">Call for details</span>
      </a>
      [--IF PRODUCT.Name--]
      <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
      [--END_IF--] [--END_IF--]


      <!-- [--IF PRODUCT.Name--]
      <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
    [--END_IF--] -->

      <!--start add to cart button-->
      [--IF PRODUCT.DisplayPrice--] [--IF PRODUCT.Field3 "local"--]
      <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
        <input type="hidden" name="storeid" value="[--Store.id--]">
        <input type="hidden" name="dbname" value="products">
        <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
        <div class="add-buttons" style="visibility: hidden;">
          <label for="btn_att_cart" class="btn-att-cart">
            <span class="hide">Add to Cart</span>
            <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
            <input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block"
              name="Add to Bag" type="submit" value="Add To Cart" data-original-title="" title="">
          </label>
        </div>
        [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]
        <!--AJAX CART-->
      </form>
      [--ELSE--]
      <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
        <input type="hidden" name="storeid" value="[--Store.id--]">
        <input type="hidden" name="dbname" value="products">
        <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
        <input type="hidden" name="function" value="add">
        <div class="add-buttons">
          <label for="btn_att_cart" class="btn-att-cart">
            <span class="hide">Add to Cart</span>
            <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
            <input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block"
              name="Add to Bag" type="submit" value="Add To Cart" data-original-title="" title="">
          </label>
        </div>
        [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]
        <!--AJAX CART-->
      </form>
      [--END_IF--] [--END_IF--]
      <!--end add to cart button-->

      <div class="star_container [-- PRODUCT.SKU --]"></div>

      <!-- [--IF Product.Field10 "free3day"--]
      <span style="color: #7f5eb3; font-size:10pt;"><strong>Free 3-Day Delivery</strong></span>
    [-- END_IF --]
    [--IF Product.de "nov"--]
      <img src="//vacplus.com/media/promotions/pre-black-friday-sale.jpg">
    [-- END_IF --]
    [--IF Product.Field10 "cyber"--]
      <img src="//vacplus.com/media/promotions/cyber-week-sale.jpg">
    [-- END_IF --]
    [--IF Product.Field10 "nextday"--]
      <span style="color: #30bd3a;"><strong>Free Next Day Air!</strong></span>
    [-- END_IF --] -->
</div>
[-- INCLUDE LexiConnAACSimpleProduct PROCESS --]
<!--AJAX CART-->
[-- END_DEFINE PRODUCT --] [-- DEFINE MORE_INFO_PAGE --]
<?php
    // Start the session
    session_start();
  ?>
  <!DOCTYPE html>
  <!-- test -->
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
    <!-- test product -->
    <html lang="en">

    <head>
      <!--hide async files until loaded-->
      <style>
        .async-hide {
          opacity: 0 !important
        }
      </style>
      <script>
        (function (a, s, y, n, c, h, i, d, e) {        
s.className += ' ' + y; h.start = 1 * new Date;
          h.end = i = function () { s.className = s.className.replace(RegExp(' ?' + y), '') };
          (a[n] = a[n] || []).hide = h; setTimeout(function () { i(); h.end = null }, c); h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000,
          { 'GTM-KTCLFC5': true });
      </script>
      <!--END hide async files until loaded-->
      <!--google analytics-->
      <script>
        (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
          m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-487443-1', 'auto');
        // Optimizely Universal Analytics Integration
        window.optimizely = window.optimizely || [];
        window.optimizely.push("activateUniversalAnalytics");
        ga('require', 'GTM-KTCLFC5');
        ga('send', 'pageview');
      </script>
      <!--END google analytics-->

      <meta charset="ISO-8859-1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!--canonical seo product field-->
      [--IF PRODUCT.Field23--] [--PRODUCT.Field23--] [--END_IF--]
      <!--END canonical seo product field-->

      <style>
        /*AJAX cart popup styles*/

        .ui-dialog-titlebar {
          background-color: #ec010b !important;
        }

        #ui-dialog-title-cart_message {
          color: #fff;
        }
      </style>
      [-- INCLUDE LexiConnAACSimpleHeadDialog PROCESS --]
      <!--AJAX CART-->
      <!-- Start Google Remarketing for Products -->
      <script type="text/javascript">
        var google_tag_params = {
          ecomm_prodid: '[-- PRODUCT.Field13 --]',
          ecomm_pagetype: 'product',
          [--IF PRODUCT.SaleOn--]
          ecomm_totalvalue: '[-- PRODUCT.SaleAmount --]'
          [--ELSE --]
          ecomm_totalvalue: '[-- PRODUCT.Price --]'
          [--END_IF --]
        };
      </script>
      <!-- End Google Remarketing for Products -->

      <!--criteo scripts-->
      <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
      <script type="text/javascript">
        window.criteo_q = window.criteo_q || [];
        var deviceType = /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent) ? "m" : /iPad/.test(navigator.userAgent) ? "t" : "d";
        window.criteo_q.push(
          { event: "setAccount", account: 19481 },
          { event: "setSiteType", type: deviceType },
          { event: "setHashedEmail", email: [""] },
          { event: "viewItem", item: "[-- PRODUCT.Field13 --]" });
      </script>
      <!--END criteo scripts-->

      [--IF PRODUCT.Field22--]
      <title>[--PRODUCT.Field22 REMOVE_HTML--]</title>
      [--ELSE--] [--IF PRODUCT.MoreInformationTitle --]
      <title>[--PRODUCT.MoreInformationTitle REMOVE_HTML --]</title>
      [--ELSE--]
      <title>[-- PRODUCT.Name REMOVE_HTML --]</title>
      [--END_IF--] [--END_IF--] [--IF PRODUCT.MoreInformationMetaKeywords --]
      <meta name="Keywords" content="[-- PRODUCT.MoreInformationMetaKeywords --]" /> [--ELSE--]
      <meta name="Keywords" content="[--Product.Name REMOVE_HTML --]" /> [--END_IF--] [--IF PRODUCT.MoreInformationMetaDescription --]
      <meta name="Description" content="[-- PRODUCT.MoreInformationMetaDescription --]" /> [--ELSE--]
      <meta name="Description" content="[--Product.Name REMOVE_HTML --]" /> [--END_IF--]

      <!--google fonts-->
      <link href="//fonts.googleapis.com/css?family=Lato:400,100,300,700,900,900italic,700italic,400italic|Open+Sans" rel="stylesheet"
        type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
      <!--bootstrap-->
      <link href="/AE/bootstrap/css/bootstrap.css" rel="stylesheet">
      <!--plugins-->
      <link href="/AE/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="/AE/custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">
      <!--<link href="/AE/css/yamm.css" rel="stylesheet">-->
      <!--<link href="/AE/css/navigation.css" rel="stylesheet">-->
      <!--sky form pro css-->
      <link href="/AE/sky-form/css/sky-forms.css" rel="stylesheet">
      <!--custom css file-->
      <link href="/AE/css/fonts.css" rel="stylesheet">
      <link href="/AE/css/style.css?v=1.1" rel="stylesheet">
      <!-- MoreInfo product description custom css -->
      <link href="/AE/css/moreInfo.styles.css" rel="stylesheet">
      <link rel="stylesheet" href="/AE/js/owl/newkyleowl/assets/owl.carousel.css">
      <link rel="stylesheet" href="/AE/js/owl/newkyleowl/assets/owl.theme.default.css" />
      <link rel="stylesheet" href="/AE/js/lightbox/css/lightbox.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style type="text/css">
        .thumbnailoverflow {
          border: 1px solid #CAC8C8;
          height: 80px;
          margin: 5px;
          width: 80px;
          overflow: hidden;
          float: left;
        }

        .thumbnails {
          height: 80px;
        }

        .single-product .single-product-slider {
          padding-bottom: 0px;
        }

        /*popup styles*/

        .well {
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
          display: none;
          margin: 1em;
          max-height: 80%;
          overflow-y: scroll;
          max-width: 65%;
        }

        .well2 {
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
          display: none;
          margin: 1em;
          max-height: 80%;
          overflow-y: scroll;
          max-width: 600px !important;
          padding: 19px;
        }

        #packages #craftsy-pop #local-pop #financing-pop,
        #callouts-pop,
        #lowest-price-pop {
          transform: scale(0.8);
        }

        .popup_visible #packages #craftsy-pop #local-pop #financing-pop {
          transform: scale(1);
        }

        /*craftsy pop styles*/

        #longarmsale {
          display: none;
        }

        #genevent h1 {
          font-size: 26px !important;
          color: #1f698b !important;
          font-weight: normal !important;
          font-family: Georgia, "Times New Roman", Times, serif !important;
          line-height: 27px !important;
        }

        #genevent h3 {
          font-family: Georgia, "Times New Roman", Times, serif !important;
          font-size: 18px !important;
          color: #a91930 !important;
          font-weight: normal !important;
        }

        #geopopup {
          transform: scale(0.8);
        }

        .popup_visible #geopopup {
          transform: scale(1);
        }
      </style>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
      <!--large image field-->
      <?php
        $field5img2 = explode("|", "[-- PRODUCT.Field5 --]");
      ?>
        <meta property="og:site_name" content="VacPlus.com" />
        <meta property="og:image" content="<?php echo " //vacplus.com/media/$field5img2[0] " ?>"/>
        <meta property="og:title" content="[-- PRODUCT.Name --]" />
        <meta property="og:url" content="[-- PRODUCT.MoreInfoURL --]" />
        <meta property="og:description" content="[-- PRODUCT.MoreInformationMetaDescription --]" />
        <meta property="og:type" content="website" />
        <meta itemprop="name" content="[-- PRODUCT.Name --]">
        <meta itemprop="description" content="[-- PRODUCT.MoreInformationMetaDescription --]">
        <meta itemprop="image" content="<?php echo " //vacplus.com/media/$field5img2[0] " ?>">
        <meta name="twitter:card" content="photo">
        <meta name="twitter:title" content="[-- PRODUCT.Name --]">
        <meta name="twitter:url" content="[-- PRODUCT.MoreInfoURL --]">
        <meta name="twitter:description" content="[-- PRODUCT.MoreInformationMetaDescription --]">
        <meta name="twitter:image" content="<?php echo " //vacplus.com/media/$field5img2[0] " ?>">
        <script type="text/javascript" src="//cdn.nextopia.net/v1.5.1/d237f9d9ae7166c0aa227ca5904ff0ee.js" async></script>
        <link type="text/css" rel="stylesheet" href="https://cdn.nextopia.net/v1.5.1/d237f9d9ae7166c0aa227ca5904ff0ee.css">
        <style>
          .share-buttons .share-main-tab {
            z-index: 99999 !important;
          }
        </style>
        <script>
          function popEssentials(url) {
            syncpop = window.open(url, 'name', 'height=600, width=690, top=120, left=650, toolbar=no, menubar=no, location=no, scrollbars=yes');
            if (window.focus) {
              syncpop.focus()
            }
            return false;
          }
        </script>
        <script src="https://cdn.optimizely.com/js/3534250896.js"></script>
        <!-- Hotjar Tracking Code for www.vacplus.com -->
        <script>
          (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 21822, hjsv: 5 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
          })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
        </script>
        <?php
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.stoneedge.net/ShopSite/ShopSite.ashx",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "inv_status=available&serialnum=0000000123&item_total=1&p1sku=[--PRODUCT.SKU--]",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "postman-token: e316e55e-6426-a2da-bb4a-c91978bb74e0"
          ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if (preg_match_all('/\s*([^=]+)=(\S+)\s*/', $response, $matches)) {
          $output = array_combine ( $matches[1], $matches[2] );
        }
      ?>
    </head>

    <body>
      <script>
        var shoppingCartURL = "[--SHOPPING_CART_URL--]";
        /*var liveskuqoh = "<?php echo $output['p1quantity']; ?>";*/
        var liveskuqoh = "5";
        console.log(liveskuqoh);
      </script>
      <div id="brontoBrowseRec" brontoProdId="[--PRODUCT.SKU--]"></div>
      <div class="site-wrap">
        [-- INCLUDE -SMP-svg --]
        <!--header start-->
        <header class="header">
          [-- INCLUDE -VP-header-nav --] [-- INCLUDE -VP-header-minicart PROCESS --]
        </header>
        <!--header end-->
        <div class="cmlla" id="cmlla">
          <!--main start-->
          <main role="main">
            <!-- BEGIN ADD TO CART FORM -->
            <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
              <div id="geopopup" class="container well2" style="background-color:#ffffff; max-width:65%;">
                <p style="text-align:center;font-size:2.0em;">FREE Shipping on orders $49 and up.
                  <p>
                    <img src="//vacplus.com/images/UPS-ship-time-map.gif" style="margin:0 auto 10px;display:block;" />
                    <p>Most orders are processed and shipped same day. Orders placed on Friday after 3pm, Saturday, or Sunday
                      are processed on Monday. Processing and shipping does not take place on weekends or holidays.</p>
                    <p>Within the continental United States (the contiguous 48 states), Shipping is FREE to customers on orders
                      over $49. Orders being shipped to Hawaii, Alaska, Canada, APO's, FPO's and DPO's are not eligible for
                      free shipping. Also, the free shipping policy does not apply to large or heavy items that require special
                      shipping methods.</p>
                    <p>
                      <a class="btn btn-secondary btn-lg geopopup_close" style="background-color:#00af47 !important;" href="#"
                        role="button">Close</a>
                    </p>
              </div>
              <div class="space-20"></div>
              <script src="//vacplus.com/AE/jquery-popup/jquery.popupoverlay.js"></script>








              <div class="row single-product">
                <a name="accessanchor"></a>
                [-- IF PRODUCT.Field47--]
                <!--sale banner field-->
                <div class="col-md-12">
                  <img src="[--PRODUCT.Field47--]" class="img-responsive">
                </div>
                [--END_IF--]




                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                  <div id="product-single" class="single-product-slider">
                    <div class="item">
                      <!-- MEDIUM-SIZED PRODUCT IMAGE GOES HERE -->
                      [-- IF PRODUCT.Field5 --]
                      <?php
                        [-- IF PRODUCT.Field11 --]
                          $field11 = true;
                          $img_title = explode('|', '[-- PRODUCT.Field11 JS_ENCODE --]');
                        [-- ELSE --]
                          $field11 = false;
                          $img_title = '[-- PRODUCT.Name --]';
                        [-- END_IF --]
                        $field5img = explode("|", "[-- PRODUCT.Field5 --]");
                        for($n=0; $n<count($field5img); $n++){
                          $medImgLarge = "/media/" . $field5img[$n];
                          $image = $field5img[$n];
                          $medImgLarge = "/media/" . $field5img[0];
                          /*$pos = strrpos($medImgLarge, '.');
                          $medImg = substr_replace($medImgLarge, '_size2.', $pos, 1);
                          $medImg = substr_replace($medImg, '/resized/', strrpos($medImg, '/'), 1);*/
                          if($field11){
                            $ititle = $img_title[$n];
                          } else{
                            $ititle = $img_title;
                          }
                          if($n==0){
                            echo "<a onclick='startLightbox(); return false;' href='//vacplus.com/media/".$image."' data-title='".$ititle."' ><img class='mediumImage img-responsive' alt='[-- PRODUCT.Name --]' src='https://vacplus.com/".$medImgLarge."' style=\"max-height:400px;\" /></a>";
                            //     echo "<a href='//vacplus.com/media/".$image."' title='".$ititle."' ><img class='mediumImage' // alt='[-- PRODUCT.Name --]' src='".$medImg."' style=\"display: none;\" /></a>";
                          }
                        };
                      ?>
                        [-- ELSE --] [-- IF PRODUCT.MoreInformationGraphic --]
                        <img [-- PRODUCT.MoreInformationGraphic REMOVE_HTML--] border="0"> [--ELSE--]
                        <img src="[-- VAR.MyImages --]/images/more_comingsoon.gif" hspace="0" vspace="0"> [-- END_IF --] [-- END_IF --]
                        <!--360 img-->
                        [-- IF PRODUCT.Field19 "yes"--]
                        <div align="center">
                          <a href="" onclick="javascript:void window.open('//vacplus.com/media/products360/[--PRODUCT.SKU--]/[--PRODUCT.SKU--].html','1413931890203','width=800,height=800,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
                            <img src="//vacplus.com/media/products360/button.jpg" border="0">
                          </a>
                        </div>
                        [--ELSE--] [--END_IF--]
                        <!-- IMAGES BLOCK -->
                        <center>
                          [-- IF PRODUCT.Field5 --]
                          <div class="owl-theme">
                            <div class="owl-controls">
                              <div id="newowldots" class="owl-dots"></div>
                            </div>
                          </div>
                          <div class="owl-carousel">
                            <?
                            $field5img = explode("|", "[-- PRODUCT.Field5 --]");
                            foreach ($field5img as &$image) {
                              $medImg = "media/" . $image;
                              $pos = strrpos($medImg, '.');
                              $medImg = substr_replace($medImg, '_size3.', $pos, 1);
                              $medImg = substr_replace($medImg, '/resized/', strrpos($medImg, '/'), 1);
                              echo "<div class='thumbnailoverflow'>";
                              echo "<a data-lightbox='thumbnailslightbox' href='//vacplus.com/media/".$image."'><img class='thumbnails' alt='[-- PRODUCT.Name --]' src='//vacplus.com/".$medImg."' /></a>";
                              echo "</div>";
                            };
                          ?>
                              [-- ELSE --] (More images coming later.) [-- END_IF --]
                              <!-- END ZOOM + POPUP -->
                        </center>
                        </div>
                    </div>
                  </div>






                  <div id="quickview-sidebar-mobile" class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <!--mobile target sidebar-->
                    <div id="quickview-sidebar" class="top-sidebar col-xs-12">
                      <!--clone this sidebar-->
                  <div class="product-detail-desc">
                    <h4 class="brand">
                      <span>[-- Product.Brand --]</span><span style="float:right;">SKU: [--Product.SKU--]</span>
                    </h4>
                    <!-- PRODUCT TITLE GOES HERE -->
                    <h3 class="title">
                      [-- IF PRODUCT.MoreInformationTitle --]
                        [-- PRODUCT.MoreInformationTitle --]
                      [-- ELSE --]
                        [-- PRODUCT.Name REMOVE_HTML --]
                      [-- END_IF --]
                      <span id="qoh5" class="qoh-alert" style="color:#ec010a; text-transform:none; font-weight:bold; font-size:16px;"></span>
                    </h3>
                    [--IF PRODUCT.Field39--]
                      <span id="sales-text-field">[--PRODUCT.Field39--]</span>
                    [--END_IF--]
                    <!-- BEGIN AddShoppers -->
                    <script type="text/javascript">
                      var js = document.createElement('script'); js.type = 'text/javascript'; js.async = true;
                      js.id = 'AddShoppers';
                      js.src = ('https:' == document.location.protocol ? 'https://shop.pe/widget/' : 'http://cdn.shop.pe/widget/') + 'widget_async.js#5602d9f8a3876472ed906a10';
                      document.getElementsByTagName("head")[0].appendChild(js);
                    </script>
                    <!-- END AddShoppers -->
                    <!--socmed buttons-->
                    <div class="social-buttons">
                      <div style="margin-left:30px;margin-top:5px;">
                        <div class="share-buttons share-buttons-panel" data-style="big" data-counter="false" data-oauth="true" data-hover="false" data-promo-callout="none" data-buttons="facebook,pinterest,twitter,email"></div>
                      </div>
                    </div>
                    <div id="data_4Tell" data-products="[--PRODUCT.SKU--]" data-customer="" data-cart=""></div>
                    <script type="text/javascript">
                      function getCookie(cname) {
                        var name = cname + "=";
                        var ca = document.cookie.split(';');
                        for(var i=0; i<ca.length; i++) {
                          var c = ca[i];
                          while (c.charAt(0)==' ') c = c.substring(1);
                          if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
                        }
                        return "";
                      }
                      var fourTellCookieContents = getCookie("fourtellemail");
                      document.getElementById("data_4Tell").setAttribute("data-customer", fourTellCookieContents);
                    </script>
                    <div id="#price-block">
                      <!--BEGIN PRICING INFO-->
                      [-- IF PRODUCT.DisplayPrice --]
                        [--IF PRODUCT.Field3 "local"--]
                          <p>Local product brah!</p>
                        [--ELSE--]
                          <?php $price=0; $saleprice="[--PRODUCT.SaleAmount--]";?>
                          <div class="price-top price">
                            <div>
                              [-- IF PRODUCT.SaleOn --]
                                <span class="sale-price">Sale: <span>[-- PRODUCT.SaleAmount --]</span></span> <span class="list-price">Reg. <del> [-- PRODUCT.Price --] </del></span>
                                <?php
                                  $listprice = "[-- PRODUCT.Price --]";
                                  $listprice = ltrim($listprice, "$");
                                  $listprice = str_replace(",", "", $listprice);
                                  $saleprice = ltrim($saleprice, "$");
                                  $saleprice = str_replace(",", "", $saleprice);
                                  $saving = $listprice - $saleprice;
                                  $percentage = ($saving / $listprice)*100;
                                  $percentage = number_format($percentage);

                                  if($percentage<100){
                                    echo ("<span class='savings'> Save $".$saving." [".$percentage."%]</span>");
                                  }else{
                                  }

                                  $price="[--PRODUCT.SaleAmount--]";
                                ?>
                              [--ELSE--]
                                <span class="sale-price">Price: [-- PRODUCT.Price --]</span>
                                <?php $price="[--PRODUCT.Price--]"; ?>
                              [-- END_IF --]
                              <!--financing info display and math-->
                              [--IF PRODUCT.Field6--]
                                <?php
                                  $months="[--PRODUCT.Field6--]";
                                  $price=ltrim($price, "$");
                                  $price=str_replace(",", "", $price);
                                  $price=number_format($price/$months, 2);
                                  echo ("<span class='financing-price'>or <span id='financingprice'>$".$price."/ <span>mo 0% Interest!</span></span></span>");
                                ?>
                              [--END_IF--]
                            </div>
                          </div>
                        [--END_IF--]
                      [-- END_IF --]
                    </div>
                    <!--END PRICING INFO-->
                    <!--start stars rating-->
                    <script type="text/javascript">
                      var sa_product = 'smp-4767600101'; function saLoadScript(src) {
                        var js = window.document.createElement("script");
                        js.src = src; js.type = "text/javascript";
                        document.getElementsByTagName("head")[0].appendChild(js); 
                      }
                      saLoadScript('//www.shopperapproved.com/product/21959/'+sa_product+'.js');
                    </script>
                    <div id="product_just_stars" class="small more-info-reviews"></div>
                    <!--end stars rating-->
                    <!--start want by message-->
                    <div class="want-by-message"></div>
                    <script>
                        var weekDate = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                        var monthDate = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                        Date.prototype.addDays = function(days) {
                          var dat = new Date(this.valueOf());
                          dat.setDate(dat.getDate() + days);
                          return dat;
                        }
                        var dat = new Date();
                        var eta = dat.addDays(3);
                        var dotw = weekDate[eta.getDay()];
                        var moty = monthDate[eta.getMonth()];
                        var dotm = eta.getDate();
                        var stock = liveskuqoh;
                        var avail = "[--PRODUCT.Field3--]";
                        if(dotw == "Sunday") {
                          var eta = eta.addDays(1);
                          var dotw = weekDate[eta.getDay()];
                          var moty = monthDate[eta.getMonth()];
                          var dotm = eta.getDate();
                          //alert("Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.");
                          if(stock>0&&avail=='store'){
                            $('.want-by-message').append("<span id=\"wantby-top\" class=\"wantby\">  <span style=\"font-weight:bold;\">Want it "+dotw+", "+moty+" "+dotm+"?</span> Choose <span style=\"font-weight:bold; text-decoration:underline;\">1-3 Day Delivery</span> at checkout.</span>");
                            //$('.shipping a:first').html("<span id=\"wantby-btm\" class=\"wantby\">Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.</span><br>");
                            //$('span.pr_qty').parent().append("<span id=\"wantby-top\" class=\"xmas-delivery\">Choose <span style=\"font-weight:bold;\">Next Day Delivery</span> during checkout to receive before Christmas.</span>");
                          }
                        }else{
                          //alert("Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.");
                          if(stock>0&&avail=='store'){
                            $('.want-by-message').append("<span id=\"wantby-top\" class=\"wantby\">  <span style=\"font-weight:bold;\">Want it "+dotw+", "+moty+" "+dotm+"?</span> Choose <span style=\"font-weight:bold; text-decoration:underline;\">1-3 Day Delivery</span> at checkout.</span>");
                            //$('.shipping a:first').html("<span id=\"wantby-btm\" class=\"wantby\">Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.</span><br>");
                            //$('span.pr_qty').parent().append("<span id=\"wantby-top\" class=\"xmas-delivery\">Choose <span style=\"font-weight:bold;\">Next Day Delivery</span> during checkout to receive before Christmas.</span>");
                          }
                        }
                      </script>
                    <!--end want by message-->
                    <!--start add to cart button-->
                    [--IF PRODUCT.DisplayPrice--]
                      [--IF PRODUCT.Field3 "local"--]
                      [--ELSE--]
                        <!--start order quantity-->
                        [-- IF product.DisplayOrderQuantity? --]
                          <span class="pr_qty">
                            [--STORE.Qty--]:&nbsp;
                            <select name="[--PRODUCT.RECORDNUMBER--]:qnty" id="quantity-selector">
                              <?php
                                $maxqty=$output['p1quantity'];
                                $minqty=1;
                                $i=1;
                                if($maxqty==0){
                                  do{
                                    echo('<option value="'.$i.'">'.$i.'</option> ');
                                    $i++;
                                  }while ($i<=5);
                                }else{
                                  if($maxqty>30){
                                    do{
                                      echo('<option value="'.$i.'">'.$i.'</option> ');
                                      $i++;
                                    }while ($i<=30);
                                  }else{
                                    do{
                                      echo('<option value="'.$i.'">'.$i.'</option> ');
                                      $i++;
                                    }while ($i<=$maxqty);
                                  }
                                }
                              ?>
                            </select>
                          </span>
                        [--END_IF--]
                      <!--end order quantity-->
                        <input type="hidden" name="storeid" value="[--Store.id--]">
                        <input type="hidden" name="dbname" value="products">
                        <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
                        <input type="hidden" name="function" value="add">
                        <div class="add-buttons">
                          <label for="btn_att_cart" class="btn-att-cart">
                            <span class="hide">Add to Cart</span>
                            <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
                            <input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="Add To Cart" data-original-title="" title="">
                          </label>
                          [-- IF Product.Field34 --]<!--live coupons field-->
                            <br/>
                            [-- PRODUCT.Field34 --]
                          [-- END_IF --]
                        </div>
                      [--END_IF--]
                    [--END_IF--]
                    <!--end add to cart button-->
                    [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->

                    <!--start dropdown option menus-->
                    [-- IF PRODUCT.DisplayOrderingOptions --]
                      <div id="pull-down-menus">
                        [-- PRODUCT.OptionText --]
                        <div class="steps clearfix">
                          [--Order_Option_Menu Column--]
                        </div>
                      </div>
                    [-- END_IF --]
                    <!--end dropdown option menus-->
                    <!--start product quick highlights-->
                    [--IF PRODUCT.Field15--]
                      <div id="qh" class="gradient">
                        <h5 style="font-weight:bold;">Product Highlights</h5>
                        <div>
                          [--PRODUCT.Field15--]
                        </div>
                      </div>
                      <div class="qh-trigger qh-closed"></div>
                    [--END_IF--]
                    <!--end product quick highlights-->
                    
                  </div>
                </div>
              </div>
            </div>


            <div style="margin:20px;"></div>
            <!--TABBED CONTENT-->
            <div id="tab" class="tabcordion col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <ul class="tab-nav clearfix">
                <li><a href="#tab1">ABOUT THIS ITEM</a></li>
                [--IF PRODUCT.Field17--]<li><a href="#tab2">VIDEOS</a></li>[--END_IF--]
                [--IF PRODUCT.Field18 "yes"--]<li><a href="#tab3">WARRANTY</a></li>[--END_IF--]
                [-- IF PRODUCT.NumSubProducts 0 --][--ELSE--]<li><a href="#tab4">ACCESSORIES</a></li>[--END_IF--]
              </ul>
  
              <a class="accordion-nav" href="#tab1">ABOUT THIS ITEM</a>
              <div id="tab1" class="tab tabcr-closed">
                  [-- PRODUCT.MoreInformationText --]
              </div>
              [--IF PRODUCT.Field17--]
                <a class="accordion-nav" href="#tab2">VIDEOS</a>
                <div id="tab2" class="tab tabcr-closed">
                  [--PRODUCT.Field17--]
                </div>
              [--END_IF--]
              [--IF PRODUCT.Field18 "yes"--]
                <a class="accordion-nav" href="#tab3">WARRANTY</a>
                <div id="tab3" class="tab tabcr-closed">
                  <div>
                    <script>
                      $('#warranty').ready(function(){
                        var i = $('select').length-1;
                        if(i<0){
                          i=0;
                        }
                        var optionName= "[--Product.Field13--]:finopt:"+i;
                        var optionCountName = "[--Product.Field13--]:finoptnum";
                        var optCount = $('select').length;
                        $('#warrantySelection').attr("name", optionName);
                        $('#optionCount').attr("name", optionCountName);
                        $('#optionCount').val(optCount);
                        [--IF PRODUCT.SaleAmount--]
                          var price="[--PRODUCT.SaleAmount--]";
                          var priceVal = parseFloat(price.replace(/[^0-9-.]/g, '')).toFixed(2);
                          var warrantyPrice= priceVal*.1;
                        [--ELSE--]
                          var price="[--PRODUCT.Price--]";
                          var priceVal = parseFloat(price.replace(/[^0-9-.]/g, '')).toFixed(2);
                          var warrantyPrice= [--PRODUCT.Price--]*.1;
                        [--END_IF--]
                        var optionValue="Add SewingMachinesPlus Platinum Warranty (+$"+warrantyPrice+");+"+warrantyPrice;
                        var optionContent="Add SewingMachinesPlus Platinum Warranty (+$"+warrantyPrice+")";
                        $('#buyWarranty').val(optionValue);
                        $('#buyWarranty').text(optionContent);
                      });
                    </script>
                    <div id="moreInfo">
                      <img src="https://cdn.sewingmachinesplus.com/platinum-protection.jpg" style="float:right !important; max-width:200px;"/>
                      <h2 class="smp23">3 Year Platinum Protection Warranty</h2>
                      <h3>Add on a 3 Year Platinum Protection Warranty to your new machine For 100% Peace Of Mind!</h3>
                      <p>SewingMachinesPlus.com is proud to offer its Platinum Protection Plan, for sewing, embroidery, longarm quilting and overlock machines sold in the U.S.A.</p>
                      <p style="color:#ec010b;">Remember to save your original box for quick and easy shipping.</p>
                      <ul style="line-height:1.5;">
                        <li>NO REPAIR BILLS</li>
                        <li>COVERED PARTS AND LABOR</li>
                        <li>1 YEAR FREE SHIPPING</li>
                        <li>NO DEDUCTIBLE</li>
                        <li>COVERS NORMAL USAGE</li>
                        <li>TRANSFERABLE</li>
                        <li>PEACE OF MIND</li>
                      </ul>
                      <p>Your purchase is not complete until you add the security of a SewingMachinesPlus.com Platinum Protection Plan. You depend on your sewing machine to work hard for you. When a problem arises and repair is required, you need your machine fixed as fast as possible. But then you are faced with a costly repair bill. Are you and your budget prepared? Especially when you have no way of knowing when or how often the machine may need service?</p>
                      <p>Now you can relax. With our SewingMachinesPlus.com Platinum Protection Plan, out-of-pocket expenses are completely eliminated for your sewing machine repairs. The plan guarantees to pay all covered parts &amp; labor beyond the original warranty.</p>
                      <hr class="smp">
                      <h2 class="smp24">Peace of mind protection you can count on</h2>
                      <p style="text-align:center;"><i>Don't put it off! Protect your investment and your pocketbook with affordable coverage.</i></p>
                      <hr class="smp">
                      <h4>Warranty Summary</h4>
                      <ul>
                        <li>This warranty covers parts and labor for 3 years</li>
                        <li>Used under normal home sewing conditions</li>
                        <li>Consumable items not covered (needles, bobbins, bobbin cases, springs and belts)</li>
                        <li>The warranty does not cover improper use, abuse, commercial or industrial use of machines</li>
                        <li>The warranty does not cover flood, fire or other acts of nature</li>
                      </ul>
                      <p style="text-align:center; padding-top:10px;">Call SewingMachinesPlus.com if you have any questions and get the best Platinum Protection Warranty available to protect your sewing machine!</p>
                      <h3 style="text-align:center; font-size:x-large; line-height:1.5; font-weight:bold;">Call <span style="color:#ec010b;">(800) 401-8151 </span><span style="font-size:smaller; font-weight:normal;">and add our</span> 3 Year Platinum Protection Warranty <span style="font-size:smaller; font-weight:normal;">to your machine today!</span></h3>
                    </div>
                  </div>
                </div>
              [--END_IF--]
              [-- IF PRODUCT.NumSubProducts 0 --][--ELSE--]
                <a class="accordion-nav" href="#tab4">ACCESSORIES</a>
                <div id="tab4" class="tab tabcr-closed">
                  <div class="accessories-widget">
                    <h3><span>Need more supplies? Find them below!</span> Just add them to your bag below.</h3>
                    [--LOOP SUBPRODUCTS--]
                      [--SUBPRODUCTS--]
                    [--END_LOOP SUBPRODUCTS--]
                  </div>
                </div>
              [--END_IF--]
            </div>
            <!-- END TABBED CONTENT-->
            <div style="margin:20px;"></div><div style="clear:both; margin:20px;"></div>




            </form><!--end add to cart form-->
          </main>
        </div><!--end cmlla-->
        [-- INCLUDE -VP-mailing-list --]
        [-- INCLUDE -VP-footer --]
      </div><!--end site wrap-->
      [-- INCLUDE LexiConnAACSimpleBody_Dialog PROCESS --]<!--AJAX CART-->
      <script>
        // Initialize the plugin
        $('#packages, #craftsy-pop, #local-pop, #financing-pop, #geopopup, #lowest-price-pop, #callouts-pop').popup({
          transition: 'all 0.3s',
          scrolllock: true
        });
      </script>
      <!-- Start of LiveChat (www.livechatinc.com) code -->
      <script type="text/javascript">
        /*window.__lc = window.__lc || {};
        window.__lc.license = 8753261;
        (function() {
          var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
          lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();*/
      </script>
      <!-- End of LiveChat code -->
      <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5665943"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5665943&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
    </body>
    [-- INCLUDE -VP-AE-js-plugins --]
    <script src="//vacplus.com/AE/js/lightbox/js/lightboxkyle.js"></script>
    <script src="//vacplus.com/AE/js/owl/owl.carousel.js"></script>
    <script>
      function startLightbox(){
        $("a[data-lightbox='thumbnailslightbox']:first").click();
      }
      $('.owl-carousel').owlCarousel({
        margin:10,
        nav:true,
        dotsContainer: '#newowldots',
        responsive:{
          0:{
            items:3
          },
          426:{
            items:5
          },
          525:{
            items:6
          },
          778:{
            items:5
          },
          992:{
            items:6
          },
          1034:{
            items:6
          },
          1399:{
            items:10
          }
        }
      })
    </script>
    <script>
      lightbox.option({
        'showImageNumberLabel': false,
        'alwaysShowNavOnTouchDevices': true,
        'wrapAround': true
      })
    </script>
    <!-- BEGIN: Bronto Cart Abandon Code -->
    <script type="text/javascript">
      var _bsw = _bsw || [];
      _bsw.push(['_bswId', 'a8ab4636c5a9a0b661c43f970b573cb86cec5615a882a5fda052dc5277ff5127']);
      (function() {
        var bsw = document.createElement('script'); bsw.type = 'text/javascript'; bsw.async = true;
        bsw.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'js.bronto.com/s/b.min.js';
        var t = document.getElementsByTagName('script')[0]; t.parentNode.insertBefore(bsw, t);
      })();
    </script>
    <!-- END: Bronto Cart Abandon Code -->
    <script src="https://cdn.bronto.com/bba/bba.js" data-bbaid="55ff0542-adde-4334-99f1-3bed861620e0" async></script>
    <script bronto-popup-id="0ea2bf54-c520-4caa-adc3-28ceeea06625" src="https://cdn.bronto.com/popup/delivery.js"></script>
    <!--4-Tell Recommendations Begin (www.4-tell.com)-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
      _4TellBoost={}; _4TellBoost.jq=jQuery.noConflict(true);
    </script>
    <script type="text/javascript" async src="//4tcdn.blob.core.windows.net/4tjs3/4TellLoader.js?alias=sewingma"></script>
    <!--4-Tell Recommendations End-->
    <!--google analytics was here-->

  </html>
[-- END_DEFINE MORE_INFO_PAGE --]
