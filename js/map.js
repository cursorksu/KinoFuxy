var map;
var markers=[];
var markerCluster = {};
//var geocoder=new google.maps.Geocoder();
//var bounds_map = new google.maps.LatLngBounds();
var infowindows=[];
var data = {"markers":[
  {
    "lat":55.6479034,
    "lng":37.6062963,
    "name":"",
    'content': "Симферопольский бульвар, дом 29, корпус 1",
    "id":1
  }
]};

function load_map() {

  var latlng = new google.maps.LatLng(55.6479034, 37.6062963);
  if (data.markers.length && data.markers.length == 1) {
    latlng = new google.maps.LatLng(data.markers[0].lat, data.markers[0].lng);
  }
  var mapOptions = {
    //styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
    disableDefaultUI: false,
    mapTypeControl: false,
    scrollwheel: false,
    zoom: 15,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL,
      position: google.maps.ControlPosition.RIGHT_BOTTOM
    },
    streetViewControl: false,
    center: latlng
  };
  map = new google.maps.Map(document.getElementById("map"), mapOptions);
}


function get_markers_from_json(data){

  if (data.markers.length){
    for (var i = 0; i < markers.length; i++ ) {
      if(markers.length == 1)
      {

      }
      //markers[i].setMap(null);
    }
    markers.splice(0, markers.length);

    // var bounds = new google.maps.LatLngBounds();

    $.each(data.markers, function(i, marker_data){
      var llng=new google.maps.LatLng(marker_data.lat, marker_data.lng);
      if (marker_data.name){ var contentString = marker_data.name; }
      else{ var contentString = '';	}

      var infowindow = new google.maps.InfoWindow({
        content: marker_data.content
      });
      infowindows[marker_data.id]=infowindow;

      // var mimage = new google.maps.MarkerImage('icons/marker.png', null, null, null, new google.maps.Size(86,85));
      var mimage = {
        url: 'images/marker.png',
        origin: new google.maps.Point(0, 0),
        size: new google.maps.Size(78, 105),
        anchor: new google.maps.Point(39,105)
      };

      var marker = new google.maps.Marker({
        map: map,
        position: llng,
        icon: mimage
        //optimized: false
      });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', function() {
        for(i = 0; i < infowindows.length; i++) {
          if(infowindows[i]){
            infowindows[i].close();
          }
        }
        infowindow.open(map,marker);
      });

      /*google.maps.event.addListener(infowindow, 'domready', function() {

        var iwOuter = $('.gm-style-iw');
        var iwBackground = iwOuter.prev();
        var iwCloseBtn = iwOuter.next();

        iwBackground.children(':nth-child(2)').css({'display' : 'none'});
        iwBackground.children(':nth-child(4)').css({'display' : 'none'});
        iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6)','z-index':'1', background: '#fdf5e8'});

        iwCloseBtn.css({width: '11px', height: '11px', right: '5px', top: '20px', background: '#fdf5e8'});
        iwCloseBtn.append('<span class="icon-close"></span>');
        iwCloseBtn.find('span').css({width: '11px', height: '11px','font-size': '11px', position: 'absolute', background: '#fdf5e8', 'z-index': '1'});

      });*/
    });

    // map.panTo(bounds.getCenter());
    // map.setZoom(12);
    // map.panBy(0, 0);
  }

}



function adaptMap () {
  var center = map.getCenter();
  google.maps.event.trigger(map, "resize");
  map.setCenter(center);
}

$(document).ready(function(){
  if($('#map').length>0){
    load_map();
    get_markers_from_json(data);
  }
});

$(function() {
  // listen for the window resize event & trigger Google Maps to update too
  $(window).resize(function() {
    // (the 'map' here is the result of the created 'var map = ...' above)
    google.maps.event.trigger(map, "resize");
  });
});