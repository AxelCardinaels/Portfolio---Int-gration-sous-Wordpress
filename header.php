<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
  <html class="no-js lt-ie9 lt-ie8">
  <link href="<?php echo get_stylesheet_uri()."ie7.css"; ?>" rel="stylesheet"/> 
<![endif]-->

<!--[if IE 8]>         
  <html class="no-js lt-ie9"> 
  <link href="<?php echo get_stylesheet_uri()."ie8.css"; ?>" rel="stylesheet"/> 
<![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet"/>
 <!--<![endif]-->
<html lang="fr">
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php bloginfo('name') ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="http://www.axelcardinaels.be/modernizr-2.6.2.min.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>

        var map;
        

        function initialize() {

            var roadAtlasStyles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"road","elementType":"labels","stylers":[{"color":"#888888"},{"weight":"0.5"}]}]

            var mapOptions = {
                zoom: 13,
                center: new google.maps.LatLng(50.71727,5.6423299),
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas'],
                },
                 disableDefaultUI: true,
                 scrollwheel: false,
                  navigationControl: false,
                  mapTypeControl: false,
                  scaleControl: false,
                  draggable: false
            };

            var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
            var marker = new google.maps.Marker({
              position: google.maps.LatLng(50.6950709, 5.647267),
              map: map,
              icon: iconBase + 'schools_maps.png'
            });

            map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

            var styledMapOptions = {
                
            };

            var usRoadMapType = new google.maps.StyledMapType(
                roadAtlasStyles, styledMapOptions);

            map.mapTypes.set('usroadatlas', usRoadMapType);
            map.setMapTypeId('usroadatlas');
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>



  </head>


      <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <body>