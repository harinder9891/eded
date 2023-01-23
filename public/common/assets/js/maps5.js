(function($){
"use strict";
	if ($('#contact_map').length > 0) {
		google.maps.event.addDomListener(window, 'load', init);
        function init() {
            var latLng = {lat: 40.839500, lng: -74.096002};
            var mapOptions = {
			scrollwheel: false,
			zoom: 12,
            center: latLng,
			styles: [
        
				{
				"featureType": "administrative",
				"elementType": "labels.text.fill",
				"stylers": [
				{
				"color": "#3A3A3A"
				}
				]
                },
				{
				"featureType": "administrative",
				"elementType": "labels.text.stroke",
				"stylers": [
				{
				"color": "#171717"
				}
				]
                },
                
				{
				"featureType": "landscape",
				"elementType": "all",
				"stylers": [
				{
				"color": "#1D1D1D"
				}
				]
				},
				{
				"featureType": "poi",
				"elementType": "all",
				"stylers": [
                    {
                    "color": "#171717"
                    }
                ]
				},
				{
				"featureType": "road",
				"elementType": "all",
				"stylers": [
                    {
                    "color": "#171717"
                    }
                ]
				},
				{
				"featureType": "road.highway",
				"elementType": "all",
				"stylers": [
                    {
                    "color": "#131314"
                    }
                ]
				},
				{
				"featureType": "road.arterial",
				"elementType": "labels.icon",
				"stylers": [
				{
				"visibility": "off"
				}
				]
				},
				{
				"featureType": "transit",
				"elementType": "all",
				"stylers": [
				{
				"visibility": "off"
				}
				]
				},
				{
				"featureType": "water",
				"elementType": "all",
				"stylers": [
				{
				"color": "#131314"
				},
				{
				"visibility": "on"
				}
				]}],
			};

			var mapElement = document.getElementById('contact_map');
			var map = new google.maps.Map(mapElement, mapOptions);
			var contentString = '<div class="contact-info-area">' + 
                '<div class="info-address">' +
                    '<span>Sagrada Familia</span> 25 Carrer De Torde Sant Joan St.' +
                    '<a href="#0">get direction</a>' +
                '</div>' + 
                '<div class="info-phone">' +
                    '+34 00 125 456 87' +
                '</div>' +
                '<div class="info-email">' +
                    '<a href="mailto:information@delicousa.com">information@delicousa.com</a>' +
                '</div>' +
            '</div>';
			var infowindow = new google.maps.InfoWindow({
				content: contentString
            });
            var marker = new google.maps.Marker({
				position: {lat: 40.835957, lng: -74.002293},
				map: map,
				icon: {
					url: "./assets/images/icon/map5.png",
				}
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
		}
	}
})(jQuery)




