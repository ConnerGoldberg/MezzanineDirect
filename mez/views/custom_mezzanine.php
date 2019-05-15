<?php
    if(isset($_POST['confirmOrder'])  && !empty($_POST['confirmOrder']))
    {
        $orderStatus = 1;
        $product_id = 1;
        $cstrong = True;
        $session_id = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        $mezPrice = $_POST['productPriceSaved'];
        DB::query('INSERT INTO orders VALUES(\'\', :order_status_id, :product_id, :session_id, :total_price)', array(':order_status_id'=>$orderStatus,':product_id'=>$product_id, ':session_id'=>sha1($session_id), ':total_price'=>$mezPrice));
    }
    else
    {
      //SOMETHING WENT WRONG
      $mezPrice = "$0.00";
    }
?>

<html lang="en" class="noIE" style="padding-bottom: 60px;"><head>

    <!-- Basic page needs ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Title and description ================================================== -->
    <title>
      Mezzanine Floor Kits | Fast and Easy Installation | Per square metre – Mezzanine Direct
    </title>


    <meta name="description" content="CALL NOW TO GRAB OUR SPECIAL $169 / SQM RATE* &nbsp; WHATS INCLUDED; Structural steel mezzanine floor to your measurements&nbsp;✓ Timber flooring&nbsp;✓&nbsp; All hardware and floor fixings&nbsp;✓&nbsp; Load capacity&nbsp;350kg per sqm&nbsp;✓ DOUBLE OR TRIPLE YOUR SPACE. Mainly used for warehouse mezzanines, office mezzanines and garage mezzanines. Safety ha">


    <!-- Helpers ================================================== -->

  <meta property="og:type" content="product">
  <meta property="og:title" content="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST">

  <meta property="og:image" content="http://cdn.shopify.com/s/files/1/0883/2986/products/layout1_800x.jpg?v=1554789225">
  <meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/0883/2986/products/layout1_800x.jpg?v=1554789225">

  <meta property="og:image" content="http://cdn.shopify.com/s/files/1/0883/2986/products/55853464_283037979299112_2138337944639897600_n_800x.jpg?v=1554789225">
  <meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/0883/2986/products/55853464_283037979299112_2138337944639897600_n_800x.jpg?v=1554789225">

  <meta property="og:image" content="http://cdn.shopify.com/s/files/1/0883/2986/products/56485629_741933642867148_3561469366690119680_n_800x.png?v=1554789241">
  <meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/0883/2986/products/56485629_741933642867148_3561469366690119680_n_800x.png?v=1554789241">

  <meta property="og:price:amount" content="0.00">
  <meta property="og:price:currency" content="AUD">


  <meta property="og:description" content="CALL NOW TO GRAB OUR SPECIAL $169 / SQM RATE* &nbsp; WHATS INCLUDED; Structural steel mezzanine floor to your measurements&nbsp;✓ Timber flooring&nbsp;✓&nbsp; All hardware and floor fixings&nbsp;✓&nbsp; Load capacity&nbsp;350kg per sqm&nbsp;✓ DOUBLE OR TRIPLE YOUR SPACE. Mainly used for warehouse mezzanines, office mezzanines and garage mezzanines. Safety ha">

  <meta property="og:url" content="https://3h763k1g03j1roq3-8832986.shopifypreview.com/products/mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test">
  <meta property="og:site_name" content="Mezzanine Direct ">



<meta name="twitter:card" content="summary">

  <meta name="twitter:title" content="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST">
  <meta name="twitter:description" content="CALL NOW TO GRAB OUR SPECIAL $169 / SQM RATE* &nbsp; WHATS INCLUDED; Structural steel mezzanine floor to your measurements&nbsp;✓ Timber flooring&nbsp;✓&nbsp; All hardware and floor fixings&nbsp;✓&nbsp; Load capacity&nbsp;350kg per sqm&nbsp;✓ DOUBLE OR TRIPLE YOUR SPACE. Mainly used for warehouse mezzanines, office mezzanines and garage mezzanines. Safety hand railing,&nbsp;Mezzanine Stairs, Mezzanine Sliding Gates and Installation&nbsp;are optional&nbsp;and&nbsp;can be installed onto these floors where required. Mezzanine Load Capacity Load capacity for these floors range from 350kg to 500kg.&nbsp;&nbsp; &nbsp; Easy to install and dismantle&nbsp;Our mezzanines are designed to be bolt on only.&nbsp;No welding or cutting needed&nbsp;for the mezzanine structure. Perfect for any handyman to install for you.&nbsp; &nbsp;Mezzanine Floor Kits This system of flooring is supported by posts and beams which gives you the most amount of clear access underneath. It is a free standing mezzanine structure. &nbsp;Promotional Price T&amp;amp;C's *Please note">
  <meta name="twitter:image" content="https://cdn.shopify.com/s/files/1/0883/2986/products/layout1_800x.jpg?v=1554789225">
  <meta name="twitter:image:width" content="240">
  <meta name="twitter:image:height" content="240">

    <link rel="canonical" href="https://3h763k1g03j1roq3-8832986.shopifypreview.com/products/mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#898989">


    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/0883/2986/t/13/assets/favicon.png?1223" type="image/png">

    <link href="//cdn.shopify.com/s/files/1/0883/2986/t/13/assets/apps.css?1223" rel="stylesheet" type="text/css" media="all">
    <link href="//cdn.shopify.com/s/files/1/0883/2986/t/13/assets/style.css?1223" rel="stylesheet" type="text/css" media="all">
    <link href="//cdn.shopify.com/s/files/1/0883/2986/t/13/assets/flexslider.css?1223" rel="stylesheet" type="text/css" media="all">
    <link href="//cdn.shopify.com/s/files/1/0883/2986/t/13/assets/flexslider-product.css?1223" rel="stylesheet" type="text/css" media="all">



    <!-- Header hook for plugins ================================================== -->
    <meta name="robots" content="noindex,nofollow">
<meta name="shopify-checkout-api-token" content="634d9d13997a474ad7d60a92fdeb1580">
<meta id="in-context-paypal-metadata" data-shop-id="8832986" data-venmo-supported="false" data-environment="production" data-locale="en_US" data-paypal-v4="true" data-currency="AUD">
<link rel="alternate" type="application/json+oembed" href="https://3h763k1g03j1roq3-8832986.shopifypreview.com/products/mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test.oembed">
<style media="all">.additional-checkout-button{border:0 !important;border-radius:5px !important;display:inline-block;margin:0 0 10px;padding:0 24px !important;max-width:100%;min-width:150px !important;line-height:44px !important;text-align:center !important}.additional-checkout-button+.additional-checkout-button{margin-left:10px}.additional-checkout-button:last-child{margin-bottom:0}.additional-checkout-button span{font-size:14px !important}.additional-checkout-button img{display:inline-block !important;height:1.3em !important;margin:0 !important;vertical-align:middle !important;width:auto !important}@media (max-width: 500px){.additional-checkout-button{display:block;margin-left:0 !important;padding:0 10px !important;width:100%}}.additional-checkout-button--apple-pay{background-color:#000 !important;color:#fff !important;display:none;font-family:-apple-system, Helvetica Neue, sans-serif !important;min-width:150px !important;white-space:nowrap !important}.additional-checkout-button--apple-pay:hover,.additional-checkout-button--apple-pay:active,.additional-checkout-button--apple-pay:visited{color:#fff !important;text-decoration:none !important}.additional-checkout-button--apple-pay .additional-checkout-button__logo{background:-webkit-named-image(apple-pay-logo-white) center center no-repeat !important;background-size:auto 100% !important;display:inline-block !important;vertical-align:middle !important;width:3em !important;height:1.3em !important}@media (max-width: 500px){.additional-checkout-button--apple-pay{display:none}}.additional-checkout-button--google-pay{line-height:0 !important;padding:0 !important;border-radius:unset !important;width:80px !important}@media (max-width: 500px){.additional-checkout-button--google-pay{width:100% !important}}.gpay-iframe{height:44px !important;width:100%  !important;cursor:pointer;vertical-align:middle !important}.additional-checkout-button--paypal-express{background-color:#ffc439 !important}.additional-checkout-button--paypal,.additional-checkout-button--venmo{vertical-align:top;line-height:0 !important;padding:0 !important}.additional-checkout-button--amazon{background-color:#fad676 !important;position:relative !important}.additional-checkout-button--amazon .additional-checkout-button__logo{-webkit-transform:translateY(4px) !important;transform:translateY(4px) !important}.additional-checkout-button--amazon .alt-payment-list-amazon-button-image{max-height:none !important;opacity:0 !important;position:absolute !important;top:0 !important;left:0 !important;width:100% !important;height:100% !important}.additional-checkout-button-visually-hidden{border:0 !important;clip:rect(0, 0, 0, 0) !important;clip:rect(0 0 0 0) !important;width:1px !important;height:1px !important;margin:-2px !important;overflow:hidden !important;padding:0 !important;position:absolute !important}
</style>

<script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>var Shopify = Shopify || {};
Shopify.shop = "3d-racking.myshopify.com";
Shopify.currency = {"active":"AUD","rate":"1.0"};
Shopify.theme = {"name":"Copy of ShowTime","id":169462787,"theme_store_id":687,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};</script>

<script>window.ShopifyPay = window.ShopifyPay || {};
window.ShopifyPay.apiHost = "pay.shopify.com";</script>

<script id="__st">var __st={"a":8832986,"offset":36000,"reqid":"496a3fd6-a9ce-4076-9de6-7e78d707cd55","pageurl":"3h763k1g03j1roq3-8832986.shopifypreview.com\/products_preview?preview_key=ec710727da3984e067fd25c48791930c","u":"f1328a7ac935","p":"product","rtyp":"product","rid":1724148711470};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = "3d-racking.myshopify.com";</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'AUD';
var meta = {"product":{"id":1724148711470,"vendor":"3D Racking","type":"","variants":[{"id":16092366831662,"price":0,"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - Square","public_title":"Square","sku":""},{"id":16102231900206,"price":0,"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - Rectangle","public_title":"Rectangle","sku":""},{"id":16102231932974,"price":0,"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - L-Shaped","public_title":"L-Shaped","sku":""}]},"page":{"pageType":"product","resourceType":"product","resourceId":1724148711470}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

};
</script>
<script class="analytics">(window.gaDevIds=window.gaDevIds||[]).push('BwiEti');


(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') !== -1 &&
        window.location.pathname.indexOf('/thank_you') !== -1) {

      var twoMonthsFromNow = new Date(Date.now());
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":8832986,"isMerchantRequest":null,"themeId":169462787,"themeCityHash":8507885333114522320,"contentLanguage":"en"}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1.0},"Google Analytics":{"trackingId":"UA-83841214-1","domain":"auto","siteSpeedSampleRate":"10","enhancedEcommerce":true,"doubleClick":true,"includeSearch":true},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;

      ga('require', 'linker');
      function addListener(element, type, callback) {
        if (element.addEventListener) {
          element.addEventListener(type, callback);
        }
        else if (element.attachEvent) {
          element.attachEvent('on' + type, callback);
        }
      }
      function decorate(event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
          ga(function (tracker) {
            var linkerParam = tracker.get('linkerParam');
            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
          });
        }
      }
      addListener(window, 'load', function(){
        for (var i=0; i < document.forms.length; i++) {
          var action = document.forms[i].getAttribute('action');
          if(action && action.indexOf('/cart') >= 0) {
            addListener(document.forms[i], 'submit', decorate);
          }
        }
        for (var i=0; i < document.links.length; i++) {
          var href = document.links[i].getAttribute('href');
          if(href && href.indexOf('/checkout') >= 0) {
            addListener(document.links[i], 'click', decorate);
          }
        }
      });


    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();

        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"product","resourceType":"product","resourceId":1724148711470}
        );


        window.ShopifyAnalytics.lib.track(
          "Viewed Product",
          {"currency":"AUD","variantId":16092366831662,"productId":1724148711470,"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - Square","price":"0.00","sku":"","brand":"3D Racking","variant":"Square","category":"","nonInteraction":true}
        );

    }
  });


      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>




