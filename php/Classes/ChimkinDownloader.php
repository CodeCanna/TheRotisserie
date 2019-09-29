<?php
require_once(dirname(__DIR__, 1) . "/vendor/autoload.php");
require_once(".something.php");

class ChimkinDownloader {
    public function __construct($request) {
        $key = getApiKey();
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $request,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"x-api-key: $key"
			),
        ));
        
        $response = curl_exec($curl);
        $jsonArray = json_decode($response, true);
        
        var_dump($jsonArray);
    }
}

$thing = new ChimkinDownloader("https://api.thecatapi.com/v1/images/search?breed_ids=sphy");