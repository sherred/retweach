<?php

class curlRequest {

	private $account;
	private $username;
	private $password;
	private $url;
	private $response;

	public function __construct($url) {
		$this->url = $url;
	}
	
	public function makeAuthRequest($account,$username,$password) {
		$this->account = $account;
		$this->username = $username;
		$this->password = $password;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_USERPWD, $this->account.$this->username.":".$this->password);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SET_VERIFYHOST, false);	
		
		$this->response = curl_exec($ch);
		curl_close($ch);
	}
	
	public function makeRequest() {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SET_VERIFYHOST, false);
		
		
		$this->response = curl_exec($ch);
		curl_close($ch);
	}
	
	public function getResponse() {
		return $this->response;
	}
}