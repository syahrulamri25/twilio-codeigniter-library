<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// include the twilio PHP helper library
require_once 'twilio.php';

class Twilioapi{
	
	function newClient(){
		$AccountSid = "XXXXXXX"; // your AccountSid here
		$AuthToken  = "YYYYYYY"; // your AuthToken here
		
		$client = new TwilioRestClient($AccountSid, $AuthToken);
		return $client;
	}
	
}