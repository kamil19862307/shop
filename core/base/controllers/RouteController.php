<?php

namespace core\base\controllers;

use core\base\settings\Settings;
use core\base\settings\ShopSettings;

class RouteController
{
  static private $_instance;
  public $hair = 'Русые';
  private function __clone()
  {
  }

  static public function getInstance()
  {
    // return self::$_instance;
    if (self::$_instance instanceof self) {
      return self::$_instance;
    }
    return self::$_instance = new self;
  }


  private function __construct()
  {
    $s = Settings::get('routes');

    // $s1 = ShopSettings::get('property1');
    // print_arr($s);
    // echo $s['admin']['name'];
    // echo $this->hair;
    exit();
  }
}
