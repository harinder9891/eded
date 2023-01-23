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
				panControl: true,
				styles: [
				{
				"featureType": "administrative",
				"elementType": "labels.text.fill",
				"stylers": [
				{
				"color": "#642C27"
				}
				]
				},
				{
				"featureType": "landscape",
				"elementType": "all",
				"stylers": [
				{
				"color": "#EFEBEA"
				}
				]
				},
				{
				"featureType": "poi",
				"elementType": "all",
				"stylers": [
				{
				"visibility": "off"
				}
				]
				},
				{
				"featureType": "road",
				"elementType": "all",
				"stylers": [
				{
				"saturation": -100
				},
				{
				"lightness": 45
				}
				]
				},
				{
				"featureType": "road.highway",
				"elementType": "all",
				"stylers": [
				{
				"visibility": "simplified"
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
				"color": "#D4D2D4"
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
					url: "./assets/images/icon/map3.png", 
				}
			});
		}
	}
})(jQuery)