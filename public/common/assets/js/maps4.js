(function($){
	"use strict";
	if ($('#contact_maps').length > 0) {
		google.maps.event.addDomListener(window, 'load', init);
		function init() {
			var latLng = {lat: 40.839500, lng: -74.096002};
			var mapOptions = {
				scrollwheel: false,
				zoom: 12,
				center: latLng,
				panControl: false,
				styles: [
        
				{
				"featureType": "administrative",
				"elementType": "labels.text.fill",
				"stylers": [
				{
				"color": "#37373A"
				}
				]
				},
				{
					"featureType": "administrative",
					"elementType": "labels.text.stroke",
					"stylers": [
					{
					"color": "#131313"
					}
					]
				},
                
				{
				"featureType": "landscape",
				"elementType": "all",
				"stylers": [
				{
				"color": "#131314"
				}
				]
				},
				{
				"featureType": "poi",
				"elementType": "all",
				"stylers": [
                    {
                    "color": "#131314"
                    }
                ]
				},
				{
				"featureType": "road",
				"elementType": "all",
				"stylers": [
                    {
                    "color": "#131314"
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
			var mapElement = document.getElementById('contact_maps');
			var map = new google.maps.Map(mapElement, mapOptions);
			var marker = new google.maps.Marker({
				position: latLng, 
				map: map,
				icon: {
					url: "./assets/images/icon/map4.png",
				}
			});
		}
	}
})(jQuery)