<script>var BOLD = BOLD || {};
    BOLD.products = BOLD.products || {};
    BOLD.variant_lookup = BOLD.variant_lookup || {};BOLD.variant_lookup[16092366831662] ="mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test";BOLD.variant_lookup[16102231900206] ="mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test";BOLD.variant_lookup[16102231932974] ="mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test";BOLD.products["mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test"] ={
"id":1724148711470,
"title":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST","handle":"mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test",
"description":"Mezzanine Stairs, Mezzanine Sliding Gates and Installation\u003c\/strong\u003e \u003cstrong\u003eare optional\u003c\/strong\u003e and can be installed onto these floors where required.\u003cbr \/\u003e\u003cbr \/\u003e\u003c\/span\u003e\u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eMezzanine Load Capacity\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003eLoad capacity for these floors range from 350kg to 500kg.  \u003c\/p\u003e\r\n\u003cp\u003e \u003cimg src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/IMG_1664_large.jpg?v=1539902181\" alt=\"Mezzanine floor kit \" \/\u003e\u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003e\u003cspan\u003eEasy to install and dismantle \u003cbr \/\u003e\u003c\/span\u003e\u003c\/strong\u003e\u003cbr \/\u003eOur mezzanines are designed to be bolt on only. No welding or cutting needed for the mezzanine structure. Perfect for any handyman to install for you. \u003c\/p\u003e\r\n\u003cp\u003e\u003cimg src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/IMG_1665_large.jpg?v=1539902496\" alt=\"Mezzanines Sydney \" \/\u003e\u003c\/p\u003e\r\n\u003cp\u003e \u003cstrong\u003eMezzanine Floor Kits\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003eThis system of flooring is supported by posts and beams which gives you the most amount of clear access underneath. It is a free standing mezzanine structure.\u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003e\u003cspan\u003e\u003cimg src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/IMG_1697_large.jpg?v=1539902058\" alt=\"Sydney Mezzanine Floor Builders\" \/\u003e\u003c\/span\u003e\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003e \u003cstrong\u003ePromotional Price T\u0026amp;C's\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003e*Please note our special promotion price applies to mezzanines over 50sqm in total size. The mezzanine structure colour available is only Silver Gal. Price is for supply only. Available nation wide. \u003c\/p\u003e\r\n\u003cp\u003e \u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eOur Mezzanines are available for direct delivery and installation mainly but not limited to;\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003eSydney Mezzanines Floors\u003c\/p\u003e\r\n\u003cp\u003eMelbourne Mezzanines\u003c\/p\u003e\r\n\u003cp\u003eQueensland Mezzanines\u003c\/p\u003e\r\n\u003cp\u003ePerth Mezzanines\u003c\/p\u003e\r\n\u003cp\u003eAdelaide Mezzanines\u003c\/p\u003e\r\n\u003cp\u003eDarwin Mezzanines \u003c\/p\u003e\r\n\u003cp\u003e \u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003ePlease call 0409 809 117 if you require more information.\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003eOur mezzanine flooring kits are available for delivery and fast installation.\u003c\/p\u003e\r\n\u003cp\u003e \u003c\/p\u003e\r\n\u003cp\u003e\u003cimg alt=\"\" src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/Untitled-1_d7d14c9b-c0b5-46f6-833f-1dedfe709dde_large.png?v=1473294350\" \/\u003e   \u003c\/p\u003e\r\n\u003cp\u003e \u003c\/p\u003e\r\n\u003cp\u003eThis system of flooring is supported by structural posts and beams which gives you the most amount of clear access underneath.\u003c\/p\u003e\r\n\u003cp\u003eThe general spacing between posts is approx 4-5m and heights can be adjusted to suit your requirements. Larger spacing between posts can be achieved.\u003c\/p\u003e\r\n\u003cp\u003eLoad capacity for these floors range from 350kg to 500kg per square meter. Railing, stairs and gates can be installed onto these floors where required. Please contact us on 0409 809 117 for more details.\u003c\/p\u003e\r\n\u003cp\u003e \u003c\/p\u003e\r\n\u003cp\u003e\u003cimg alt=\"\" src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/Untitled-2_large.png?v=1473296080\" \/\u003e\u003c\/p\u003e",
"published_at":"T",
"created_at":"2019-03-25T18:43:26",
"vendor":"3D Racking",
"type":"",
"tags":[],
"price":0,
"price_min":0,
"price_max":0,
"price_varies":false,
"compare_at_price":null,
"compare_at_price_min":0,
"compare_at_price_max":0,
"compare_at_price_varies":false,
"variants":[{"id":16092366831662,"title":"Square","option1":"Square","option2":null,"option3":null,"sku":"","requires_shipping":false,"taxable":true,"featured_image":{"id":6374407798830,"product_id":1724148711470,"position":3,"created_at":"2019-04-09T15:54:01+10:00","updated_at":"2019-04-09T15:54:01+10:00","alt":null,"width":679,"height":960,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/56485629_741933642867148_3561469366690119680_n.png?v=1554789241","variant_ids":[16092366831662]},"available":true,"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - Square","public_title":"Square","options":["Square"],"price":0,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":null,"inventory_policy":"deny","barcode":""},{"id":16102231900206,"title":"Rectangle","option1":"Rectangle","option2":null,"option3":null,"sku":"","requires_shipping":false,"taxable":true,"featured_image":{"id":6374407995438,"product_id":1724148711470,"position":4,"created_at":"2019-04-09T15:54:02+10:00","updated_at":"2019-04-09T15:54:02+10:00","alt":null,"width":679,"height":960,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/56561431_408562383266516_2003869231636021248_n.png?v=1554789242","variant_ids":[16102231900206]},"available":true,"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - Rectangle","public_title":"Rectangle","options":["Rectangle"],"price":0,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":null,"inventory_policy":"deny","barcode":""},{"id":16102231932974,"title":"L-Shaped","option1":"L-Shaped","option2":null,"option3":null,"sku":"","requires_shipping":false,"taxable":true,"featured_image":{"id":6348444336174,"product_id":1724148711470,"position":2,"created_at":"2019-04-04T09:49:36+11:00","updated_at":"2019-04-09T15:53:45+10:00","alt":null,"width":1448,"height":2048,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/55853464_283037979299112_2138337944639897600_n.jpg?v=1554789225","variant_ids":[16102231932974]},"available":true,"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - L-Shaped","public_title":"L-Shaped","options":["L-Shaped"],"price":0,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":null,"inventory_policy":"deny","barcode":""}],
"available":false,"images":["\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/layout1.jpg?v=1554789225","\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/55853464_283037979299112_2138337944639897600_n.jpg?v=1554789225","\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/56485629_741933642867148_3561469366690119680_n.png?v=1554789241","\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/56561431_408562383266516_2003869231636021248_n.png?v=1554789242"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/layout1.jpg?v=1554789225",
"options":["LAYOUT"],
"url":"\/products\/mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test"}</script>


    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->





    <!-- Theme Global App JS ================================================== -->
    <script>
      var app = app || {
        data:{
          template:"product.custom-1",
          money_format: "${{amount}}"
        }
      }
    </script>
  </head>

  <body id="mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-t" class="template-product">
    <div class="wsmenucontainer clearfix">
      <div class="overlapblackbg"></div>


      <div id="shopify-section-header" class="shopify-section">
<div id="header" data-section-id="header" data-section-type="header-section">


        <div class="header_top">
  <div class="container">
    <div class="top_menu hidden-ms hidden-xs">

        <a class="navbar-brand" href="/" itemprop="url">
          <img src="//cdn.shopify.com/s/files/1/0883/2986/files/PNG_Image_550x.png?v=1545362600" alt="Mezzanine Direct " class="img-responsive" itemprop="logo">
        </a>

    </div>
    <div class="hed_right">

      <ul>

        <li><span class="header-top-text"><p>&nbsp; &nbsp; ABN: 646 217 852 88</p></span></li>


      </ul>


      <div class="header-contact">
        <ul>

          <li><a href="tel:0409 809 117"><span class="fa fa-phone"></span>0409 809 117</a></li>


          <li><a href="mailto:Sales@mezzaninedirect.com.au"><span class="fa fa-envelope"></span>Sales@mezzaninedirect.com.au</a></li>

        </ul>
      </div>

    </div>
  </div>
</div>


        <div class="header_bot ">
          <div class="header_content">
            <div class="container">


              <div id="nav">
  <nav class="navbar" role="navigation">
    <div class="navbar-header">
      <a href="#" class="visible-ms visible-xs pull-right navbar-cart" id="wsnavtoggle"><div class="cart-icon"><i class="fa fa-bars"></i></div></a>
      <a href="javascript:void(0);" data-href="/cart" class="visible-ms visible-xs pull-right navbar-cart cart-popup"><div class="cart-icon"><span class="count hidden">0</span><i class="fa fa-shopping-cart"></i></div></a>
      <a href="/search" class="visible-ms visible-xs pull-right navbar-cart"><div class="cart-icon"><i class="fa fa-search"></i></div></a>

      <div class="visible-ms visible-xs">


        <a class="navbar-brand" href="/" itemprop="url">
          <img src="//cdn.shopify.com/s/files/1/0883/2986/files/PNG_Image_550x.png?v=1545362600" alt="Mezzanine Direct " itemprop="logo">
        </a>


      </div><!-- ./visible-ms visible-xs -->

    </div>
    <!-- main menu -->
    <nav class="wsmenu">
      <ul class="mobile-sub mega_menu wsmenu-list">











        <li><a href="/products/mezzanine-floor-kits-fast-and-easy-installation-per-square-metre">Mezzanine Floors</a></li>












        <li><a href="/collections/stanchions-platform-post">Safety Handrailing</a></li>












        <li class=""><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="/collections/steel-set-of-stairs" class="twin">Steel Staircase<span class="arrow"></span></a>

          <div class="megamenu clearfix">
            <ul class="wsmenu-sub-list">


              <li class=" link-list"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><h5><a href="/products/stairs-for-mezzanine-flooring">Steel Staircase</a></h5>

                <ul style="">


                  <li class="col-lg-12 col-md-12 col-sm-12 link-list"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="/products/stairs-for-mezzanine-flooring">Steel Staircase</a>

                    <ul class="level hidden-mu" style="display: block;">

                      <li class=" link-list"><a href="/products/stairs-for-mezzanine-flooring">Steel Staircase</a></li>

                    </ul>
                  </li>



                </ul>
              </li>



            </ul>
          </div>

        </li>












        <li><a href="/pages/about-us">About Us</a></li>












        <li><a href="/pages/contact-us">Contact Us</a></li>



      </ul>
    </nav>
    <ul class="hidden-xs nav navbar-nav navbar-right">
      <li class="dropdown-grid no-open-arrow ">
        <a data-toggle="dropdown" data-href="/cart" href="javascript:void(0);" class="dropdown-toggle cart-popup" aria-expanded="true"><div class="cart-icon"><span class="count hidden">0</span><i class="fa fa-shopping-cart"></i></div></a>
        <div class="dropdown-grid-wrapper hidden">
          <div class="dropdown-menu no-padding animated fadeInDown col-xs-12 col-sm-9 col-md-7 animation-done" role="menu">
            <div class="menu_c cart_menu">
  <div class="menu_title clearfix">
    <h4>Shopping Cart</h4>
  </div>

  <div class="cart_row">
    <div class="empty-cart">Your cart is currently empty.</div>
    <p><a href="javascript:void(0)" class="btn_c btn_close">Continue Shopping</a></p>
  </div>

</div>
          </div>
        </div>
      </li>

      <li class="dropdown-grid no-open-arrow">
        <a data-toggle="dropdown" href="javascript:;" class="dropdown-toggle" aria-expanded="true"><span class="icons"><i class="fa fa-user"></i></span></a>
        <div class="dropdown-grid-wrapper">
          <div class="dropdown-menu no-padding animated fadeInDown col-xs-12 col-sm-5 col-md-4 col-lg-3 animation-done" role="menu">


<div class="menu_c acc_menu">
  <div class="menu_title clearfix">
    <h4>My Account</h4>

  </div>


    <div class="login_frm">
      <p class="text-center">Welcome to Mezzanine Direct !</p>
      <div class="remember">
        <a href="/account/login" class="signin_btn btn_c">Login</a>
        <a href="/account/register" class="signin_btn btn_c">Create Account</a>
      </div>
    </div>

</div>
          </div>
        </div>
      </li>

      <li class="dropdown-grid no-open-arrow">

        <div class="fixed-search">



<form action="/search" method="get" role="search">
  <div class="menu_c search_menu">
    <div class="search_box">

      <input type="hidden" name="type" value="product">

      <input type="search" name="q" value="" class="txtbox" placeholder="Search" aria-label="Search">
      <button class="btn btn-link" type="submit" value="Search"><span class="fa fa-search"></span></button>
    </div>
  </div>
</form>
        </div>

      </li>
    </ul>
  </nav>
</div>


            </div>
          </div>
        </div>
      </div><!-- /header -->







<style>
/*  This code is used to center logo vertically on different devices */


#header .hed_right {


		padding-top:20px;
		padding-bottom:20px;


}

#header .navbar-toggle, #header .navbar-cart {

	padding-top:15px;
	padding-bottom:15px;

}
#header a.navbar-brand {
  height:auto;
}
@media (max-width: 600px) {
 #header .navbar-brand > img {
    max-width: 158px;
  }
}
@media (max-width: 600px) {
	#header .navbar-toggle, #header .navbar-cart {

		padding-top:15px;
		padding-bottom:15px;

	}
}

