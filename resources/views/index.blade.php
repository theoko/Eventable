@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div id="map"></div>

<script type="text/javascript">
    $(document).ready(function() {
       initMap(); 
    });
    
    //Create map variable
    var map;
    //Array of markers
    var markers = [];

    var myLatLng = {lat: -25.363, lng: 131.044};
    var events = [{eventName: "event1", address: "389 Boston Ave, MA", content: "cat"},
                  {eventName: "event2", address: "392 Boston Ave, MA", content: "dog"},
                  {eventName: "event3", address: "400 Boston Ave, 02115", content: "cat"},
                  {eventName: "event4", address: "410 Boston Ave, MA", content: "dog"},
                  {eventName: "event5", address: "420 Boston Ave, MA", content: "cat"}
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
            center: {lat: 42.406771, lng: -71.120524}
        }

        map_document = document.getElementById('map')
        map = new
        google.maps.Map(map_document, map_options);
        geojson_url = 'https://raw.githubusercontent.com/gizm00/blog_code/master/appendto/python_maps_2/collection.geojson'
        map.data.loadGeoJson(geojson_url, null, loadMarkers)
    }
</script>

@endsection