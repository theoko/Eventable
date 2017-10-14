@extends('layouts.app')

@section('title', 'Home')

@section('map')

<div id="map"></div>

@endsection

@section('content')

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
</style>

<script type="text/javascript">
    //Create map variable
var map;
//Array of markers
var markers = [];

var myLatLng = {lat: -25.363, lng: 131.044};
var events = [
    @foreach($locations as $l)
        {eventName: "{{ $l->name }}: ", address: "{{ $l->address }}", content: "{{ str_limit($l->description, 10, '...') }}"},
    @endforeach
];

var geocodeWithAddress = { address: "389 Boston Ave, Medford MA", lat: 0, lng: 0 }

function loadMarkers() {
	console.log('creating markers')
	geocoder = new google.maps.Geocoder()
	events.forEach(function(events){
		var address = events.address
		geocoder.geocode({ 'address' : address}, function(results, status){
			if (status == 'OK'){
				//Make new marker
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location,
					title: events.eventName
				})

				var infoWindow = new google.maps.InfoWindow()
				marker.addListener('click', function () {
					infoWindow.close()
					infoWindow.setContent(events.eventName + '\n' + events.content)
					infoWindow.open(map, marker)
					});
				
			} else{
				alert('geocode was not successful')
			}
		})
	})
}

function initMap() {

	map_options = {
		zoom: 16,
		center: {lat: 42.406771, lng: -71.120524},
        zoomControl: false
	}

    map_document = document.getElementById('map')
    map = new google.maps.Map(map_document, map_options);
    geojson_url = 'https://raw.githubusercontent.com/gizm00/blog_code/master/appendto/python_maps_2/collection.geojson'
    map.data.loadGeoJson(geojson_url, null, loadMarkers)
}
</script>

<script type="text/javascript">
    $(document).ready(function() {
       $('closebtn').hide();
       $('body').attr('onload', 'initMap()');
    });
</script>

@endsection