#header .hed_right .header-contact {
	clear:right;
	float:right;
	margin-top:10px;
}
@media (max-width: 989px) {
	#header .hed_right ul li {
		padding:0 10px;
	}
}

@media (max-width: 767px) {
	#header .hed_right, #header .hed_right .header-contact {
		padding:0;
		float:none;
		text-align: center;
	}
}
@media  (min-width: 768px) and (max-width: 800px) {
  #header .hed_right ul {
    float:left !important;
  }
}


@media (max-width: 900px) {

  #header #nav .navbar-nav > li > a {
    font-size: 12px;
    line-height: 32px;
    padding-left:7px;
    padding-right:7px;
  }

  #header .navbar-brand {
    font-size: 22px;
    line-height: 20px;

    padding:0 15px 0 0;

  }

  #header .right_menu > ul > li > a {
    margin: 0 0 0 5px;
  }
  #header #nav .navbar:not(.caret-bootstrap) .navbar-nav:not(.caret-bootstrap) li:not(.caret-bootstrap) > a.dropdown-toggle:not(.caret-bootstrap) > span.caret:not(.caret-bootstrap) {
    margin-left: 3px;
  }
}

@media  (min-width: 768px) and (max-width: 800px) {
  #header .hed_right, #header .top_menu {
    padding:0 !important;
  }
  #header .hed_right ul {
    display:block !important;

  }
  #header .hed_right .header-contact {
    margin-top:0 !important;
  }
  #header .top_menu {
    float:left !important;
  }
}

@media (max-width: 480px) {
	#header .hed_right ul li {
		margin: 0;
		padding: 0 5px;
		border: none;
		display: inline-block;
	}
}

.navbar:not(.no-border) .navbar-nav.dropdown-onhover>li:hover>a {
	margin-bottom:0;
}


figure.effect-chico img {
	-webkit-transform: scale(1) !important;
	transform: scale(1) !important;
}

