<?php
// Always include config & constants
require_once "config/config.php";
require_once "constants.php";

# Get url path info to establish what controller is being called
$path_info = explode( '/', trim( $_SERVER['QUERY_STRING'], '/' ) );

# Establish our MVC variables from url
# [0] = Controller
# [1] = Method
# [2] = Variable (and so on)
$controller = ( isset($path_info[0]) && $path_info[0] != '' ) ? $path_info[0] : 'welcome';
$method = ( isset($path_info[1]) && $path_info[1] != '' ) ? $path_info[1] : 'index';
$variables = array();
foreach( $path_info as $key => $value ){
  if( $key == 0 || $key == 1 ) # Skip these (controller & method)
    continue;
  $variables[] = $value;
};

// Open controller
if( file_exists("controllers/{$controller}.php") ){

  require_once "controllers/{$controller}.php";
  $page = new $controller;
  # Check if method exists
  if( method_exists( $page, $method ) ){
    $page->{$method}($variables);
  } else {
    die("Page not found.");
  }
} else {
  die("Error, page doesn't exist.");
}
