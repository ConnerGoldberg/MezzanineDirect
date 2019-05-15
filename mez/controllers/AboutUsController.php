<?php

class AboutUsController extends Controller {

  public static function doSomething(){
    print_r(self::query("SELECT * FROM users"));
  }

}


?>
