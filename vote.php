<?php
	include 'php-sdk/src/temboo.php';
	include 'util.php';
	include 'configuration.php';


	$session = new Temboo_Session($TEMBOO_USERNAME, $TEMBOO_APP_NAME, $TEMBOO_APP_KEY);
	$sendSMS = new Twilio_SendSMS($session);
	
	$inputs = $sendSMS->newInputs();
	$inputs->setAuthToken($TWILIO_AUTH_TOKEN)->setTo($_REQUEST["From"])->setAccountSID($TWILIO_ACCOUNT_SID)->setFrom($TWILIO_PHONE_NUMBER);
	
	$fields = array();
	$address = $_REQUEST["Body"];
	//$address = "112 Orchard Way Rosemont, PA 19010";
	$fields["address"] = $address;
	$closest_election = get_closest_election();
	$voting_information_address = "https://www.googleapis.com/civicinfo/us_v1/voterinfo/".$closest_election."/lookup?key=".$GOOGLE_API_KEY;
	
	$json_encoded = json_encode($fields);
	
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, $voting_information_address);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_encoded);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($json_encoded)
   )); 
   
	$result = curl_exec($ch);
   	$decoded_response = json_decode($result);
	$polling_location = $decoded_response->pollingLocations[0]->address;
	$body = NULL;
	if($polling_location == FALSE)
	{
		$body = "Sorry, we couldn't find anywhere for you to vote at :(";
	}
	else
	{	
		$body = 'You can vote at ' . capitalize_first_letters(strtolower($polling_location->locationName)) . " " . capitalize_first_letters(strtolower($polling_location->line1)) . ", " . capitalize_first_letters(strtolower($polling_location->city));
	}
	$inputs->setBody($body);
	$sendSMS->execute($inputs)->getResults();	
?>
