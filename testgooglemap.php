<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
function initialize() {
    var center = new google.maps.LatLng(13.732881766645967,100.48181533813477);
    var myOptions = {
        zoom: 12,
        center: center,
        scrollwheel: false,
        mapTypeControl: false,
        navigationControl: true,
        disableDefaultUI: true,
        streetViewControl: false,
        noClear: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map"), myOptions);
 
    var rendererOptions = {
        draggable: true
    };
    var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
 
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("route"));
 
    var directionsService = new google.maps.DirectionsService();
 
    var request = {
        origin: "14.068, 100.6009",
        destination: "13.8152, 100.5606",
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });
}
</script>
</body>
</html>
