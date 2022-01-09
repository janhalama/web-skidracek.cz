var tepmeratureHandlerUri = 'http://www.skidracek.cz/wp-content/themes/dracek/temperatureHandler.php/?latitude=50.674512&longitude=15.235718&msl=550';
var interval = 60000; // How long will be each picture shown? (in ms)
var temperature = new Array();

function TemperatureLookupNowAndRepeate(){
	LoadCurrentTemperature();
	window.setTimeout("TemperatureLookupNowAndRepeate()", interval);
}

function LoadCurrentTemperature(){
	$.ajax({
	  url: tepmeratureHandlerUri,
          cache: false,
	  dataType: 'json'
	}).done(function(temperature) {
		ShowTemperature(temperature);
	});
}

function ShowTemperature(temperature){
	$('#sd-id-temperature').html(temperature);
}
