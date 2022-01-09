<?php
class weatherApiClient
{
    public function getTemperature($latitude, $longitude, $msl)
    {
        // do something
		$weatherApiUri = sprintf("https://api.met.no/weatherapi/locationforecast/1.9/?lat=%f&lon=%f&msl=%d", $latitude, $longitude, $msl);
		//echo('uri: ' . $weatherApiUri);
		$response = file_get_contents($weatherApiUri);
		$xml = simplexml_load_string($response);
		//echo('xml: ' . $xml->asXML());
		$time = $xml->xpath('/weatherdata/product/time');
		//echo('time: ' . $time[0]->asXML());
		$temp = $time[0]->xpath('location/temperature');
		//echo('temp: ' . $temp[0]->asXML());
		//echo('temp value: ' . (string)$temp[0]['value']);
        return (string)$temp[0]['value'];
    }
}
?>