figure.effect-chico:hover img {
	-webkit-transform: scale(1.2) !important;
	transform: scale(1.2) !important;
}

@media (min-width: 769px)
  {
   #header #nav .wsmenu > ul > li > a  {
	padding-top:15px;
	padding-bottom:15px;
   }
  }


  #header .nav > li:first-child > a {
    padding-left:0;
  }

</style>


</div>

      <div id="shopify-section-product" class="shopify-section">


<div itemscope="" itemtype="http://schema.org/Product">

  <meta itemprop="image" content="//cdn.shopify.com/s/files/1/0883/2986/products/layout1_800x.jpg?v=1554789225">

  <div id="content">
    <div class="container" data-section-id="product" data-section-type="product-page-section">
      <div class="product-json">{
"id":1724148711470,
"title":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST","handle":"mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test",
"description":"\u003cp\u003e\u003cstrong\u003eCALL NOW TO GRAB OUR SPECIAL $169 \/ SQM RATE*\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003e&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eWHATS INCLUDED;\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003eStructural steel mezzanine floor to your measurements&nbsp;\u003cspan\u003e✓\u003c\/span\u003e\u003c\/p\u003e\r\n\u003cp\u003eTimber flooring&nbsp;\u003cspan\u003e✓&nbsp;\u003c\/span\u003e\u003c\/p\u003e\r\n\u003cp\u003eAll hardware and floor fixings&nbsp;\u003cspan\u003e✓&nbsp;\u003c\/span\u003e\u003c\/p\u003e\r\n\u003cp\u003e\u003cspan\u003eLoad capacity&nbsp;350kg per sqm&nbsp;✓\u003cbr \/\u003e\u003cbr \/\u003e\u003c\/span\u003e\u003c\/p\u003e\r\n\u003cp\u003e\u003cspan\u003eDOUBLE OR TRIPLE YOUR SPACE.\u003c\/span\u003e\u003c\/p\u003e\r\n\u003cp\u003e\u003cspan\u003eMainly used for warehouse mezzanines, office mezzanines and garage mezzanines.\u003c\/span\u003e\u003c\/p\u003e\r\n\u003cp\u003e\u003cspan\u003e\u003cstrong\u003eSafety hand railing,&nbsp;Mezzanine Stairs, Mezzanine Sliding Gates and Installation\u003c\/strong\u003e&nbsp;\u003cstrong\u003eare optional\u003c\/strong\u003e&nbsp;and&nbsp;can be installed onto these floors where required.\u003cbr \/\u003e\u003cbr \/\u003e\u003c\/span\u003e\u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eMezzanine Load Capacity\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003eLoad capacity for these floors range from 350kg to 500kg.&nbsp;&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e&nbsp;\u003cimg src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/IMG_1664_large.jpg?v=1539902181\" alt=\"Mezzanine floor kit \" \/\u003e\u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003e\u003cspan\u003eEasy to install and dismantle&nbsp;\u003cbr \/\u003e\u003c\/span\u003e\u003c\/strong\u003e\u003cbr \/\u003eOur mezzanines are designed to be bolt on only.&nbsp;No welding or cutting needed&nbsp;for the mezzanine structure. Perfect for any handyman to install for you.&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e\u003cimg src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/IMG_1665_large.jpg?v=1539902496\" alt=\"Mezzanines Sydney \" \/\u003e\u003c\/p\u003e\r\n\u003cp\u003e&nbsp;\u003cstrong\u003eMezzanine Floor Kits\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003eThis system of flooring is supported by posts and beams which gives you the most amount of clear access underneath. It is a free standing mezzanine structure.\u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003e\u003cspan\u003e\u003cimg src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/IMG_1697_large.jpg?v=1539902058\" alt=\"Sydney Mezzanine Floor Builders\" \/\u003e\u003c\/span\u003e\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003e&nbsp;\u003cstrong\u003ePromotional Price T\u0026amp;C's\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003e*Please note our special promotion price applies to mezzanines over 50sqm in total size. The mezzanine structure colour available is only Silver Gal. Price is for supply only. Available nation wide.&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eOur Mezzanines are available for direct delivery and installation mainly but not limited to;\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003eSydney Mezzanines Floors\u003c\/p\u003e\r\n\u003cp\u003eMelbourne Mezzanines\u003c\/p\u003e\r\n\u003cp\u003eQueensland Mezzanines\u003c\/p\u003e\r\n\u003cp\u003ePerth Mezzanines\u003c\/p\u003e\r\n\u003cp\u003eAdelaide&nbsp;Mezzanines\u003c\/p\u003e\r\n\u003cp\u003eDarwin Mezzanines&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e\u003cstrong\u003ePlease call&nbsp;0409 809 117 if you require more information.\u003c\/strong\u003e\u003c\/p\u003e\r\n\u003cp\u003eOur mezzanine flooring kits are available for delivery and fast&nbsp;installation.\u003c\/p\u003e\r\n\u003cp\u003e&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e\u003cimg alt=\"\" src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/Untitled-1_d7d14c9b-c0b5-46f6-833f-1dedfe709dde_large.png?v=1473294350\" \/\u003e&nbsp;&nbsp;&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e&nbsp;\u003c\/p\u003e\r\n\u003cp\u003eThis system of flooring is supported by structural posts and beams which gives you the most amount of clear access underneath.\u003c\/p\u003e\r\n\u003cp\u003eThe general spacing between posts is approx 4-5m and heights can be adjusted to suit your requirements. Larger spacing between posts can be achieved.\u003c\/p\u003e\r\n\u003cp\u003eLoad capacity for these floors range from 350kg to 500kg per square meter. Railing, stairs and gates can be installed onto these floors where required. Please contact us on 0409 809 117 for more details.\u003c\/p\u003e\r\n\u003cp\u003e&nbsp;\u003c\/p\u003e\r\n\u003cp\u003e\u003cimg alt=\"\" src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/files\/Untitled-2_large.png?v=1473296080\" \/\u003e\u003c\/p\u003e",
"published_at":"T",
"created_at":"2019-03-25T18:43:26",
"vendor":"3D Racking",
"type":"",
"tags":[],
"price":0,
"price_min":0,
"price_max":0,
"price_varies":false,
"compare_at_price":null,
"compare_at_price_min":0,
"compare_at_price_max":0,
"compare_at_price_varies":true,
"variants":[{
"id":16092366831662,
"product_id":1724148711470,
"product_handle":"mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test",
"title":"Square",
"option1":"Square",
"option2":"",
"option3":"",
"sku":"",
"requires_shipping":false,
"featured_image":{
"created_at":"T",
"id":6374407798830,
"position":3,
"product_id":1724148711470,
"src":"\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/56485629_741933642867148_3561469366690119680_n.png?v=1554789241",
"updated_at":"T"},"image_id":6374407798830,
"available":true,
"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - Square",
"options":["Square"],
"price":0,
"weight":0,
"compare_at_price":"0.00",
"inventory_quantity":0,
"inventory_management":null,
"inventory_policy":"deny",
"inventory_in_cart":0,
"inventory_remaining":0,
"taxable":true,
"barcode":""},{
"id":16102231900206,
"product_id":1724148711470,
"product_handle":"mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test",
"title":"Rectangle",
"option1":"Rectangle",
"option2":"",
"option3":"",
"sku":"",
"requires_shipping":false,
"featured_image":{
"created_at":"T",
"id":6374407995438,
"position":4,
"product_id":1724148711470,
"src":"\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/56561431_408562383266516_2003869231636021248_n.png?v=1554789242",
"updated_at":"T"},"image_id":6374407995438,
"available":true,
"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - Rectangle",
"options":["Rectangle"],
"price":0,
"weight":0,
"compare_at_price":"0.00",
"inventory_quantity":0,
"inventory_management":null,
"inventory_policy":"deny",
"inventory_in_cart":0,
"inventory_remaining":0,
"taxable":true,
"barcode":""},{
"id":16102231932974,
"product_id":1724148711470,
"product_handle":"mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test",
"title":"L-Shaped",
"option1":"L-Shaped",
"option2":"",
"option3":"",
"sku":"",
"requires_shipping":false,
"featured_image":{
"created_at":"T",
"id":6348444336174,
"position":2,
"product_id":1724148711470,
"src":"\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/55853464_283037979299112_2138337944639897600_n.jpg?v=1554789225",
"updated_at":"T"},"image_id":6348444336174,
"available":true,
"name":"Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST - L-Shaped",
"options":["L-Shaped"],
"price":0,
"weight":0,
"compare_at_price":"0.00",
"inventory_quantity":0,
"inventory_management":null,
"inventory_policy":"deny",
"inventory_in_cart":0,
"inventory_remaining":0,
"taxable":true,
"barcode":""}],
"available":true,"images":["\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/layout1.jpg?v=1554789225","\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/55853464_283037979299112_2138337944639897600_n.jpg?v=1554789225","\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/56485629_741933642867148_3561469366690119680_n.png?v=1554789241","\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/56561431_408562383266516_2003869231636021248_n.png?v=1554789242"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0883\/2986\/products\/layout1.jpg?v=1554789225",
"options":["LAYOUT"],
"url":"\/products\/mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test"}</div>
      <input id="product-handle" type="hidden" value="mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test"> <!--  using for JS -->




<ol class="breadcrumb">
  <li><a href="/" title="Home">Home</a></li>




  <li>Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST</li>


</ol>

      <div class="title clearfix">
        <h1 itemprop="name">Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST</h1>
        <div class="title_right">
          <div class="next-prev">

          </div>
        </div>
      </div>
      <div class="pro_main_c">
        <div class="row">
          <div class="col-lg-6 col-md-7 col-sm-6 animated  animation-done bounceInLeft" data-animation="bounceInLeft">


<div class="slider_1 clearfix" data-featured="6374407798830" data-image="">

  <div id="image-block" data-zoom="enabled">
    <div class="flexslider product_gallery product_images" id="product-1724148711470-gallery">
      <ul class="slides">

        <li data-thumb="//cdn.shopify.com/s/files/1/0883/2986/products/layout1_800x.jpg?v=1554789225" data-title="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">

          <a class="image-slide-link" href="//cdn.shopify.com/s/files/1/0883/2986/products/layout1_1400x.jpg?v=1554789225" title="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST">
            <img src="//cdn.shopify.com/s/files/1/0883/2986/products/layout1_800x.jpg?v=1554789225" data-src="//cdn.shopify.com/s/files/1/0883/2986/products/layout1_800x.jpg?v=1554789225" alt="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST" data-index="0" data-image-id="6301720969262" draggable="false">
          </a>

        </li>

        <li data-thumb="//cdn.shopify.com/s/files/1/0883/2986/products/55853464_283037979299112_2138337944639897600_n_800x.jpg?v=1554789225" data-title="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">

          <a class="image-slide-link" href="//cdn.shopify.com/s/files/1/0883/2986/products/55853464_283037979299112_2138337944639897600_n_1400x.jpg?v=1554789225" title="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST">
            <img src="//cdn.shopify.com/s/files/1/0883/2986/products/55853464_283037979299112_2138337944639897600_n_800x.jpg?v=1554789225" data-src="//cdn.shopify.com/s/files/1/0883/2986/products/55853464_283037979299112_2138337944639897600_n_800x.jpg?v=1554789225" alt="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST" data-index="1" data-image-id="6348444336174" draggable="false">
          </a>

        </li>

        <li data-thumb="//cdn.shopify.com/s/files/1/0883/2986/products/56485629_741933642867148_3561469366690119680_n_800x.png?v=1554789241" data-title="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST" class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">

          <a class="image-slide-link" href="//cdn.shopify.com/s/files/1/0883/2986/products/56485629_741933642867148_3561469366690119680_n_1400x.png?v=1554789241" title="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST">
            <img src="//cdn.shopify.com/s/files/1/0883/2986/products/56485629_741933642867148_3561469366690119680_n_800x.png?v=1554789241" data-src="//cdn.shopify.com/s/files/1/0883/2986/products/56485629_741933642867148_3561469366690119680_n_800x.png?v=1554789241" alt="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST" data-index="2" data-image-id="6374407798830" class="featured_image" draggable="false">
          </a>

        </li>

        <li data-thumb="//cdn.shopify.com/s/files/1/0883/2986/products/56561431_408562383266516_2003869231636021248_n_800x.png?v=1554789242" data-title="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">

          <a class="image-slide-link" href="//cdn.shopify.com/s/files/1/0883/2986/products/56561431_408562383266516_2003869231636021248_n_1400x.png?v=1554789242" title="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST">
            <img src="//cdn.shopify.com/s/files/1/0883/2986/products/56561431_408562383266516_2003869231636021248_n_800x.png?v=1554789242" data-src="//cdn.shopify.com/s/files/1/0883/2986/products/56561431_408562383266516_2003869231636021248_n_800x.png?v=1554789242" alt="Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST" data-index="3" data-image-id="6374407995438" draggable="false">
          </a>

        </li>

      </ul>
    </div>

    <div id="carousel" class="flexslider">

      <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">

        <li data-image-id="6301720969262" style="width: 150px; float: left; display: block;" class="">
          <img src="//cdn.shopify.com/s/files/1/0883/2986/products/layout1_800x.jpg?v=1554789225" draggable="false">
        </li>

        <li data-image-id="6348444336174" style="width: 150px; float: left; display: block;">
          <img src="//cdn.shopify.com/s/files/1/0883/2986/products/55853464_283037979299112_2138337944639897600_n_800x.jpg?v=1554789225" draggable="false">
        </li>

        <li data-image-id="6374407798830" class="flex-active-slide" style="width: 150px; float: left; display: block;">
          <img src="//cdn.shopify.com/s/files/1/0883/2986/products/56485629_741933642867148_3561469366690119680_n_800x.png?v=1554789241" draggable="false">
        </li>

        <li data-image-id="6374407995438" style="width: 150px; float: left; display: block;">
          <img src="//cdn.shopify.com/s/files/1/0883/2986/products/56561431_408562383266516_2003869231636021248_n_800x.png?v=1554789242" draggable="false">
        </li>

      </ul></div><ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>

  </div>

</div>

          </div>
          <div class="col-lg-6 col-md-5 col-sm-6 animated animation-done  bounceInRight" data-animation="bounceInRight">

            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
              <meta itemprop="priceCurrency" content="AUD">
              <link itemprop="availability" href="http://schema.org/InStock">

              <form class="form-add-to-cart form-horizontal shapp_qb_prod" action="confirm" method="post" enctype="multipart/form-data" id="customMezzanineForm">

                <div class="desc_blk">
                  <h5>Product Description</h5>


                  <!-- variations section  -->


                  <div class="variations mt15">
                    <div class="row">
                      <div class="col-sm-12">


                        <div class="selector-wrapper main-product-select">

                            <label for="product-select-LAYOUT">
                                LAYOUT
                            </label>
                            <select class="single-option-selector" id="SingleOptionSelector-0">



                                <option selected="">Square</option>

                                <option>Rectangle</option>

                                <option>L-Shaped</option>

                            </select>

                          </div>


                        <select name="id" id="product-select-1724148711470" class="product-variants form-control hidden">



                          <option selected="selected" data-sku="" value="16092366831662">Square - $0.00 AUD</option>




                          <option data-sku="" value="16102231900206">Rectangle - $0.00 AUD</option>




                          <option data-sku="" value="16102231932974">L-Shaped - $0.00 AUD</option>


                        </select>


<div class="shappify-qty-msg"></div>





                      </div>
                    </div>
                  </div>


                  <div class="measurements">
                    <p class="small selector-wrapper">Note: The maximum height is 3.3m to the top; Heights exceeding 3.3m are 5% extra   </p>
                    <p class="small selector-wrapper">Insert measurements as depicted in the example</p>
                    <div class="row selector-wrapper">
                      	<label for="measurement-height">Mezzanine Height (m):   </label>
                  		<input required="" type="number" step="any" id="measurement-height" name="measurement-height" class="txtbox form-control" min="1" placeholder="height in m">
                    </div>
                    <div class="row selector-wrapper">
                      	<label for="measurement-len" id="lbllen">Mezzanine Length (m)</label>
                  		<input required="" type="number"  step="any" id="measurement-len" name="measurement-len" class="txtbox form-control" value="0" min="0" placeholder="length in m">
                    </div>
                    <div class="row selector-wrapper">
                      	<label for="measurement-width" id="lblwidth">Mezzanine Width (m)</label>
                  		<input required="" type="number"  step="any" id="measurement-width" name="measurement-width" class="txtbox form-control" value="0" min="0" placeholder="width in m">
                  	</div>
                    <div style="display:none;" class="l-measures row selector-wrapper">
                      	<label for="measurement-len-2">Length A1 (m):   </label>
                  		<input type="number"  step="any" id="measurement-len-2" name="measurement-len-2" class="txtbox form-control" value="0" min="0" placeholder="length in m">
                    </div>
                    <div style="display:none;" class="l-measures row selector-wrapper">
                      	<label for="measurement-width-2">Length B1 (m):   </label>
                  		<input type="number"  step="any" id="measurement-width-2" name="measurement-width-2" class="txtbox form-control" value="0" min="0" placeholder="width in m">

                      	<p class="small">The example image shows a (2x7 Rectangle + 2x3 Small Rectangle)</p>
                    </div>
                    <div class="row selector-wrapper">
                      	<label for="measurement-area" id="lblarea">Mezzanine Area (sqm):   </label>
                  		<input required="" type="number"  step="any" id="measurement-area" name="measurement-area" disabled="" class="txtbox form-control" min="0" placeholder="area in sqm">
                  	</div>
                    <div class="row selector-wrapper">
                      	<label class="form-check-label"><input id="req-install" class="form-check-input" type="checkbox" value="">Requires Installation</label>
                    	<input style="display:none;" disabled="" type="number" id="mez-install" name="mez-install" class="txtbox form-control" min="0">

                    </div>
                    <div class="row selector-wrapper">
                    	<label class="form-check-label"><input id="mez-opt-2" class="form-check-input mez-opt" type="checkbox" value="100">Handrailing (inc kickboard): $100/Lm</label>
                    	<input style="display:none;" step="any" type="number" id="mez-opt-len" name="mez-opt-len" class="txtbox form-control handrailing-opt" min="1">
                      <p style="display:none;" class="small handrailing-opt">Note: Insert meters required</p>
                    </div>

                  </div>
                  <div class="row selector-wrapper">
                      <h5>Stairs</h5>
                    <p class="small">Note: Maximum 3m High 0.9m Wide</p>

                    <select id="stairs-sel" class="stairs-list">
                      <option selected="" value="451">45 Deg with 1x Handrail</option>
                      <option value="452">45 Deg with 2x Handrails</option>
                      <option value="391">38 Deg with 1x Handrail</option>
                      <option value="392">38 Deg With 2x Handrails</option>
                    </select>
                    <br>
                    <div class="col-12" id="stairs-1-col">
                      <label class="form-check-label"><input id="stairs-1"  step="any" class="txtbox form-control stairsqty" type="number" value="0">45 Deg with 1x Handrail</label>

                    </div>
                    <div style="display:none;" class="col-12" id="stairs-2-col">
                      <label class="form-check-label"><input id="stairs-2"  step="any" class="txtbox form-control stairsqty" type="number" value="0">45 Deg with 2x Handrails</label>

                    </div>
                    <div style="display:none;" class="col-12" id="stairs-3-col">
                      	<label class="form-check-label"><input id="stairs-3"  step="any" class="txtbox form-control stairsqty" type="number" value="0">38 Deg with 1x Handrail</label>

                    </div>
                    <div style="display:none;" class="col-12" id="stairs-4-col">
                      	<label class="form-check-label"><input id="stairs-4"  step="any" class="txtbox form-control stairsqty" type="number" value="0">38 Deg With 2x Handrails</label>

                    </div>
                  </div>
                    <div class="row selector-wrapper">
                      <h5>Loading</h5>
                    <div class="col-sm-6">
                      <label class="form-check-label"><input id="load-350" class="form-check-input" type="checkbox" checked="" disabled="" value="">350kg/m<sup>2</sup></label>

                      </div>
                      <div class="col-sm-6">
                      <label class="form-check-label"><input id="load-500" class="form-check-input" type="checkbox" value="">500kg/m<sup>2</sup></label>

                      </div>
                    </div>
                    <div class="row selector-wrapper">
                      	<label class="form-check-label"><input id="mez-opt-1" class="form-check-input mez-opt" type="checkbox" value="1000">Landing platform(1m x 1m): $1000</label>

                        <label class="form-check-label"><input id="mez-opt-3" class="form-check-input mez-opt" type="checkbox" value="250">Sliding Gate/ Loading Gate (1.8m Wide): $250</label>


                      <div class="col-12">
                        <label class="form-check-label"><input id="mez-opt-7" class="form-check-input mez-opt" type="checkbox" value="750">Engineers certificate : $750</label>

                      </div>
                      <div class="col-12">
                        <label class="form-check-label"><input id="mez-opt-8" class="form-check-input mez-opt" type="checkbox" value="250">Assembly drawing layout:$250</label>

                      </div>
                      <div class="col-12">
                        <label class="form-check-label"><input id="mez-opt-9" class="form-check-input mez-opt" type="checkbox" value="250">Site Visit: $250</label>

                      </div>

                  </div>
                  <div class="row selector-wrapper">
                     <div class="col-12">

                        <label class="form-check-label"><input id="mez-opt-4" class="form-check-input mez-opt" type="checkbox" value="250">Delivery Sydney metro: $250</label>
                      </div>
                      <div class="col-12">

                        <label class="form-check-label"><input id="mez-opt-5" class="form-check-input mez-opt" type="checkbox" value="500">Delivery Melbourne: $500</label>
                      </div>
                    <div class="col-12">

                        <label class="form-check-label"><input id="mez-opt-6" class="form-check-input mez-opt" type="checkbox" value="500">Delivery Brisbane: $500</label>
                      </div>
                    <div class="col-12">

                        <label class="form-check-label"><input id="mez-opt-11" class="form-check-input mez-opt" type="checkbox" value="500">Delivery Western Australia: $500</label>
                      </div>
                    <div class="col-12">

                        <label class="form-check-label"><input id="mez-opt-10" class="form-check-input mez-opt" type="checkbox" value="500">Country Delivery: $500</label>
                      </div>
                      <p class="small">Note: For orders delivered to the Sydney depot, You then will organise pick up OR use loadshift.com.au to find transport</p>
                  </div>

                  <script>

                    $( document ).ready(function() {

                      var product_a = 0;
                      var product_b = 0;
                      var totalArea = 0;
                      var totalPrice = 0;
                      var optionPrice = 0;
                      var unitPrice = 139;
                      var stairsPrice = 0;
                      var height = $( '#measurement-height' ).val();


                      $(".stairsqty").change(function(){
                        stairsPrice = 0;
                        var value = $(this).val() * 1;
                        /*var value1 = $("#stairs-1").val() * 1;
                        var value2 = $("#stairs-2").val() * 1;
                        var value3 = $("#stairs-3").val() * 1;
                        var value4 = $("#stairs-4").val() * 1;
                        var value = value1+value2+value3+value4;
                        stairsPrice = 0;*/
                        if($(this).attr('id') == "stairs-1"){
                          stairsPrice += value * 2500;
                        }
                        if($(this).attr('id') == "stairs-2"){
                          stairsPrice += value * 2750;
                        }
                        if($(this).attr('id') == "stairs-3"){
                          stairsPrice += value * 2850;
                        }
                        if($(this).attr('id') == "stairs-4"){
                          stairsPrice += value * 3150;
                        }
                        calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);

                      });

                      $("#mez-opt-len").change(function(){

                        var handrailLength = $("#mez-opt-len").val();
                        if($("#mez-opt-2").is(':checked')){


                      		optionPrice = handrailLength * 100;
                          	$("#mez-opt-2").val(optionPrice);
                          	calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                        }

                      });

                      $(".mez-opt").change(function(){
                        var height = $( '#measurement-height' ).val();
                        if($(this).is(':checked')){
                        	optionPrice += $(this).val() * 1;

                          if($(this).attr('id') == "mez-opt-4"){

                            if($("#mez-opt-5").is(':checked')){
                             optionPrice -= $("#mez-opt-5").val() * 1;
                            }
                            if($("#mez-opt-6").is(':checked')){
                              optionPrice -= $("#mez-opt-6").val() * 1;
                            }
                            if($("#mez-opt-10").is(':checked')){
                              optionPrice -= $("#mez-opt-10").val() * 1;
                            }
                            if($("#mez-opt-11").is(':checked')){
                              optionPrice -= $("#mez-opt-11").val() * 1;
                            }

                          	$("#mez-opt-5").prop('checked', false);
                            $("#mez-opt-6").prop('checked', false);

                          	$("#mez-opt-10").prop('checked', false);
                            $("#mez-opt-11").prop('checked', false);
                          }
                          else if($(this).attr('id') == "mez-opt-5"){

                            if($("#mez-opt-4").is(':checked')){
                             optionPrice -= $("#mez-opt-4").val() * 1;
                            }
                            if($("#mez-opt-6").is(':checked')){
                              optionPrice -= $("#mez-opt-6").val() * 1;
                            }
                            if($("#mez-opt-10").is(':checked')){
                              optionPrice -= $("#mez-opt-10").val() * 1;
                            }
                            if($("#mez-opt-11").is(':checked')){
                              optionPrice -= $("#mez-opt-11").val() * 1;
                            }
                          	$("#mez-opt-6").prop('checked', false);
                            $("#mez-opt-4").prop('checked', false);

                          	$("#mez-opt-10").prop('checked', false);
                            $("#mez-opt-11").prop('checked', false);
                          }
                          else if($(this).attr('id') == "mez-opt-6"){

                            if($("#mez-opt-4").is(':checked')){
                             optionPrice -= $("#mez-opt-4").val() * 1;
                            }
                            if($("#mez-opt-5").is(':checked')){
                              optionPrice -= $("#mez-opt-5").val() * 1;
                            }
                            if($("#mez-opt-10").is(':checked')){
                              optionPrice -= $("#mez-opt-10").val() * 1;
                            }
                            if($("#mez-opt-11").is(':checked')){
                              optionPrice -= $("#mez-opt-11").val() * 1;
                            }
                          	$("#mez-opt-5").prop('checked', false);
                            $("#mez-opt-4").prop('checked', false);

                          	$("#mez-opt-10").prop('checked', false);
                            $("#mez-opt-11").prop('checked', false);
                          }
                          else if($(this).attr('id') == "mez-opt-10"){

                             if($("#mez-opt-4").is(':checked')){
                             optionPrice -= $("#mez-opt-4").val() * 1;
                            }
                            if($("#mez-opt-5").is(':checked')){
                              optionPrice -= $("#mez-opt-5").val() * 1;
                            }
                            if($("#mez-opt-6").is(':checked')){
                              optionPrice -= $("#mez-opt-6").val() * 1;
                            }
                            if($("#mez-opt-11").is(':checked')){
                              optionPrice -= $("#mez-opt-11").val() * 1;
                            }
                          	$("#mez-opt-5").prop('checked', false);
                            $("#mez-opt-4").prop('checked', false);

                          	$("#mez-opt-6").prop('checked', false);
                            $("#mez-opt-11").prop('checked', false);
                          }
                          else if($(this).attr('id') == "mez-opt-11"){
                           if($("#mez-opt-4").is(':checked')){
                             optionPrice -= $("#mez-opt-4").val() * 1;
                            }
                            if($("#mez-opt-5").is(':checked')){
                              optionPrice -= $("#mez-opt-5").val() * 1;
                            }
                            if($("#mez-opt-6").is(':checked')){
                              optionPrice -= $("#mez-opt-6").val() * 1;
                            }
                            if($("#mez-opt-10").is(':checked')){
                              optionPrice -= $("#mez-opt-10").val() * 1;
                            }
                          	$("#mez-opt-5").prop('checked', false);
                            $("#mez-opt-4").prop('checked', false);

                          	$("#mez-opt-6").prop('checked', false);
                            $("#mez-opt-10").prop('checked', false);
                          }



                        }
                        else{
                        optionPrice -= $(this).val() * 1;
                        }

                        if($("#mez-opt-2").is(':checked')){

                          $(".handrailing-opt").show();
                          $("#mez-opt-len").val(1);
                        }
                        else{

                          $(".handrailing-opt").hide();
                        }


                        calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);


                      });


                      $("#req-install").change(function(){

                        if ($('#req-install').is(':checked')) {
                          $("#mez-install").show();

                        }
                        else{
                          $("#mez-install").hide();
                        }
                        calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                      });


                      $("#load-500").change(function(){
                        var height = $( '#measurement-height' ).val();
                      	if ($('#load-350').is(':checked'))
                        {
                        	$("#load-500").prop('checked', true);
                          $("#load-500").prop('disabled', true);
                          $("#load-350").prop('disabled', false);
                        	$("#load-350").prop('checked', false);

                          if ($('#load-350').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 149;
                           }
                        	if ($('#load-350').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 139;
                           }
                           if ($('#load-500').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 169;
                           }
                           if ($('#load-500').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 159;
                           }

                       		calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                        }

                      });

                      $("#load-350").change(function(){

                      	if ($('#load-500').is(':checked'))
                        {

                          $("#load-500").prop('disabled', false);
                          $("#load-350").prop('disabled', true);
                        	$("#load-500").prop('checked', false);
                        	$("#load-350").prop('checked', true);
                          if ($('#load-350').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 149;
                           }
                        if ($('#load-350').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 139;
                           }
                           if ($('#load-500').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 169;
                           }
                           if ($('#load-500').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 159;
                           }

                          	calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                        }

                      });

                      $("select#stairs-sel").change(function(){
                        var stairs = $(this).children("option:selected").val();

                        stairsPrice = 0;
                        if(stairs == 451){
                        	$('#stairs-1-col').show();
                          	$('#stairs-1').val(0);
                          	$('#stairs-2-col').hide();
                          	$('#stairs-3-col').hide();
                          	$('#stairs-4-col').hide();
                        }
                        else if(stairs == 452){
                        	$('#stairs-1-col').hide();
                          	$('#stairs-2-col').show();
                          	$('#stairs-2').val(0);
                          	$('#stairs-3-col').hide();
                          	$('#stairs-4-col').hide();
                        }
                        else if(stairs == 391){
                        	$('#stairs-1-col').hide();
                          	$('#stairs-2-col').hide();
                          	$('#stairs-3-col').show();
                          	$('#stairs-3').val(0);
                          	$('#stairs-4-col').hide();
                        }
                        else if(stairs == 392){
                        	$('#stairs-1-col').hide();
                          	$('#stairs-2-col').hide();
                          	$('#stairs-3-col').hide();
                          	$('#stairs-4-col').show();
                            $('#stairs-4').val(0);
                        }
                        calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);


                      });

                       $("select#SingleOptionSelector-0").change(function(){
                        var layout = $(this).children("option:selected").val();

                           	$( '#measurement-width' ).val(0);
                           	$( '#measurement-len' ).val(0);
                           	$( '#measurement-width-2' ).val(0);
                           	$( '#measurement-len-2' ).val(0);
                       		$("#stairs-1").val(0);
                       		$("#stairs-2").val(0);
                       		$("#stairs-3").val(0);
                       		$("#stairs-4").val(0);
                         	$(".mez-opt").prop('checked', false);
                          	$("#mez-opt-len").hide();
                         stairsPrice =0;
                         unitPrice = 0;
                         optionPrice = 0;
                         product_a = 0;
                         product_b = 0;

                         if(layout == "L-Shaped"){
                           $('.l-measures').show();
                           $('#lblwidth').text("Length B (m)");
                           $('#lbllen').text("Length A (m)");
                           totalArea = (product_a+product_b);
                           $('#measurement-area').val(totalArea);
                          	$('#mez-install').val(totalArea*50);
                           calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);

                         }
                         else{
                           	$('.l-measures').hide();
                           	totalArea = product_a;
                           	$('#lblwidth').text("Mezzanine Width (m)");
                           	$('#lbllen').text("Mezzanine Length (m)");
                          	$('#measurement-area').val(totalArea);
                          	$('#mez-install').val(totalArea*50);
                          	calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                         }
                       });

                      $('#measurement-height').change(function(){
                        height = $(this).val();
                        var width = $( '#measurement-width' ).val();
                        var length = $( '#measurement-len' ).val();
                        product_a = (width * length);
                        totalArea = (product_a + product_b);
                        $('#measurement-area').val(totalArea);
                        $('#mez-install').val(totalArea*50);
                        if ($('#load-350').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 149;
                           }
                        if ($('#load-350').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 139;
                           }
                           if ($('#load-500').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 169;
                           }
                           if ($('#load-500').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 159;
                           }
                        calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                      });

                      $('#measurement-width').change(function(){
                        var width = $( this ).val();
                        var length = $( '#measurement-len' ).val();
                        product_a = (width * length);
                        totalArea = (product_a + product_b);
                        $('#measurement-area').val(totalArea);
                        $('#mez-install').val(totalArea*50);
                        if ($('#load-350').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 149;
                           }
                        if ($('#load-350').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 139;
                           }
                           if ($('#load-500').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 169;
                           }
                           if ($('#load-500').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 159;
                           }
                        calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                      });
                      $('#measurement-len').change(function(){

                        var length = $( this ).val();
                        var width = $( '#measurement-width' ).val();
                        product_a = (width * length);
                        totalArea = (product_a + product_b);
                        $('#measurement-area').val(totalArea);
                        $('#mez-install').val(totalArea*50);
                        if ($('#load-350').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 149;
                           }
                        if ($('#load-350').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 139;
                           }
                           if ($('#load-500').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 169;
                           }
                           if ($('#load-500').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 159;
                           }
                        calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                      });
                      $('#measurement-width-2').change(function(){

                        var width = $( this ).val();
                        var length = $( '#measurement-len-2' ).val();
                        product_b = (width * length);
                        totalArea = (product_a + product_b);
                        $('#measurement-area').val(totalArea);
                        $('#mez-install').val(totalArea*50);
                        if ($('#load-350').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 149;
                           }
                        if ($('#load-350').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 139;
                           }
                           if ($('#load-500').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 169;
                           }
                           if ($('#load-500').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 159;
                           }
                        calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                      });
                      $('#measurement-len-2').change(function(){

                        var length = $( this ).val();
                        var width = $( '#measurement-width-2' ).val();
                        product_b = (width * length);
                        totalArea = (product_a + product_b);
                        $('#measurement-area').val(totalArea);
                      	$('#mez-install').val(totalArea*50);
                        if ($('#load-350').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 149;
                           }
                        if ($('#load-350').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 139;
                           }
                           if ($('#load-500').is(':checked') && totalArea < 50)
                           {
                             unitPrice = 169;
                           }
                           if ($('#load-500').is(':checked') && totalArea > 50)
                           {
                             unitPrice = 159;
                           }
                        calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height);
                      });


                    });
                    function calculateTotalPrice(stairsPrice, unitPrice,optionPrice,totalArea,height) {
                      var totalPrice = 0;
                    		if ($('#req-install').is(':checked'))
                            {

                              $('#mez-install').val(totalArea*50);
                              totalPrice = (totalArea * unitPrice) + (totalArea*50);

                            }
                            else
                            {
                              $('#mez-install').val(0);
                              totalPrice = (totalArea * unitPrice);

                            }
                      		if(height > 3.3)
                            {
                                console.log("height > 3300: " + totalPrice);
                                totalPrice /= 0.95;
                            }
                            totalPrice += optionPrice+ stairsPrice;


                               console.log("totalPrice: " + totalPrice);
                              console.log("unitPrice: " + unitPrice);
                              console.log("optionPrice: " + optionPrice);
                              console.log("height: " + height);
                              console.log("stairsPrice: " + stairsPrice);
                            $('#productPriceSaved').val("$" + totalPrice.toFixed(2));
                            $('#productPrice').html("$" + totalPrice.toFixed(2));
                      			console.log(totalPrice.toFixed(2));
                      		var productPrice = $('#productPriceSaved').text();
                      			console.log(productPrice);
                    }


                  </script>

                  <style>
                    option:nth-child(1),option:nth-child(2),option:nth-child(3), option:nth-child(4),option:nth-child(5),option:nth-child(6),option:nth-child(7),option:nth-child(8),option:nth-child(9) {font-weight:bold;}
                  .ep_inline_block {display:inline-block;vertical-align:middle;margin-left:10px;}
                  .ep_block {display:block;margin-top:10px;margin-bottom:2px;}
                  </style>


                  <div class="desc_blk_bot clearfix">


                    <div class="price">
                      <span id="productPrice" class="money" itemprop="price" content="0.00">$0.00</span>

                      <input type="hidden" step="any" id="productPriceSaved" name="productPriceSaved" class="txtbox form-control" value="0.00">
                    </div>

                    <input type="submit" name="confirmOrder" class="btn_c" id="confirmOrder" value="Confirm Order">
                  <div class="maximum-in-stock-error">Maximum quantity available reached.</div>
                  </div>


                  <!-- cart section end -->

                  <div class="rte" itemprop="description">
                    <p><strong>CALL NOW TO GRAB OUR SPECIAL $169 / SQM RATE*</strong></p>
