<?php
  /**
   * Geomaticly (beta)
   * 
   * 
   * @version    0.0.5
   * @copyright  2014 Geomaticly
   *
   * USAGE
   * require('geomaticly.php');
   * $block = $geomaticly->module("[YOUR MODULE KEY]");
   * echo $block["SOME BLOCK METHOD"];
   */

  class Geomaticly
  {
      //CONFIG VARS
      public $mode = "production";
      public $apikey = '';//api key for your site
      public $bucket = "https://cdn.geomatic.ly/publish";

      //CALLED TO LOAD MODULE CONTENT
      public function module($key){
        $ip = $_SERVER['REMOTE_ADDR'];
        $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        switch($this->mode){
          case "production":
            $response = $this->prod_content($key, $ip, $language);
            $obj = json_decode($response);
            break;
          case "development":
            $response = $this->dev_content($key, $ip, $language);
            $obj = json_decode($response);
            break;
        }

        $data = [];
        foreach($obj as $item){
          $data[$item->method] = $item->body;
        }
        return $data;
      }

      //***** DEPRICATED *****
      // The page function has been depricated and has 
      // been replaced with the module function
      public function page($key){
        $ip = $_SERVER['REMOTE_ADDR'];
        $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        switch($this->mode){
          case "production":
            $response = $this->prod_content($key, $ip, $language);
            $obj = json_decode($response);
            break;
          case "development":
            $response = $this->dev_content($key, $ip, $language);
            $obj = json_decode($response);
            break;
        }

        $data = [];
        foreach($obj as $item){
          $data[$item->method] = $item->body;
        }
        return $data;
      }

      //RETURNS COUNTRY OBJ
      public function get_country($key, $ip){
        $url="https://geomatic.ly/api/v1/geo/ip/?apikey=" . $this->apikey . "&ip=" . $ip;
        $country = $this->api_call($url);
        $obj = json_decode($country);
        return $obj;
      }


      //RETURNS DEV CONTENT FROM API
      public function dev_content($key, $ip, $language){
        $url="https://geomatic.ly/api/v1/modules/" . $key . "?apikey=" . $this->apikey . "&lang=" . $language . "&ip=" . $ip;
        $result = $this->curl($url);
        return $result; 
      }


      //RETURNS PROD CONTENT FROM STORAGE
      public function prod_content($key, $ip, $language){
        $country_response = $this->get_country($key, $ip);
        $country = strtolower($country_response->country_code3);
        $response = @file_get_contents($this->bucket ."/". $this->apikey ."/". $key ."/". $country ."/". $language .".json");
        if($response == ""){
          //LOAD DEFAULT
          $response = file_get_contents($this->bucket ."/". $this->apikey ."/". $key ."/default/default.json");
        }
        return $response;
      }


      public function api_call($url){
        if (!function_exists('curl_init')){
            die('Sorry cURL is not installed!');
        }
        $header[] = "Accept-Language:{$_SERVER['HTTP_ACCEPT_LANGUAGE']}";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
      }

  }

  $geomaticly = new Geomaticly;
?>
