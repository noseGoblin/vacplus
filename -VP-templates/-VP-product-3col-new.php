<!--working versions-->
<!--6/13/2018-->
<!--6/15/2018-->
[-- DEFINE SUBPRODUCT --]
<input type="hidden" class="viewlist" value="[-- PRODUCT.Field13 --]" />
<input type="hidden" class="googleProdCat" value="[-- Product.GoogleProductType --]"/>
<style>
  .productLinkName{
    width:90%;
    font-family: "Open Sans", sans-serif;
    font-size: 15px;
    line-height: 1.2;
    min-height: 37px;
    max-height: 40px;
    margin: 10px 0;
    margin-right: 0;
    overflow: hidden;
    display: -webkit-box;
    position: relative;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
  }
  .callfordeets {
    padding: 2px;
    display: table-cell;
    color: #000;
    font-weight: 700;
  }
  span.black-text {
    color: #000;
    font-weight: 400;
  }
  .productPricesInfo{
    line-height: 1;
    /*min-height: 3em;
    max-height: 3em;*/
    margin-top: 8px;
  }
  .productLinkPrice{
    color: #000;
    display: table-cell;
    font-weight: 700;
    padding: 2px;
    background-color: #fff;
  }
  .or{
    color: #000;
    text-decoration: none;
    font-weight: 400;
  }
  /*  Bootstrap Clearfix */
  /*  Tablet  */
  @media (min-width:767px){
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
    .col-md-6:nth-child(2n+1){
      clear: none;
    }
    .col-sm-1:nth-child(12n+1),
    .col-sm-2:nth-child(6n+1),
    .col-sm-3:nth-child(4n+1),
    .col-sm-4:nth-child(3n+1),
    .col-sm-6:nth-child(2n+1){
      clear: left;
    }
  }
  /*  Medium Desktop  */
  @media (min-width:992px){
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
    .col-sm-6:nth-child(2n+1){
      clear: none;
    }
    .col-md-1:nth-child(12n+1),
    .col-md-2:nth-child(6n+1),
    .col-md-3:nth-child(4n+1),
    .col-md-4:nth-child(3n+1),
    .col-md-6:nth-child(2n+1){
      clear: left;
    }
  }
  /*  Large Desktop  */
  @media (min-width:1200px){
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
    .col-sm-6:nth-child(2n+1){
      clear: none;
    }
    .col-lg-1:nth-child(12n+1),
    .col-lg-2:nth-child(6n+1),
    .col-lg-3:nth-child(4n+1),
    .col-lg-4:nth-child(3n+1),
    .col-lg-6:nth-child(2n+1){
      clear: left;
    }
  }