<p>&nbsp;</p>
<p><strong>WHATS INCLUDED;</strong></p>
<p>Structural steel mezzanine floor to your measurements&nbsp;<span>✓</span></p>
<p>Timber flooring&nbsp;<span>✓&nbsp;</span></p>
<p>All hardware and floor fixings&nbsp;<span>✓&nbsp;</span></p>
<p><span>Load capacity&nbsp;350kg per sqm&nbsp;✓<br><br></span></p>
<p><span>DOUBLE OR TRIPLE YOUR SPACE.</span></p>
<p><span>Mainly used for warehouse mezzanines, office mezzanines and garage mezzanines.</span></p>
<p><span><strong>Safety hand railing,&nbsp;Mezzanine Stairs, Mezzanine Sliding Gates and Installation</strong>&nbsp;<strong>are optional</strong>&nbsp;and&nbsp;can be installed onto these floors where required.<br><br></span></p>
<p><strong>Mezzanine Load Capacity</strong></p>
<p>Load capacity for these floors range from 350kg to 500kg.&nbsp;&nbsp;</p>
<p>&nbsp;<img src="https://cdn.shopify.com/s/files/1/0883/2986/files/IMG_1664_large.jpg?v=1539902181" alt="Mezzanine floor kit "></p>
<p><strong><span>Easy to install and dismantle&nbsp;<br></span></strong><br>Our mezzanines are designed to be bolt on only.&nbsp;No welding or cutting needed&nbsp;for the mezzanine structure. Perfect for any handyman to install for you.&nbsp;</p>
<p><img src="https://cdn.shopify.com/s/files/1/0883/2986/files/IMG_1665_large.jpg?v=1539902496" alt="Mezzanines Sydney "></p>
<p>&nbsp;<strong>Mezzanine Floor Kits</strong></p>
<p>This system of flooring is supported by posts and beams which gives you the most amount of clear access underneath. It is a free standing mezzanine structure.</p>
<p><strong><span><img src="https://cdn.shopify.com/s/files/1/0883/2986/files/IMG_1697_large.jpg?v=1539902058" alt="Sydney Mezzanine Floor Builders"></span></strong></p>
<p>&nbsp;<strong>Promotional Price T&amp;C's</strong></p>
<p>*Please note our special promotion price applies to mezzanines over 50sqm in total size. The mezzanine structure colour available is only Silver Gal. Price is for supply only. Available nation wide.&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Our Mezzanines are available for direct delivery and installation mainly but not limited to;</strong></p>
<p>Sydney Mezzanines Floors</p>
<p>Melbourne Mezzanines</p>
<p>Queensland Mezzanines</p>
<p>Perth Mezzanines</p>
<p>Adelaide&nbsp;Mezzanines</p>
<p>Darwin Mezzanines&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Please call&nbsp;0409 809 117 if you require more information.</strong></p>
<p>Our mezzanine flooring kits are available for delivery and fast&nbsp;installation.</p>
<p>&nbsp;</p>
<p><img alt="" src="https://cdn.shopify.com/s/files/1/0883/2986/files/Untitled-1_d7d14c9b-c0b5-46f6-833f-1dedfe709dde_large.png?v=1473294350">&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>This system of flooring is supported by structural posts and beams which gives you the most amount of clear access underneath.</p>
<p>The general spacing between posts is approx 4-5m and heights can be adjusted to suit your requirements. Larger spacing between posts can be achieved.</p>
<p>Load capacity for these floors range from 350kg to 500kg per square meter. Railing, stairs and gates can be installed onto these floors where required. Please contact us on 0409 809 117 for more details.</p>
<p>&nbsp;</p>
<p><img alt="" src="https://cdn.shopify.com/s/files/1/0883/2986/files/Untitled-2_large.png?v=1473296080"></p>
                  </div>

                  <!-- product variant sku, vendor -->



                  <!-- end product variant sku, vendor -->


                  <!-- bottom variations section  -->



                  <!-- bottom variations section end  -->

                  <!-- product tags -->




                  <!-- bottom cart section end -->

                  <div class="review_row clearfix">


                    <div class="share">
                      <div class="social-sharing">
                        <ul>
                            <li><a target="_blank" href="//www.facebook.com/sharer/sharer.php?u=https://3h763k1g03j1roq3-8832986.shopifypreview.com/products/mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test"><i class="fa fa-facebook"></i></a></li>
  <li><a target="_blank" href="//twitter.com/intent/tweet?url=https://3h763k1g03j1roq3-8832986.shopifypreview.com/products/mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test&amp;via=&amp;text=Mezzanine Floor Kits | Fast and Easy Installation | Per square metre TEST"><i class="fa fa-twitter"></i></a></li>
  <li><a target="_blank" href="//plusone.google.com/_/+1/confirm?hl=en&amp;url=https://3h763k1g03j1roq3-8832986.shopifypreview.com/products/mezzanine-floor-kits-fast-and-easy-installation-per-square-metre-test"><i class="fa fa-google-plus"></i></a></li>
  <li><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                      </div>
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

