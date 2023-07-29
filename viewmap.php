<?php include 'includes/headers.php';
		include 'includes/connect.php';
$lat = $_GET['lat'];
$lon = $_GET['lon'];
                                     include 'includes/functions.php';
                                     // include 'session.php';

      
 ?>

<div id="container">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
<div class="hero-unit-table">   
                             <table class="table table-striped table-bordered table-hover table-condensed" id="dataTables-example">
                                <div class="alert alert-success">
                                    <center><strong><i class="icon-user icon-large"></i>&nbsp;Land Map   </strong></center>
                                </div>
                             
                                   
                        
<div id="map"></div>
<script type="text/javascript">
    function initMap(){
            var location = {lat:<?php echo $lat ?> , lng: <?php echo $lon ?> };
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom:4,
                center:location
            });
            var marker = new google.maps.Marker({
                position: location,
                map:map
            });
    }
   
</script>
<script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8&callback=initMap"></script>
             
                        
                                     
                                   
                        <div class="col-sm-2"></div>
                        </div>
                        </div>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Map</title>
    <style type="text/css">
        *{
            margin: 0px;
            padding: 0px;
        }
        #map{
            height: 500px;
            width: 100%;
                }
    </style>
</head>
<body>
   