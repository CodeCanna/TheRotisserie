<?php
require_once(direname(__DIR__, 1) . "vendor/autoload.php");

class ChimkinDownloader {
    public function __construct($request) {
        $key = getApiKey();
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ebird.org/ws2.0/data/obs/US-NM/recent",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"X-eBirdApiToken: $key"
			),
        ));
        
        $response = curl_exec($curl);
		$jsonArray = json_decode($response, true);
    }
}