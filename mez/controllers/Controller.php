<?php

class Controller extends Database{

      public static function CreateView($viewName){
        require_once("./views/$viewName");
        static::doSomething();
      }
}
?>
