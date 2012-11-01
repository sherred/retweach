<?php
include 'curl.php';
$magicanswer = "fannybaws";

$output = "";

if(isset($_POST)){
	extract($_POST);
	if($magic !== $magicanswer) {
		echo "ah ah ah, you didn't guess the magic word"; exit();
	}
	$url = "https://api.twitter.com/1/users/lookup.json?screen_name=".$who;
	$request = new curlRequest($url);
	$request->makeRequest();
	$data = json_decode($request->getResponse());
	$userfollowers = $data[0]->followers_count;
	
	$url = "https://api.twitter.com/1/statuses/show.json?id=".$what;
	$request = new curlRequest($url);
	$request->makeRequest();
	$data = json_decode($request->getResponse());
	$retweet_count = $data->retweet_count;
	
	$url = "https://api.twitter.com/1/statuses/".$what."/retweeted_by.json";
	$request = new curlRequest($url);
	$request->makeRequest();
	$retweeters = json_decode($request->getResponse());
	$total_count = 0;
	foreach($retweeters as $retweeter){
		$total_count = $retweeter->followers_count + $total_count;
	}
	$retweach = $total_count + $userfollowers;
	$output = "<p>".$who."'s tweet was retweeted <span class='cifra'>".$retweet_count."</span> times and had a reach of about ".$retweach." people</p>";
	 
}
echo $output;