</div>
</div>



      <div id="shopify-section-footer" class="shopify-section">




<div id="footer">
  <div class="f_mid">
    <div class="container">
      <div class="row">


			<div class="col-sm-6 col-ms-6">
              <h4>Keep in Touch</h4>
              <div class="desc">
                Sign up for our newsletter and be the first to know about coupons and special promotions.
              </div>
              <div class="email_box">
  <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="✓">


    <input type="hidden" name="contact[tags]" value="newsletter">
    <input type="email" value="" placeholder="your-email@example.com" name="contact[email]" id="Email" class="txtbox" aria-label="your-email@example.com" autocorrect="off" autocapitalize="off">
    <button class="btn btn-link" type="submit" value="Subscribe" name="commit" id="Subscribe"><span class="fa fa-check"></span></button>

  </form>
</div>



            </div>




        	<div class="col-sm-6 col-ms-6">
              <h4>Why buy from us?</h4>
              <div class="desc">
                <p>Australian owned and operated.</p>
<p></p>
<p></p>
<p>Online store with wholesale unbeatable prices and stock available for immediate delivery.</p>
<p></p>
<p>Over 25+ years industry experience.</p>
<p></p>
<p>Reliable, cost effective and highest quality.</p>
              </div>
            </div>



      </div>
    </div>
  </div>
  <div class="f_bot">
    <div class="container">
      <div class="f_bot_left">© 2019 <a href="/" title="">Mezzanine Direct </a> | Managed by Uniq Designz Inc | <a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Designed by Uniq Designz Inc</a></div>

      <div class="f_bot_right">
        <div class="partner">
          <ul class="list-inline">

            <li><img src="//cdn.shopify.com/s/assets/payment_icons/american_express-ed5c54cf3ceb18cd4deb3687857b816c07e4f4c7e8719da4a206cea3e7961be1.svg" alt="american express"></li>

            <li><img src="//cdn.shopify.com/s/assets/payment_icons/apple_pay-f6db0077dc7c325b436ecbdcf254239100b35b70b1663bc7523d7c424901fa09.svg" alt="apple pay"></li>

            <li><img src="//cdn.shopify.com/s/assets/payment_icons/google_pay-c66a29c63facf2053bf69352982c958e9675cabea4f2f7ccec08d169d1856b31.svg" alt="google pay"></li>

            <li><img src="//cdn.shopify.com/s/assets/payment_icons/master-173035bc8124581983d4efa50cf8626e8553c2b311353fbf67485f9c1a2b88d1.svg" alt="master"></li>

            <li><img src="//cdn.shopify.com/s/assets/payment_icons/paypal-49e4c1e03244b6d2de0d270ca0d22dd15da6e92cc7266e93eb43762df5aa355d.svg" alt="paypal"></li>

            <li><img src="//cdn.shopify.com/s/assets/payment_icons/shopify_pay-d062d90212816e724f16662d29ca6e52a065d3a4cf538472b0b0c51c6f7c2ce6.svg" alt="shopify pay"></li>

            <li><img src="//cdn.shopify.com/s/assets/payment_icons/visa-319d545c6fd255c9aad5eeaad21fd6f7f7b4fdbdb1a35ce83b89cca12a187f00.svg" alt="visa"></li>

          </ul>
        </div>

      </div>

    </div>
  </div>
</div>
</div>




    </div>



</body></html>
