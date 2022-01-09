var camera_frames_count = 10; // How many most recent images will be shown
var camera_frames_per_second = 1000; // How long will be each picture shown? (in ms)
var camera_frames = new Array();
var camera_frame_index = 0;

// Preload images
function CameraLoadImages(){
	for (i=0; i < camera_frames_count; i++) 
	{
		camera_frames[i] = new Image();
		camera_frames[i].src = "http://www.camtape.com/media.php?id=2&r=926648769&media=p" + ((camera_frames_count - (i+1)));
	}
	CameraShowImages(camera_frames);
}

// Loop preloaded images
function CameraShowImages(camera_frames) {
	//alert(camera_frames[camera_frame_index].src);
	var img = document.getElementById("sd-id-camera-image-stream-container");
	if (img != null)
	{
	document.getElementById("sd-id-camera-image-stream-container").src = camera_frames[camera_frame_index].src;
	}
	camera_frame_index = (camera_frame_index + 1) % camera_frames_count;
	camera_timeout = (camera_frame_index == 0) ? camera_frames_per_second * 5 : camera_frames_per_second;
	window.setTimeout("CameraShowImages(camera_frames)", camera_timeout);
}

