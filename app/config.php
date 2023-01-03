<?php

define('PATH', realpath('.'));
define('SUBFOLDER', false);
define('URL', 'https://hotel.sitearaci.com');

error_reporting(1);
date_default_timezone_set('Europe/Istanbul');

return [
  'db' => [
    'name'    =>  'sitearac_hotel',
    'host'    =>  'localhost',
    'user'    =>  'sitearac_hotel',
    'pass'    =>  '123emo123.',
    'charset' =>  'utf8mb4'
  ]
];
