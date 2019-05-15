<?php

Route::set('index.php',function(){

      IndexController::CreateView('Index.php');

});

Route::set('about-us', function(){

      AboutUsController::CreateView('AboutUs.php');

});

Route::set('contact-us', function(){

ContactUsController::CreateView('ContactUs.php');

});

Route::set('custom_mezzanine',function(){

      ProductsController::CreateView('custom_mezzanine.php');

});


Route::set('confirm',function(){

      ProductsController::CreateView('confirm.php');

});

Route::set('processed.php',function(){

      ProductsController::CreateView('processed.php');

});




?>
