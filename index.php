<?php
    function __autoload($className)
    {
      require_once "$className.php";
    }


    $fruit = new ApplePropertiesDecorator(new Apple);
    var_dump($fruit->getFruit());
