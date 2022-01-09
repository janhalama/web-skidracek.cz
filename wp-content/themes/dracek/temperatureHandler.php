<?php
$fileName  = __DIR__ . '/weatherApiClient.php';
require_once $fileName;
?>

<?php
if (!isset($_GET['latitude'])) {
    header('400 Bad Request');
    exit;
}    

if (!isset($_GET['longitude'])) {
    header('400 Bad Request');
    exit;
}

if (!isset($_GET['msl'])) {
    header('400 Bad Request');
    exit;
}

try {
    $latitude = $_GET['latitude'];
	$longitude = $_GET['longitude'];
	$msl = $_GET['msl'];
	$weatherApiClientInstance = new weatherApiClient();
    $result = $weatherApiClientInstance->getTemperature($latitude, $longitude, $msl);
    echo json_encode($result);
} 
catch(Exception $e) 
{
    header('404 Not Found');
    exit;
}  
?>