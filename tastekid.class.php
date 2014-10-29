<?php
/**
 *  PHP Wrapper for the tastekid API - see http://www.tastekid.com/page/api
 *  Author : Simon Chénard
 *  Date : 2011-01-25 
 */

class TasteKidAPI {
  
  //Default value for a few variables to speed up the development process : no need to specifiy an option array
  private $url          = "http://www.tastekid.com/ask/ws";
  private $api_username = "";
  private $api_key      = "";
  private $verbose      = false;
  private $format       = "";
  private $jsonp        = "";
  private $rawresult    = false;
  
  /* 
   * The constructor offer the possibility to set the options.
   */
  public function __construct($options = array()) {
    $this->_setOptions($options);
  }
  
  /* 
   * To specify options after the instantiation.
   */
  public function setOptions($options) {
    $this->_setOptions($options);
  }
  
  /* 
   * Internal method for setting the options.
   */
  private function _setOptions($options) {
    if (is_array($options) && !empty($options)) {
      foreach($options as $name => $value) {
        switch ($name) {
          case "api_username" : if (is_string($value)) $this->api_username = $value; break;
          case "api_key"      : if (is_string($value)) $this->api_key = $value; break;
          case "verbose"      : if (is_bool($value)) $this->verbose = $value; break;
          case "format"       : if (strtoupper($value) == "JSON") $this->format = "JSON"; else $this->format = ""; break;
          case "jsonp"        : if (is_string($value)) $this->jsonp = $value; break;
          case "rawresult"    : if (is_bool($value)) $this->rawresult = $value; break;
        }
      }
    }
  }
  
  /*
   * There is two methods use the $params variable the API : 
   * 1 - Submit a list of elements, separated by a string
   * 2 - Submit an array of this type : 
   *    array(
   *      "band" => "band1, band2", 
   *      "book" => "book1, book2"
   *    )
   * Note : plural used in the $result var
   */
  public function query($params, $result = "") {
    $query = "";
            
    if (is_string($params)) {
      $query = urlencode($params);
    }
    else {
      if (is_array($params)) {
        
        foreach($params as $cat => $value) {
          switch ($cat) {
            case "band" || "movie" || "show" || "book" || "author"  : 
              $query .= $cat . ":" . $value . ","; break;
          }
        }
        //Cut the last comma
        $query = substr($query, 0, -1);
        $query = urlencode($query);
      }
    }
    
    if (!empty($result)) {
      switch ($result) {
        case "music" || "movies" || "shows" || "books" || "authors"  : 
          $query .= "//" . $result; break;
      }
    }
    
    if (!empty($query)) {
      $raw_result = $this->_query($query);
      return $this->_formatResult($raw_result); 
    }
  }
  
  /* 
   * Receive the formatted query string, add the parameters and query the API.
   */
  private function _query($query) {
    $url = $this->url . "?q=" . $query;
    
    if ($this->verbose)
      $url .= "&verbose=1";
    if ($this->format == "JSON")
      $url .= "&format=JSON";
    if (!empty($this->jsonp))
      $url .= "&jsonp=" . urlencode($this->jsonp);
    if (!empty($this->api_username) && !empty($this->api_key))
      $url .= "&f=" . $this->api_username . "&k=" . $this->api_key;
      
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
    //Debugging lines
    //curl_setopt($ch, CURLOPT_HEADER, 1);
    //curl_setopt($ch, CURLOPT_VERBOSE,TRUE);

    $return = curl_exec($ch);
    
    if ($return !== false) {
      return $return;
    }
    else {
      return false;
    }
  }
  
  /* 
   * Receive the result of the query, decode it and return an object which is either : 
   * 1 - The complete request, information about the queried element and the result
   * 2 - Or only the results
   * based on the rawresult option.
   */
  private function _formatResult($result) {
    if ($this->format == "JSON") {
      if ($this->verbose) {
        $json = json_decode($result);
      }
      else {
        $json = json_decode($result);
      }
      
      if ($this->rawresult)
        return $json;
      else
        return $json->Similar->Results;
    }
    else {  //The format is XML
      if ($this->verbose) {
        $xml = simplexml_load_string($result, 'SimpleXMLElement', LIBXML_NOCDATA);
      }
      else {
        $xml = simplexml_load_string($result, 'SimpleXMLElement', LIBXML_NOCDATA);
      }
      
      if ($this->rawresult)
        return $xml;
      else
        return $xml->results->resource;
    }
  }
}
