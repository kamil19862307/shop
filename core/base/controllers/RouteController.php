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
    $s = Settings::instance();
    $s1 = shopSettings::instance();

    // $s1 = ShopSettings::get('property1');
    print_arr($s);
    print_arr($s1);
    // echo $s['admin']['name'];
    // echo $this->hair;
    exit();
  }
}
