<?php 
	function capitalize_first_letters($string_to_capitalize)
	{
		$first_letter = substr($string_to_capitalize, 0,1);
		$first_letter = strtoupper($first_letter);
		$string_to_capitalize = $first_letter . substr($string_to_capitalize, 1);
		
		$space_index = strpos($string_to_capitalize, " ");
		if($space_index === FALSE)
		{
			return $string_to_capitalize;
		}
		
		while($space_index !== FALSE)
		{
			$string_to_capitalize =substr($string_to_capitalize, 0, $space_index) . " " . strtoupper(substr($string_to_capitalize, $space_index + 1, 1)) . substr($string_to_capitalize, $space_index+2);
			$space_index = strpos($string_to_capitalize, " ", $space_index +1);
		}
		return $string_to_capitalize;
	}

	function get_closest_election()
	{
		$api_key = $GOOGLE_API_KEY;
		$address_to_query = 'https://www.googleapis.com/civicinfo/us_v1/elections';
		$api_to_hit = $address_to_query . '?key=' . $api_key;

$contents = file_get_contents($api_to_hit);
		
		$contents_as_json = json_decode($contents);
		$elections = $contents_as_json->elections;
			
		$earliest_election = NULL;
		$earliest_date = NULL;

		foreach($elections as $election)
		{
			
			$election_time = strtotime($election->electionDay);
			if($earliest_election === NULL || $election_time < $earliest_date)
			{
				$earliest_date = $election_time;
				$earliest_election = $election->id;
			}
		}

		return $earliest_election;
	}
?>