</style>
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

  <!--<br clear="all" />-->
  <div class="productPricesInfo">
    [-- IF PRODUCT.DisplayPrice --]
      [-- IF PRODUCT.SaleAmount --]
        [--IF PRODUCT.Field6--]
          <?php
            $price="[--PRODUCT.SaleAmount--]";
            $months="[--PRODUCT.Field6--]";
            $price=ltrim($price, "$");
            $price=str_replace(",", "", $price);
            $price=number_format($price/$months, 2);
            echo ("<span class='price-slider-monthly'><a href='[-- PRODUCT.MoreInfoURL --]'>$".$price."<span class='black-text'> / mo</span></a></span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: rgb(1, 189, 7); text-decoration: none;'>
            <span class='productLinkPrice productLinkPrice2'><span class='or'>or </span>[-- PRODUCT.SaleAmount --]</span></a>");
          ?>
          [--IF PRODUCT.Name--]
            <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
              <div class="productLinkName">[-- PRODUCT.Name --]</div>
            </a>
          [--END_IF--]
        [--ELSE--]
          [-- IF PRODUCT.SaleAmount --]
            <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: rgb(1, 189, 7); text-decoration: none;'>
            <span class='productLinkPrice productLinkPrice2'>[-- PRODUCT.SaleAmount --]</span></a>
            [--IF PRODUCT.Name--]
              <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
                <div class="productLinkName">[-- PRODUCT.Name --]</div>
              </a>
            [--END_IF--]
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
            echo ("<span class='price-slider-monthly'><a href='[-- PRODUCT.MoreInfoURL --]'>$".$price."<span class='black-text'> / mo</span></a></span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: rgb(1, 189, 7); text-decoration: none;'>
            <span class='productLinkPrice productLinkPrice2'><span class='or'>or </span>[-- PRODUCT.Price --]</span></a>");
          ?>
          [--IF PRODUCT.Name--]
            <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
              <div class="productLinkName">[-- PRODUCT.Name --]</div>
            </a>
          [--END_IF--]
        [--ELSE--]
          [-- IF PRODUCT.Price --]
            <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: rgb(1, 189, 7); text-decoration: none;'>
            <span class='productLinkPrice productLinkPrice2'>[-- PRODUCT.Price --]</span></a>
            [--IF PRODUCT.Name--]
              <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
                <div class="productLinkName">[-- PRODUCT.Name --]</div>
              </a>
            [--END_IF--]
          [--END_IF--]
        [--END_IF--]
      [--ELSE--]
        [-- IF PRODUCT.Field24 "yes" --]
          <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
          <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
          <span class="productLinkPrice productLinkPrice2" style="display:none; visibility:hidden;"></span>
          <span class="callforbest">Call for best pricing!</span></a>
          [--IF PRODUCT.Name--]
            <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
              <div class="productLinkName">[-- PRODUCT.Name --]</div>
            </a>
          [--END_IF--]
        [-- ELSE --]
          <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
          <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
          <span class="productLinkPrice productLinkPrice2" style="display:none; visibility:hidden;"></span>
          <span class="callfordeets">Call for details</span></a>
          [--IF PRODUCT.Name--]
            <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
              <div class="productLinkName">[-- PRODUCT.Name --]</div>
            </a>
          [--END_IF--]
        [-- END_IF --]
      [-- END_IF --]
    [--ELSE--]
      <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
      <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
      <span class="productLinkPrice productLinkPrice2" style="display:none; visibility:hidden;"></span>
      <span class="callfordeets">Call for details</span></a>
      [--IF PRODUCT.Name--]
        <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
          <div class="productLinkName">[-- PRODUCT.Name --]</div>
        </a>
      [--END_IF--]
    [--END_IF--]


    <!--start add to cart button-->
    [--IF PRODUCT.DisplayPrice--]
      [--IF PRODUCT.Field3 "local"--]
        <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
          <input type="hidden" name="storeid" value="[--Store.id--]">
          <input type="hidden" name="dbname" value="products">
          <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
          <input type="hidden" name="function" value="add">
          <div class="add-buttons slick-add-to-cart" style="display:block; visibility:hidden;">
            <label for="btn_att_cart" class="btn-att-cart">
              <span class="hide">Add to Cart</span>
              <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
              <input data-toggle="tooltip" data-placement="top" class="btn_att_cart addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="ADD TO CART" data-original-title="" title="">
            </label>
          </div>
          [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
        </form>
      [--ELSE--]
        <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
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
          [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
        </form>
      [--END_IF--]
    [--END_IF--]
    <!--end add to cart button-->
    <div class="star_container [-- PRODUCT.SKU --]"></div>
  </div>
[-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
[-- END_DEFINE SUBPRODUCT --]


[-- VAR.Secure "no" --]
[-- DEFINE PRODUCT --]
  <input type="hidden" class="viewlist" value="[-- PRODUCT.Field13 --]" />
  <input type="hidden" class="googleProdCat" value="[-- Product.GoogleProductType --]"/>
  <style>
    .productLinkName{
      width:90%;
      font-family: "Open Sans", sans-serif;
      font-size: 15px;
      line-height: 1.2;
      min-height: 37px;
      max-height: 40px;
      margin: 10px 0;
      margin-right: 0;
      overflow: hidden;
      display: -webkit-box;
      position: relative;
      text-overflow: ellipsis;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 2;
    }
    .callfordeets {
      padding: 2px;
      display: table-cell;
      color: #000;
      font-weight: 700;
    }
    span.black-text {
      color: #000;
      font-weight: 400;
    }
    .productPricesInfo{
      line-height: 1em;
      /*min-height: 3em;
      max-height: 3em;*/
      margin-top: 8px;  
    }
    .productLinkPrice{
      color: #000;
      display: table-cell;
      font-weight: 700;
      padding: 2px;
      background-color: #fff;
    }
    .or{
      color: #000;
      text-decoration: none;
      font-weight: 400;
    }
    /*  Bootstrap Clearfix */
    /*  Tablet  */
    @media (min-width:767px){
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
      .col-md-6:nth-child(2n+1){
        clear: none;
      }
      .col-sm-1:nth-child(12n+1),
      .col-sm-2:nth-child(6n+1),
      .col-sm-3:nth-child(4n+1),
      .col-sm-4:nth-child(3n+1),
      .col-sm-6:nth-child(2n+1){
        clear: left;
      }
    }
      /*  Medium Desktop  */
      @media (min-width:992px){
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
      .col-sm-6:nth-child(2n+1){
        clear: none;
      }
      .col-md-1:nth-child(12n+1),
      .col-md-2:nth-child(6n+1),
      .col-md-3:nth-child(4n+1),
      .col-md-4:nth-child(3n+1),
      .col-md-6:nth-child(2n+1){
        clear: left;
      }
    }
      /*  Large Desktop  */
      @media (min-width:1200px){
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
      .col-sm-6:nth-child(2n+1){
        clear: none;
      }
      .col-lg-1:nth-child(12n+1),
      .col-lg-2:nth-child(6n+1),
      .col-lg-3:nth-child(4n+1),
      .col-lg-4:nth-child(3n+1),
      .col-lg-6:nth-child(2n+1){
        clear: left;
      }
    }
  </style>
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
        <img s rc="//vacplus.com/media/[-- IMAGE PRODUCT.Graphic --]" class="productLinkImg" width="130px" height="130px" />
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

  <!--<br clear="all" />-->
  <div class="productPricesInfo">
    [-- IF PRODUCT.DisplayPrice --]
      [-- IF PRODUCT.SaleAmount --]
        [--IF PRODUCT.Field6--]
          <?php
            $price="[--PRODUCT.SaleAmount--]";
            $months="[--PRODUCT.Field6--]";
            $price=ltrim($price, "$");
            $price=str_replace(",", "", $price);
            $price=number_format($price/$months, 2);
            echo ("<span class='price-slider-monthly'><a href='[-- PRODUCT.MoreInfoURL --]'>$".$price."<span class='black-text'> / mo</span></a></span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: rgb(1, 189, 7); text-decoration: none;'>
            <span class='productLinkPrice productLinkPrice2'><span class='or'>or </span>[-- PRODUCT.SaleAmount --]</span></a>");
          ?>
          [--IF PRODUCT.Name--]
            <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
              <div class="productLinkName">[-- PRODUCT.Name --]</div>
            </a>
          [--END_IF--]
        [--ELSE--]
          [-- IF PRODUCT.SaleAmount --]
            <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: rgb(1, 189, 7); text-decoration: none;'>
              <span class='productLinkPrice productLinkPrice2'>[-- PRODUCT.SaleAmount --]</span>
            </a>
            [--IF PRODUCT.Name--]
              <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
                <div class="productLinkName">[-- PRODUCT.Name --]</div>
              </a>
            [--END_IF--]
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
            echo ("<span class='price-slider-monthly'><a href='[-- PRODUCT.MoreInfoURL --]'>$".$price."<span class='black-text'> / mo</span></a></span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: rgb(1, 189, 7); text-decoration: none;'>
            <span class='productLinkPrice productLinkPrice2'><span class='or'>or </span>[-- PRODUCT.Price --]</span></a>");
          ?>
          [--IF PRODUCT.Name--]
            <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
              <div class="productLinkName">[-- PRODUCT.Name --]</div>
            </a>
          [--END_IF--]
        [--ELSE--]
          [-- IF PRODUCT.Price --]
            <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
            <a href='[-- PRODUCT.MoreInfoURL --]' style='color: rgb(1, 189, 7); text-decoration: none;'>
              <span class='productLinkPrice productLinkPrice2'>[-- PRODUCT.Price --]</span>
            </a>
            [--IF PRODUCT.Name--]
              <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
                <div class="productLinkName">[-- PRODUCT.Name --]</div>
              </a>
            [--END_IF--]
          [--END_IF--]
        [--END_IF--]
      [--ELSE--]
        [-- IF PRODUCT.Field24 "yes" --]
          <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
          <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
          <span class="productLinkPrice productLinkPrice2" style="display:none; visibility:hidden;"></span>
          <span class="callforbest">Call for best pricing!</span></a>
          [--IF PRODUCT.Name--]
            <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
              <div class="productLinkName">[-- PRODUCT.Name --]</div>
            </a>
          [--END_IF--]
        [-- ELSE --]
          <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
          <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
          <span class="productLinkPrice productLinkPrice2" style="display:none; visibility:hidden;"></span>
          <span class="callfordeets">Call for details</span></a>
          [--IF PRODUCT.Name--]
            <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
              <div class="productLinkName">[-- PRODUCT.Name --]</div>
            </a>
          [--END_IF--]
        [-- END_IF --]
      [-- END_IF --]
    [--ELSE--]
      <a href='[-- PRODUCT.MoreInfoURL --]' style="color: #000000; text-decoration: none;">
      <span class='price-slider-monthly' style="visibility:hidden;">&nbsp;&nbsp;</span>
      <span class="productLinkPrice productLinkPrice2" style="display:none; visibility:hidden;"></span>
      <span class="callfordeets">Call for details</span></a>
      [--IF PRODUCT.Name--]
        <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
          <div class="productLinkName">[-- PRODUCT.Name --]</div>
        </a>
      [--END_IF--]
    [--END_IF--]

    <!--start add to cart button-->
    [--IF PRODUCT.DisplayPrice--]
      [--IF PRODUCT.Field3 "local"--]
        <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
          <input type="hidden" name="storeid" value="[--Store.id--]">
          <input type="hidden" name="dbname" value="products">
          <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
          <div class="add-buttons" style="visibility: hidden;">
            <label for="btn_att_cart" class="btn-att-cart">
              <span class="hide">Add to Cart</span>
              <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
              <input data-toggle="tooltip" data-placement="top" class="btn_att_cart addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="ADD TO CART" data-original-title="" title="">
            </label>
          </div>
          [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
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
              <input data-toggle="tooltip" data-placement="top" class="btn_att_cart addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="ADD TO CART" data-original-title="" title="">
            </label>
          </div>
          [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
        </form>
      [--END_IF--]
    [--END_IF--]
    <!--end add to cart button-->    
    <div class="star_container [-- PRODUCT.SKU --]"></div>
  </div>
  [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
[-- END_DEFINE PRODUCT --]





[-- DEFINE MORE_INFO_PAGE --]
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
    <style>.async-hide { opacity: 0 !important}</style>
    <script>
      (function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
      h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
      (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
      })(window,document.documentElement,'async-hide','dataLayer',4000,
      {'GTM-KTCLFC5':true});
    </script>
    <!--END hide async files until loaded-->

    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--canonical seo product field-->
    [--IF PRODUCT.Field23--]
      [--PRODUCT.Field23--]
    [--END_IF--]
    <!--END canonical seo product field-->
    <style>
      /*AJAX cart popup styles*/
      .ui-dialog-titlebar{
        background-color:#ec010b !important;
      }
      #ui-dialog-title-cart_message{
        color:#fff;
      }
    </style>
    [-- INCLUDE LexiConnAACSimpleHeadDialog PROCESS --]<!--AJAX CART-->
    
    [--IF PRODUCT.Field22--]
      <title>[--PRODUCT.Field22 REMOVE_HTML--]</title>
    [--ELSE--]
      [--IF PRODUCT.MoreInformationTitle --]
        <title>[--PRODUCT.MoreInformationTitle REMOVE_HTML --]</title>
      [--ELSE--]
        <title>[-- PRODUCT.Name REMOVE_HTML --]</title>
      [--END_IF--]
    [--END_IF--]

    [--IF PRODUCT.MoreInformationMetaKeywords --]
      <meta name="Keywords" content="[-- PRODUCT.MoreInformationMetaKeywords --]" />
    [--ELSE--]
      <meta name="Keywords" content="[--Product.Name REMOVE_HTML --]" />
    [--END_IF--]
    [--IF PRODUCT.MoreInformationMetaDescription --]
      <meta name="Description" content="[-- PRODUCT.MoreInformationMetaDescription --]" />
    [--ELSE--]
      <meta name="Description" content="[--Product.Name REMOVE_HTML --]" />
    [--END_IF--]

    <!--google fonts-->
    <link href="//fonts.googleapis.com/css?family=Lato:400,100,300,700,900,900italic,700italic,400italic|Open+Sans" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <!--bootstrap-->
    <link href="/AE/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--plugins-->
    <link href="/AE/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/AE/custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">
    <!--<link href="/AE/css/yamm.css" rel="stylesheet">-->
    <!--<link href="/AE/css/navigation.css" rel="stylesheet">-->
    <link rel="stylesheet" href="/AE/css/swiper.css">
    <!--sky form pro css-->
    <link href="/AE/sky-form/css/sky-forms.css" rel="stylesheet">
    <!--custom css file-->
    <link href="/AE/css/vp-fonts.css" rel="stylesheet">
    <link href="/AE/css/style.css?v=1.2" rel="stylesheet">
    <!-- MoreInfo product description custom css -->
    <link rel="stylesheet" href="/AE/js/owl/newkyleowl/assets/owl.carousel.css">
    <link rel="stylesheet" href="/AE/js/owl/newkyleowl/assets/owl.theme.default.css"/>
    <link rel="stylesheet" href="/AE/js/lightbox/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="/AE/css/moreInfo.styles.css">
    <link rel="stylesheet" type="text/css" href="/AE/css/vp-custom.css">
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
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        display:none;
        margin:1em;
        max-height:80%;
        overflow-y:scroll;
        max-width:65%;
      }
      .well2 {
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        display:none;
        margin:1em;
        max-height:80%;
        overflow-y:scroll;
        max-width:600px !important;
        padding:19px;
      }
      #packages #craftsy-pop #local-pop #financing-pop, #callouts-pop, #lowest-price-pop{
        transform: scale(0.8);
      }
      .popup_visible #packages #craftsy-pop #local-pop #financing-pop{
        transform: scale(1);
      }
      /*craftsy pop styles*/
      #longarmsale {
        display:none;
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
      #geopopup{
        transform: scale(0.8);
      }
      .popup_visible #geopopup{
        transform: scale(1);
      }
      .mediumImage{
        max-height:400px;
        margin:0 auto;
      }
      div.owl-theme{
        display:none;
      }
      @media(max-width:767px){
        div.owl-theme, div.owl-carousel{
          display:none!important;
        }
      }
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <!--large image field-->
    <?php
      $field5img2 = explode("|", "[-- PRODUCT.Field5 --]");
    ?>
    <meta property="og:site_name" content="VacPlus.com"/>
    <meta property="og:image" content="<?php echo "//vacplus.com/media/$field5img2[0]" ?>"/>
    <meta property="og:title" content="[-- PRODUCT.Name --]" />
    <meta property="og:url" content="[-- PRODUCT.MoreInfoURL --]" />
    <meta property="og:description" content="[-- PRODUCT.MoreInformationMetaDescription --]" />
    <meta property="og:type" content="website" />
    <meta itemprop="name" content="[-- PRODUCT.Name --]">
    <meta itemprop="description" content="[-- PRODUCT.MoreInformationMetaDescription --]">
    <meta itemprop="image" content="<?php echo "//vacplus.com/media/$field5img2[0]" ?>">
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="[-- PRODUCT.Name --]">
    <meta name="twitter:url" content="[-- PRODUCT.MoreInfoURL --]">
    <meta name="twitter:description" content="[-- PRODUCT.MoreInformationMetaDescription --]">
    <meta name="twitter:image" content="<?php echo "//vacplus.com/media/$field5img2[0]" ?>">
    <script type="text/javascript" src="//cdn.nextopia.net/v1.5.1/d237f9d9ae7166c0aa227ca5904ff0ee.js" async></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.nextopia.net/v1.5.1/d237f9d9ae7166c0aa227ca5904ff0ee.css">
    <style>
      .share-buttons .share-main-tab{
        z-index:99999 !important;
      }
      span.sale-price{
        margin-bottom:10px;
        white-space: pre-line;
      }
      @media(max-width:767px){
        #price-block{
          text-align:left;
        }
      }
    </style>
    <script>
      function popEssentials(url) {
        syncpop=window.open(url,'name','height=600, width=690, top=120, left=650, toolbar=no, menubar=no, location=no, scrollbars=yes');
        if (window.focus) {
          syncpop.focus()
        }
        return false;
      }
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
  <body id="moreInfo">
    <script>
      var shoppingCartURL="[--SHOPPING_CART_URL--]";
      /*var liveskuqoh = "<?php echo $output['p1quantity']; ?>";*/
      var liveskuqoh = "5";
      console.log(liveskuqoh);
    </script>
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
          <!-- BEGIN ADD TO CART FORM -->
          <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post"> 
            <div id="geopopup" class="container well2" style="background-color:#ffffff; max-width:65%;">
              <p style="text-align:center;font-size:2.0em;">FREE Shipping on orders $49 and up.<p>
              <img src="//vacplus.com/images/UPS-ship-time-map.gif" style="margin:0 auto 10px;display:block;"/>
              <p>Most orders are processed and shipped same day. Orders placed on Friday after 3pm, Saturday, or Sunday are processed on Monday. Processing and shipping does not take place on weekends or holidays.</p>
              <p>Within the continental United States (the contiguous 48 states), Shipping is FREE to customers on orders over $49. Orders being shipped to Hawaii, Alaska, Canada, APO's, FPO's and DPO's are not eligible for free shipping. Also, the free shipping policy does not apply to large or heavy items that require special shipping methods.</p>
              <p><a class="btn btn-secondary btn-lg geopopup_close" style="background-color:rgb(1, 189, 7) !important;" href="#" role="button">Close</a></p>
            </div>
            <div class="space-20"></div>
            <script src="//vacplus.com/AE/jquery-popup/jquery.popupoverlay.js"></script>

            <div class="row single-product">
              <a name="accessanchor"></a>
              [-- IF PRODUCT.Field47--]<!--sale banner field-->
                <div class="col-md-12">
                  <img src="[--PRODUCT.Field47--]" class="img-responsive">
                </div>
              [--END_IF--]

              <div class="col-lg-12 col-sm-12  col-md-12 col-xs-12">
                <div class="col-lg-8 col-sm-7 col-md-7 col-xs-12">
                  <div class="desktop-title">
                    <h4 class="brand">
                      <span>[-- Product.Brand --]</span><span style="float:right;">SKU: [--Product.SKU--]</span>
                    </h4>

                          
                    <!-- BEGIN AddShoppers -->
                    <script type="text/javascript">
                      var js = document.createElement('script');
                      js.type = 'text/javascript';
                      js.async = true;
                      js.id = 'AddShoppers';
                      js.src = ('https:' == document.location.protocol ? 'https://shop.pe/widget/' : 'http://cdn.shop.pe/widget/') +
                      'widget_async.js#5602d9f8a3876472ed906a10';
                      document.getElementsByTagName("head")[0].appendChild(js);
                    </script>
                    <!-- END AddShoppers -->
                    <div class="social-col" style="padding:0;">
                      <!--socmed buttons-->
                      <div class="social-buttons" style="padding:0;">
                        <div class="social-buttons-inside">
                          <div class="share-buttons share-buttons-panel" data-style="big" data-counter="false" data-oauth="true" data-hover="false" data-promo-callout="none" data-buttons="facebook,pinterest,twitter,email"></div>
                        </div>
                      </div>
                      <!--end socmed buttons-->
                    </div>
                    <h3 class="title">
                      [-- IF PRODUCT.MoreInformationTitle --]
                        [-- PRODUCT.MoreInformationTitle --]
                      [-- ELSE --]
                        [-- PRODUCT.Name REMOVE_HTML --]
                      [-- END_IF --]
                      <span id="qoh5" class="qoh-alert" style="color:#ec010a; text-transform:none; font-weight:bold; font-size:16px;"></span>
                    </h3>
                    <!--start stars rating-->
                    <script type="text/javascript">
                      var sa_product = '[-- PRODUCT.SKU --]';
                      function saLoadScript(src) {
                        var js = window.document.createElement("script");
                        js.src = src; js.type = "text/javascript";
                        document.getElementsByTagName("head")[0].appendChild(js);
                      }
                      saLoadScript('//www.shopperapproved.com/product/21959/'+sa_product+'.js');
                    </script>
                    <div id="product_just_stars" class="small more-info-reviews" style="display:inline-block; padding:0;"></div>
                    <!--end stars rating-->
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><!--sm3 md3 lg4-->
                    [--IF PRODUCT.DisplayMoreInformationPage--]
                      [--IF PRODUCT.Field14--]
                        <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
                      [--ELSE--]
                        <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
                      [--END_IF--]
                    [--ELSE--]
                      <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
                      </a>
                    [--END_IF--]
                    <!--END OVERLAY IMAGE JAY 3/2/2018-->
                      

                    <!--swiper carousel-->
                    <div class="swiper-container">
                      <div class="swiper-wrapper">
                      </div>
                      <div class="swiper-pagination"></div>
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                    </div>


                    [--IF PRODUCT.Field5--]<!--if larger image field-->
                      [--IF PRODUCT.Field11--]<!--if image titles field-->
                        <script>
                          var field11 = true;
                          var img_title_content = "[--PRODUCT.Field11--]";
                          var img_title = img_title_content.split("|");
                        </script>
                      [--ELSE--]
                        <script>
                          var field11 = false;
                          var img_title = "[--PRODUCT.Name--]";
                        </script>
                      [--END_IF--]
                      <script>
                        var field5img_content = "[--PRODUCT.Field5--]";
                        var field5img = field5img_content.split("|");
                        for(i=0; i<field5img.length; i++){
                          var x = field5img[i].lastIndexOf('/');
                          var medImg = field5img[i].substring(0,x)+"/resized"+field5img[i].substring(x);
                          var y = medImg.lastIndexOf('.');
                          medImg = medImg.substring(0,y)+"_size2"+medImg.substring(y);
                          $('div.swiper-wrapper').append('<div onclick="startLightbox(this); return false;" class="swiper-slide" style="text-align:center;"><img class="mediumImage img-responsive" src="/media/'+field5img[i]+'"></div><a data-lightbox="product-gallery" href="//vacplus.com/media/'+field5img[i]+'"></a>');
                        }
                      </script>
                    [--ELSE--]
                      [-- IF PRODUCT.MoreInformationGraphic --]                            
                        <div align="center">
                          <a rel="lightbox[product-mediumImage columns='3' modal='no' filter='no']" href='//vacplus.com/media/[-- IMAGE Product.MoreInformationGraphic --]' data-title='[-- PRODUCT.Name --]' ><img class='mediumImage img-responsive mid' alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' [-- PRODUCT.MoreInformationGraphic REMOVE_HTML--] style="max-height:400px;" /></a>
                        </div>
                      [--ELSE--]
                        <div align="center">
                          <a rel="lightbox[product-noImage columns='3' modal='no' filter='no']" href='//vacplus.com/media/images/more_comingsoon.png' data-title='[-- PRODUCT.Name --]' ><img class="mediumImage img-responsive mid" alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' src="//vacplus.com/media/images/more_comingsoon.png" hspace="0" vspace="0" style="max-height:400px;"></a>
                        </div>
                      [-- END_IF --]
                    [--END_IF--]
                    <!--thumbnail navigation-->
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
                              echo "<img class='thumbnails' alt='[-- PRODUCT.Name --]' src='//vacplus.com/".$medImg."' />";
                              echo "</div>";
                            };
                          ?>
                          <script>
                            $('img.thumbnails').on('click touchstart',function(event){
                              var index = $(this).parent().parent().index();
                              $('span.swiper-pagination-bullet:eq('+index+')').click();
                            })

                            function startLightbox(a){
                              var index = $(a).index('.swiper-slide');
                              index = index-1;
                              console.log(index);
                              if(window.innerWidth>767){
                                $("a[data-lightbox='product-gallery']:eq("+index+")").click();
                              }
                            }
                          </script>
                      [-- ELSE --]
                        (More images coming later.)
                      [-- END_IF --]
                      <!-- END ZOOM + POPUP -->
                    </center>
                    <!--360 img-->
                    [-- IF PRODUCT.Field19 "yes"--]
                      <div align="center">
                        <a href="" onclick="javascript:void window.open('//vacplus.com/media/products360/[--PRODUCT.SKU--]/[--PRODUCT.SKU--].html','1413931890203','width=800,height=800,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><img src="//vacplus.com/media/products360/button.jpg" border="0"></a>
                      </div>
                    [--ELSE--]
                    [--END_IF--]
                    <!--end swiper carousel-->


                  </div>
                  <style>
                    @media(max-width:767px){
                      #qh{display:none;}
                    }
                  </style>

                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><!--sm3 md3 lg4-->
                    <!--start product quick highlights-->
                    [--IF PRODUCT.Field15--]
                      <div id="qh" class="gradient" style="border-top:0px;">
                        <h4 style="font-weight:bold;">Product Highlights</h4>
                        <div>
                          [--PRODUCT.Field15--]
                        </div>
                      </div>
                      <div class="qh-trigger qh-closed"></div>
                    [--END_IF--]
                    <!--end product quick highlights-->
                  </div>
                </div>

                <div id="quickview-sidebar-mobile" class="col-xs-12 col-sm-5 col-md-5 col-lg-4"><!--mobile target sidebar-->
                  <div id="quickview-sidebar" class="top-sidebar col-xs-12"><!--clone this sidebar-->
                    <div class="product-detail-desc" class="clearfix">
                      <span id="desktop-price-block">
                        [--IF PRODUCT.Field39--]
                          <span id="sales-text-field">[--PRODUCT.Field39--]</span>
                        [--END_IF--]

                        <div id="price-block" class="clearfix">
                          [--IF PRODUCT.DisplayPrice--]
                            [--IF PRODUCT.Field3 "local"--]
                              <p>Not available for online purchase.</p>
                            [--ELSE--]
                              <?php $price=0; $saleprice="[--PRODUCT.SaleAmount--]";?>
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
                                  echo ("<span class='savings' style='padding: 4px 12px; display: inline-block; text-align: center; font-size: 1.2em; font-weight: bold; color: #fff; margin-right: 5px;'> Save $".$saving."</span>");
                                }else{
                                }
                                
                              ?>
                              [--IF PRODUCT.SaleOn--]
                                <span class="list-price" style='width:33%; display:inline-block; font-size: 1.1em; font-weight: bold; color: #888;'>was [-- PRODUCT.Price --]</span>
                                <?php $price="[--PRODUCT.SaleAmount--]";?>
                              [--ELSE--]
                                <span class="list-price" style='width:33%; display:inline-block; font-size: 1.1em; font-weight: bold; color: #888;'>Price: [-- PRODUCT.Price --]</span>
                                <?php $price="[--PRODUCT.Price--]";?>
                              [--END_IF--]
                              [--IF PRODUCT.SaleOn--]
                                <br>
                                <span class="sale-price" style="display: inline-block; margin-top: 10px; font-size: 1.4em; font-weight: bold; width: auto; position: relative;">Sale: <span>[-- PRODUCT.SaleAmount --]</span></span>
                                [--IF PRODUCT.Field6--]
                                  <?php
                                    $months="[--PRODUCT.Field6--]";
                                    $price=ltrim($price, "$");
                                    $price=str_replace(",", "", $price);
                                    $price=number_format($price/$months, 2);
                                    echo ("<span class='financing-price'>or <span id='financingprice' style='display: inline-block; font-weight:800; font-size:1.4em;'>$".$price."</span> /mo 0% Interest!</span>");
                                  ?>
                                [--END_IF--]
                              [--ELSE--]
                              [--END_IF--]
                            [--END_IF--]
                          [--ELSE--]
                          
                          [--END_IF--]
                        </div>
                        <!--begin desktop message and qty-->
                        <!--start want by message-->
                        <!--<div class="want-by-message"></div>-->
                        <!--end want by message-->
                        <!--start add to cart button-->
                        [--IF PRODUCT.DisplayPrice--]
                          [--IF PRODUCT.Field3 "local"--]
                          [--ELSE--]
                            <!--start order quantity-->
                            [-- IF product.DisplayOrderQuantity? --]
                              <span class="pr_qty">
                                [--STORE.Qty--]:&nbsp;
                                <select name="[--PRODUCT.RECORDNUMBER--]:qnty" id="quantity-selector-desktop">
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
                          [--END_IF--]
                        [--END_IF--]
                        <!--end desktop message and qty-->
                      </span><!--desktop price block-->

                      <span id="mobile-price-block">
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
                        <!-- start stars rating -->
                        <script type="text/javascript">
                          var sa_product = '[-- PRODUCT.SKU --]';
                          function saLoadScript(src) {
                            var js = window.document.createElement("script");
                            js.src = src; js.type = "text/javascript";
                            document.getElementsByTagName("head")[0].appendChild(js); 
                          }
                          saLoadScript('//www.shopperapproved.com/product/21959/'+sa_product+'.js');
                        </script>
                        <div id="product_just_stars" class="small more-info-reviews" style="padding:0; width:30%; display:inline-block;"></div>
                        <!-- end stars rating -->
                        [--IF PRODUCT.Field39--]
                          <span id="sales-text-field">[--PRODUCT.Field39--]</span>
                        [--END_IF--]
                        <div id="price-block" class="clearfix">
                          [--IF PRODUCT.DisplayPrice--]
                            [--IF PRODUCT.Field3 "local"--]
                              <p>Not available for online purchase.</p>
                            [--ELSE--]
                              <?php $price=0; $saleprice="[--PRODUCT.SaleAmount--]";?>
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
                                  echo ("<span class='savings' style='padding: 4px 12px; display: inline-block; text-align: center; font-size: 1.2em; font-weight: bold; color: #fff; margin-right: 5px;'> Save $".$saving."</span>");
                                }else{
                                }
                              ?>
                              [--IF PRODUCT.SaleOn--]
                                <span class="list-price" style='width:33%; display:inline-block; font-size: 1.1em; font-weight: bold; color: #888;'>was [-- PRODUCT.Price --]</span>
                                <?php $price="[--PRODUCT.SaleAmount--]";?>
                              [--ELSE--]
                                <span class="list-price" style='width:33%; display:inline-block; font-size: 1.1em; font-weight: bold; color: #888;'>Price: [-- PRODUCT.Price --]</span>
                                <?php $price="[--PRODUCT.Price--]";?>
                              [--END_IF--]
                              [--IF PRODUCT.SaleOn--]
                                <br>
                                <span class="sale-price" style="display: inline-block; margin-top: 10px; font-size: 1.4em; font-weight: bold; width: auto; position: relative;">Sale: <span>[-- PRODUCT.SaleAmount --]</span></span>
                                [--IF PRODUCT.Field6--]
                                  <?php
                                    $months="[--PRODUCT.Field6--]";
                                    $price=ltrim($price, "$");
                                    $price=str_replace(",", "", $price);
                                    $price=number_format($price/$months, 2);
                                    echo ("<span class='financing-price'>or <span id='financingprice' style='display: inline-block; font-weight:800; font-size:1.4em;'>$".$price."</span> /mo 0% Interest!</span>");
                                  ?>
                                [--END_IF--]
                              [--ELSE--]
                        
                              [--END_IF--]
                            [--END_IF--]
                          [--ELSE--]
                          
                          [--END_IF--]
                        </div>
                        <!--END PRICING INFO-->
                        
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
                          </span><!--mobile price block-->
                          <!--end order quantity-->
                          <input type="hidden" name="storeid" value="[--Store.id--]">
                          <input type="hidden" name="dbname" value="products">
                          <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
                          <input type="hidden" name="function" value="add">
                          <style>
                            #btn_att_cart_main {
                              background-color: rgb(1, 189, 7);
                              color: white;
                              -webkit-border-radius: 0 2px 2px 0;
                              -moz-border-radius: 0 2px 2px 0;
                              -ms-border-radius: 0 2px 2px 0;
                              border-radius: 0 2px 2px 0;
                            }
                            #btn_att_cart_main:hover {
                              background-color: rgb(20, 142, 255);
                            }
                          </style>
                          <div class="add-buttons">
                            <label for="btn_att_cart" class="btn-att-cart">
                              <span class="hide">Add to Cart</span>
                              <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
                              <input id="btn_att_cart_main" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-lg btn-block" name="Add to Bag" type="submit" value="ADD TO CART" data-original-title="" title="">
                            </label>
                            [-- IF Product.Field34 --]<!--live coupons field-->
                              <br/>
                              [-- PRODUCT.Field34 --]
                            [-- END_IF --]
                          </div>
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
                                $('.want-by-message').append("<span id=\"wantby-top\" class=\"wantby\">  <span style=\"font-weight:bold;\">Want it "+dotw+", "+moty+" "+dotm+"?</span> <span class=\"wantby-delivery\">Choose <span style=\"font-weight:bold; text-decoration:underline; color:#000;\">1-3 Day Delivery</span> at checkout.</span></span>");
                                //$('.shipping a:first').html("<span id=\"wantby-btm\" class=\"wantby\">Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.</span><br>");
                                //$('span.pr_qty').parent().append("<span id=\"wantby-top\" class=\"xmas-delivery\">Choose <span style=\"font-weight:bold;\">Next Day Delivery</span> during checkout to receive before Christmas.</span>");
                              }
                            }else{
                              //alert("Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.");
                              if(stock>0&&avail=='store'){
                                $('.want-by-message').append("<span id=\"wantby-top\" class=\"wantby\">  <span style=\"font-weight:bold;\">Want it "+dotw+", "+moty+" "+dotm+"?</span> <span class=\"wantby-delivery\">Choose <span style=\"font-weight:bold; text-decoration:underline; color:#000;\">1-3 Day Delivery</span> at checkout.</span></span>");
                                //$('.shipping a:first').html("<span id=\"wantby-btm\" class=\"wantby\">Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.</span><br>");
                                //$('span.pr_qty').parent().append("<span id=\"wantby-top\" class=\"xmas-delivery\">Choose <span style=\"font-weight:bold;\">Next Day Delivery</span> during checkout to receive before Christmas.</span>");
                              }
                            }
                          </script>
                          <!--end want by message-->
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
                      <!--condition display-->
                      [--IF PRODUCT.Field2 "new"--]
                        <style>
                          #product-condition span:before{
                            content:"\e936";
                            font-family:'vp-icomoon';
                            display:inline-block;
                            color:#148fff;
                            vertical-align:middle;
                            margin-right:5px;
                            font-size:18px;
                          }
                        </style>

                        <div id="product-condition">
                          <span style="color:#148fff">Condition: </span> Brand New
                        </div>
                      [--END_IF--]
                      <!--end condition display-->  
                      <!-- BEGIN PRICE COMPARISON LINK -->
                    </form><!--end add to cart form-->
                      <form method="POST" action="price-comparison.php">
                        <input type="hidden" name="product" value="[-- PRODUCT.Name --]" />
                        <input type="hidden" name="SKU" value="[-- PRODUCT.SKU --]" />
                        <input type="hidden" name="productURL" value="[-- PRODUCT.MoreInfoURL --]" />
                        <input type="hidden" name="image" value='[-- IMAGE PRODUCT.Graphic --]' />
                        <input type="hidden" name="ourPrice" value="[-- IF PRODUCT.SaleAmount --][-- PRODUCT.SaleAmount --][-- ELSE --][-- PRODUCT.Price --][-- END_IF --]" />

                        <p class="item-less">
                          <label for="saw_item_for_less" class="btn-item-less">
                            <span class="hide">Saw this item for less? Yes!</span>
                            <input id="saw_item_for_less" name="submit" type="submit" value="" />
                          </label>
                        </p>
                      </form>
                      <!-- END PRICE COMPARISON LINK -->
                      <div class="callouts-wrap"></div>
                      <!--end callouts-->
                      [--IF PRODUCT.Field48--]
                        <script>
                          (function($){
                            var flagValues = "[--PRODUCT.Field48--]";
                            var flagsUp = "";
                            var callsUp = "";
                            
                            if (flagValues.indexOf("free")!==-1){
                              flagsUp+="<span class='icon-truck popup-flag free-ship-flag' data-popuptext='Free Shipping'></span><br><br>";
                              callsUp+="<div class='vp-callouts shipping-co'><h4>Free Shipping</h4><span style='font-size:14px;'>On orders over $49. Most orders ship same day and are delivered within 2-5 business days.</p></div>";
                            }
                            if (flagValues.indexOf("air")!==-1){
                              flagsUp+="<span class='icon-leaf popup-flag clean-air-flag' data-popuptext='Clean Air'></span><br><br>";
                              callsUp+="<div class='vp-callouts air-co'><h4>Clean Air</h4><span style='font-size:14px;'>Designed to trap almost all of the smaller particles and prevent them from being re-circulated into the ambient air.</p></div>";
                            }
                            if (flagValues.indexOf("bag")!==-1){
                              flagsUp+="<span class='icon-trash-stroke popup-flag bagless-flag' data-popuptext='Bagless'></span><br><br>";
                              callsUp+="<div class='vp-callouts bagless-co'><h4>Bagless</h4><span style='font-size:14px;'>This item is bagless, reducing waste and eco-friendly.</p></div>";
                            }
                            if (flagValues.indexOf("remote")!==-1){
                              flagsUp+="<span class='icon-remote popup-flag remote-flag' data-popuptext='Remote Control'></span><br><br>";
                              callsUp+="<div class='vp-callouts remote-co'><h4>Remote Control</h4><span style='font-size:14px;'>Included for your convenience is a remote for controlling your device! Check the product description for a list of remote control features.</p></div>";
                            }
                            if (flagValues.indexOf("cord")!==-1){
                              flagsUp+="<span class='icon-power-cord popup-flag cordless-flag' data-popuptext='Cordless'></span><br><br>";
                              callsUp+="<div class='vp-callouts cordless-co'><h4>Cordless</h4><span style='font-size:14px;'>This item is conveniently cordless. Don't drag around or get tangled in cords any longer!</p></div>";
                            }
                            if (flagValues.indexOf("apparel")!==-1){
                              flagsUp+="<span class='icon-apparel popup-flag apparel-flag' data-popuptext='Apparel'></span><br><br>";
                              callsUp+="<div class='vp-callouts apparel-co'><h4>Apparel</h4><span style='font-size:14px;'>This item is designed to be safely used with your fabric and apparel.</p></div>";
                            }
                            if(flagValues.indexOf("surf")!==-1){
                              flagsUp+="<span class='icon-fork popup-flag multi-surface-flag' data-popuptext='Multi-Surface'></span><br><br>";
                              if(flagValues.indexOf("-vac")!==-1){
                                callsUp+="<div class='vp-callouts multi-surface-co1'><h4>Multi-Surface</h4><span style='font-size:14px;'>Built to handle carpets, tile, laminate or hardwood floors. This product can tackle many different surface types for all around cleaning in every room!</p></div>";
                              }else if(flagValues.indexOf("-steam")!==-1){
                                callsUp+="<div class='vp-callouts multi-surface-co2'><h4>Multi-Surface</h4><span style='font-size:14px;'>Built to handle marble, granite, tile, laminate, glass, porcelain, hardwood and even some fabric/upholstery. This product can tackle many different types of surfaces for all around cleaning to fit your needs!</p></div>";
                              }
                            }
                            if (flagValues.indexOf("pet")!==-1){
                              flagsUp+="<span class='icon-pet popup-flag pet-flag' data-popuptext='Pet Purrrfect'></span><br><br>";
                              callsUp+="<div class='vp-callouts pet-co'><h4>Pet Purrrfect</h4><span style='font-size:14px;'>Robust design eliminates tough pet hair, dander &amp; dirt. Meow!</p></div>";
                            }

                            $('#flag-[--PRODUCT.sku--]:empty').append(flagsUp);
                            
                            if($('.callouts-wrap').length > 0){
                              $('.callouts-wrap:empty').append(callsUp);
                            }
                          })(jQuery);
                        </script>
                        
                      [--END_IF--]
                      <style>
                        @media(min-width:768px){
                          #qh-mobile{
                            display:none;
                          }
                        }
                      </style>

                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><!--sm3 md3 lg4-->
                        <!--start product quick highlights-->
                        [--IF PRODUCT.Field15--]
                          <div id="qh-mobile" class="gradient" style="border-top:0px;">
                            <h4 style="font-weight:bold;">Product Highlights</h4>
                            <div>
                              [--PRODUCT.Field15--]
                            </div>
                          </div>
                          <div class="qh-trigger qh-closed"></div>
                        [--END_IF--]
                        <!--end product quick highlights-->
                      </div>

                      <!-- BEGIN AddShoppers  -->
                      <script type="text/javascript">
                        var js = document.createElement('script'); js.type = 'text/javascript'; js.async = true;
                        js.id = 'AddShoppers';
                        js.src = ('https:' == document.location.protocol ? 'https://shop.pe/widget/' : 'http://cdn.shop.pe/widget/') + 'widget_async.js#5602d9f8a3876472ed906a10';
                        document.getElementsByTagName("head")[0].appendChild(js);
                      </script>
                        <!-- END AddShoppers -->
                      <!--socmed buttons-->
                      <div class="social-buttons mobile">
                        <div class="social-buttons-inside">
                          <div class="share-buttons share-buttons-panel" data-style="big" data-counter="false" data-oauth="true" data-hover="false" data-promo-callout="none" data-buttons="facebook,pinterest,twitter,email"></div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="margin:20px;"></div>
            <!--TABBED CONTENT-->
            <div id="tab" class="tabcordion col-xs-12 col-sm-7 col-md-7 col-lg-8">
              <ul class="tab-nav clearfix">
                <li><a href="#tab1">ABOUT THIS ITEM</a></li>
                [--IF PRODUCT.Field17--]<li><a href="#tab2">VIDEOS</a></li>[--END_IF--]
                [-- IF PRODUCT.NumSubProducts 0 --][--ELSE--]<li><a href="#tab4">ACCESSORIES</a></li>[--END_IF--]
                <li><a href="#tab5">REVIEWS</a></li>
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
              [-- IF PRODUCT.NumSubProducts 0 --][--ELSE--]
                <a class="accordion-nav" href="#tab4">ACCESSORIES</a>
                <div id="tab4" class="tab tabcr-closed">
                  <h3><span>Need more supplies? Find them below!</span> Just add them to your bag below.</h3>
                  <style>
                    .flex-parent-product{display:flex; flex-direction:row; flex-wrap:wrap;justify-content:flex-start;align-content:center;}
                    .margin-flex-product{width:200px; margin:0; flex:0 1 auto;}
                  </style>
                  <div class="container">
                    <div id="product-section" class="col-sm-12 col-md-9 col-lg-9 flex-parent-product">
                      [--LOOP SUBPRODUCTS--]
                        <div id="product-list-grid2" class="margin-flex-product" style="padding:15px 0;" align="center">
                          [--SUBPRODUCTS--]
                        </div>
                      [--END_LOOP SUBPRODUCTS--]
                    </div>
                  </div>
                </div>
              [--END_IF--]


                <a class="accordion-nav" href="#tab5">REVIEWS</a>
                <div id="tab5" class="tab tabcr-closed">
                  <style>
                    .flex-parent-product{display:flex; flex-direction:row; flex-wrap:wrap;justify-content:flex-start;align-content:center;}
                    .margin-flex-product{width:200px; margin:0; flex:0 1 auto;}
                  </style>
                  <div class="container">
                      <script type="text/javascript">
                        var sa_products_count = 3;
                        var sa_date_format = 'F j, Y';
                        var sa_product = '[PRODUCT ID]';
                        (function(w,d,t,f,o,s,a){ o = 'shopperapproved'; if (!w[o]) { w[o] = function() { (w[o].arg = w[o].arg || []).push(arguments) }; s=d.createElement(t), a=d.getElementsByTagName(t)[0];s.async=1;s.src=f;a.parentNode.insertBefore(s,a)} })(window,document,'script','//www.shopperapproved.com/product/27462/'+sa_product+'.js');
                      </script>
                      <div id="shopper_review_page">
                        <div id="review_header"></div>
                        <div id="product_page"></div>
                        <div id="review_image">
                          <a href="https://www.shopperapproved.com/reviews/VacPlus.com/" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; var certheight=screen.availHeight-90; window.open(this.href,'shopperapproved','location='+nonwin+',scrollbars=yes,width=620,height='+certheight+',menubar=no,toolbar=no'); return false;" target="_blank" rel="nofollow"></a>
                        </div>
                      </div>
                  </div>
                </div>

            </div>
            <!-- END TABBED CONTENT-->
            <div style="margin:20px;"></div><div style="clear:both; margin:20px;"></div>
          
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
  </body>
  [-- INCLUDE -VP-AE-js-plugins --]
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
  <script src="//vacplus.com/AE/js/swiper.js"></script>
  <script src="//vacplus.com/AE/js/lightbox/js/lightboxkyle.js"></script>
  <script src="//vacplus.com/AE/js/owl/owl.carousel.js"></script>
  <script>
    var mySwiper = new Swiper('.swiper-container', {
      loop:true,
      pagination: {
        el: '.swiper-pagination',
        clickable:true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
    });
  </script>
  <script>
    $(document).ready(function(){
      loginReturn("ss_reg_0001549342");  
    });
  </script>
  <script>
    function startLightbox(){
      if(window.innerWidth>767){
        $("a[data-lightbox='thumbnailslightbox']:first").click();
      }
    }
    $('.owl-carousel').owlCarousel({
      margin:10,
      nav:true,
      dotsContainer: '#newowldots',
      responsive:{
        0:{
          items:2
        },
        340:{
          items:3
        },
        452:{
          items:4
        },
        525:{
          items:4
        },
        560:{
          items:5
        },
        640:{
          items:6
        },
        768:{
          items:4
        },
        899:{
          items:5
        },
        992:{
          items:2
        },
        1078:{
          items:3
        },
        1216:{
          items:4
        },
        1498:{
          items:5
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
  </html>
[-- END_DEFINE MORE_INFO_PAGE --]
