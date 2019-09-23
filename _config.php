<?php

if (file_exists(__DIR__ . '../vendor/autoload.php')) {
    require_once __DIR__ . '../vendor/autoload.php';
}
//to compatible with ss 3.7 and php 7.3
if (class_exists('ContentController')) {
    SS_Object::add_extension('ContentController', 'HashPathExtension');
}
