<?php
/** 
 * I strongly suggest you check the API documentation first : http://www.tastekid.com/page/api
 */
 
include("tastekid.class.php");

//Options can be specified through the constructor
$api = new TasteKidAPI(array("verbose" => false));
//And can be changed through this function anytime
//These parameters values are actually the default one (which I believe should be more likely to be used).
$api->setOptions(array("verbose" => true, "format" => "XML", "rawresult" => true));
//If you need to set up your API credentials
$api->setOptions(array("api_username" => "abc", "api_key" => "def"));

//Basic query
$suggestions = $api->query("casablanca, the beatles");
//Query with based on media type, second value is the result type
$suggestions = $api->query(array("band" => "the beatles", "movie" => "casablanca, star wars"), "movies");

// *** If format is XML ***
//Default result format
echo $suggestions[0]->name;
echo $suggestions[0]->type;
foreach ($suggestions as $value)
{
  echo $value['name'];

}

//If result format is raw
echo $suggestions->info->resource[0]->name;
echo $suggestions->info->resource[0]->type;

echo $suggestions->results->resource[0]->name;
echo $suggestions->results->resource[0]->type;

// *** If format is JSON ***
//Default result format
echo $suggestion[0]->Name;
echo $suggestion[0]->Type;

//If result format is raw
echo $suggestion->Similar->Info[0]->Name;
echo $suggestion->Similar->Info[0]->Type;

echo $suggestion->Similar->Results[0]->Name;
echo $suggestion->Similar->Results[0]->Type;

