<?php
class weatherApiClient
{
    public function getTemperature($latitude, $longitude, $msl)
    {
        // do something
		$weatherApiUri = sprintf("https://wttr.in/%f,%f?format=j1", $latitude, $longitude);
		$response = file_get_contents($weatherApiUri);
		$weather = json_decode($response);
        return (string)$weather->current_condition[0]->temp_C;
    }
}
?>