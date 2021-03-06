<!-- MM-top-products-->

[-- DEFINE PRODUCT --]
<!--BEGIN OVERLAY IMAGE JAY 3/2/2018-->
[--IF PRODUCT.DisplayMoreInformationPage--]
  [--IF PRODUCT.Field14--]
    <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
    <a href="[--PRODUCT.MoreInfoURL--]" style="color:#000000; text-decoration:none;">
      <div style="margin:5px 0; min-height:130px; max-height:130px; overflow:hidden; background-image: url(/media/[-- IMAGE PRODUCT.Graphic --]); background-size:130px 130px; background-position: center; background-repeat: no-repeat;">
        <img src="//vacplus.com/media/overlay/[-- PRODUCT.Field14 --]" class="productLinkImg" width="130" height="130"/>
      </div>
    </a>
  [--ELSE--]
    <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
    <a href="[--PRODUCT.MoreInfoURL--]" style="color:#000000; text-decoration:none;">
      <div style="margin:5px 0; min-height:130px; max-height:130px; overflow:hidden;">
        <img src="//vacplus.com/media/[-- IMAGE PRODUCT.Graphic --]" class="productLinkImg" width="130" height="130" />
      </div>
    </a>
  [--END_IF--]
[--ELSE--]
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
    (function($){
        var flagValues = "[--PRODUCT.Field48--]";
        var flagsUp = "";
        
        if (flagValues.indexOf("free")!==-1){
          flagsUp+="<span class='icon-truck popup-flag free-ship-flag' data-popuptext='Free Shipping'></span><br><br>";
        }
        if (flagValues.indexOf("air")!==-1){
          flagsUp+="<span class='icon-leaf popup-flag clean-air-flag' data-popuptext='Clean Air'></span><br><br>";
        }
        if (flagValues.indexOf("bag")!==-1){
          flagsUp+="<span class='icon-trash-stroke popup-flag bagless-flag' data-popuptext='Bagless'></span><br><br>";
        }
        if (flagValues.indexOf("remote")!==-1){
          flagsUp+="<span class='icon-remote popup-flag remote-flag' data-popuptext='Remote Control'></span><br><br>";
        }
        if (flagValues.indexOf("cord")!==-1){
          flagsUp+="<span class='icon-power-cord popup-flag cordless-flag' data-popuptext='Cordless'></span><br><br>";
        }
        if (flagValues.indexOf("apparel")!==-1){
          flagsUp+="<span class='icon-apparel popup-flag apparel-flag' data-popuptext='Apparel'></span><br><br>";
        }
        if(flagValues.indexOf("surf")!==-1){
          flagsUp+="<span class='icon-fork popup-flag multi-surface-flag' data-popuptext='Multi-Surface'></span><br><br>";
        }
        if (flagValues.indexOf("pet")!==-1){
          flagsUp+="<span class='icon-pet popup-flag pet-flag' data-popuptext='Pet Purrrfect'></span><br><br>";
        }
        $('#flag-[--PRODUCT.sku--]:empty').append(flagsUp);
      })(jQuery);
  </script>
[--END_IF--]

<div class="title">
[-- IF PRODUCT.Name --]
  <h5 class="slick-prodName-vp" style="max-height:2.6;min-height:2.6;overflow:hidden;"><a href="[-- PRODUCT.MoreInfoURL --]">[-- PRODUCT.Name --]</a></h5>
