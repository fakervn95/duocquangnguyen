<?php

if (!class_exists('WOOCCM_Field_Shipping')) {

  class WOOCCM_Field_Shipping extends WOOCCM_Field {

    protected static $_instance;
    protected $prefix = 'shipping';
    protected $option_name = 'wooccm_shipping';
    protected $defaults = array(
        'country',
        'first_name',
        'last_name',
        'company',
        'address_1',
        'address_2',
        'city',
        'state',
        'postcode',
    );

    public static function instance() {
      if (is_null(self::$_instance)) {
        self::$_instance = new self();
      }
      return self::$_instance;
    }

  }

}
