<?php

require_once(".something.php");

use CodeCanna\TheRotissorie;

class ChimkinDownloader {
    public static function getChimkins() {
		$key = getApiKey();

        $curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.thecatapi.com/v1/images/search?breed_ids=sphi",
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
		$chimkinArray = json_decode($response);
		var_dump($chimkinArray);
    }
}

$thing = $this->getChimkins();