[-- END_IF --]

  [-- IF PRODUCT.DisplayPrice --]
    [-- IF PRODUCT.SaleAmount --]
      [--IF PRODUCT.Field6--]
        <?php
          $price="[--PRODUCT.SaleAmount--]";
          $months="[--PRODUCT.Field6--]";
          $price=ltrim($price, "$");
          $price=str_replace(",", "", $price);
          $price=number_format($price/$months, 2);
          echo ("<span class='price-slider-monthly'><a href='[-- PRODUCT.MoreInfoURL --]'>$".$price."<span class='black-text'> / mo</span></a></a></span>
          <a href='[-- PRODUCT.MoreInfoURL --]' style='color: #148fff; text-decoration: none;'>
          <span class='productLinkPrice productLinkPrice2'><span class='or'>or </span>[-- PRODUCT.SaleAmount --]</span></a>");
        ?>
      [--ELSE--]
        [-- IF PRODUCT.SaleAmount --]
          <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
          <a href='[-- PRODUCT.MoreInfoURL --]' style='color: #148fff; text-decoration: none;'>
          <span class='productLinkPrice productLinkPrice2'>[-- PRODUCT.SaleAmount --]</span></a>
        [--END_IF--]
      [--END_IF--]
    [-- ELSE_IF PRODUCT.Price --]
      [--IF PRODUCT.Field6--]
        <?php
          $price="[-- PRODUCT.Price --]";
          $months="[--PRODUCT.Field6--]";
          $price=ltrim($price, "$");
          $price=str_replace(",", "", $price);
          $price=number_format($price/$months, 2);
          echo ("<span class='price-slider-monthly'><a href='[-- PRODUCT.MoreInfoURL --]'>$".$price."<span class='black-text'> / mo</span></a></a></span>
          <a href='[-- PRODUCT.MoreInfoURL --]' style='color: #148fff; text-decoration: none;'>
          <span class='productLinkPrice productLinkPrice2'><span class='or'>or </span>[-- PRODUCT.Price --]</span></a>");
        ?>
      [--ELSE--]
        [-- IF PRODUCT.Price --]
          <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
          <a href='[-- PRODUCT.MoreInfoURL --]' style='color: #148fff; text-decoration: none;'>
          <span class='productLinkPrice productLinkPrice2'>[-- PRODUCT.Price --]</span></a>
        [--END_IF--]
      [--END_IF--]
    [--ELSE--]
      [-- IF PRODUCT.Field24 "yes" --]
        <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
        <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="productLinkPrice productLinkPrice2" style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="callforbest">Call for best pricing!</span></a>
      [-- ELSE --]
        <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
        <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="productLinkPrice productLinkPrice2" style="visibility:hidden;">&nbsp;&nbsp;</span>
        <span class="callfordeets">Call for details</span></a>
      [-- END_IF --]
    [-- END_IF --]
  [--ELSE--]
    <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
    <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
    <span class="productLinkPrice productLinkPrice2" style="visibility:hidden;">&nbsp;&nbsp;</span>
    <span class="callfordeets">Call for details</span></a>
  [--END_IF--]

  <!--start add to cart button-->
  [--IF PRODUCT.DisplayPrice--]
    [--IF PRODUCT.Field3 "local"--]
      <div class="add-buttons slick-add-to-cart" style="visibility:hidden;">
        <label for="btn_att_cart" class="btn-att-cart">
          <span class="hide">Add to Cart</span>
          <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
          <input data-toggle="tooltip" data-placement="top" class="btn_att_cart addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="ADD TO CART" data-original-title="" title="">
        </label>
        [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]
      </div>
    [--ELSE--]
      <form class="form[--PRODUCT.RecordNumber--]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
        <input type="hidden" name="storeid" value="[--Store.id--]">
        <input type="hidden" name="dbname" value="products">
        <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
        <input type="hidden" name="function" value="add">
        <div class="add-buttons slick-add-to-cart">
          <label for="btn_att_cart" class="btn-att-cart">
            <span class="hide">Add to Cart</span>
            <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
            <input data-toggle="tooltip" data-placement="top" class="btn_att_cart addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="ADD TO CART" data-original-title="" title="">
          </label>
        </div>
        [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]
      </form>
      <script>
        //fix DOM errors created by slick's cloned forms
        /*var sameItems = $('form#form[--PRODUCT.RecordNumber--]').length;
        if(sameItems>1){
          for(i = 0; i < sameItems; i++){
            var loc = i + 1;
            $('form#form[--PRODUCT.RecordNumber--]').eq(i).attr('id','form[--PRODUCT.RecordNumber--]?'+i);
          }
        }*/
        /*var clonedForms = $('.slick-cloned form').length;
        for(i=0; i<clonedForms; i++){
          var loc = i + 1;
          var pId = $('.slick-cloned:nth-child('+i+') form input[name="itemnum"]').attr('value');
          $('.slick-cloned:nth-child('+i+') form').attr('id','form#'+pId+'?'+i);
        }*/
      </script>
    [--END_IF--]
  [--ELSE--]
    <div class="add-buttons slick-add-to-cart" style="visibility:hidden;">
      <label for="btn_att_cart" class="btn-att-cart">
        <span class="hide">Add to Cart</span>
        <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
        <input data-toggle="tooltip" data-placement="top" class="btn_att_cart addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="ADD TO CART" data-original-title="" title="">
      </label>
    </div>
  [--END_IF--]
  <!--end add to cart button-->

  <div class="star_container [-- PRODUCT.SKU --]"></div>
</div>
  
<script src="https://vacplus.com/AE/jquery-popup/jquery.popupoverlay.js"></script>
<script>
  /*var j = jQuery.noConflict();
  j(document).ready(function() {
    // Initialize the plugin
    j('#callouts-pop').popup({
      transition: 'all 0.3s',
      scrolllock: true
    });
  });*/
</script>
[-- INCLUDE LexiConnAACSimpleProduct PROCESS --]
[-- END_DEFINE PRODUCT --]
