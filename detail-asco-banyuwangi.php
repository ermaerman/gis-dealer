<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDCJ6cZ8t_HBdb2439Chkitvr162RbJ3h4&callback=initMap" type="text/javascript"></script>
    <title>ASCO Automotive</title>
    <style>

     /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
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
  </head>
  <body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">ASCO Automotive</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Beranda</a></li>
        <li class="active"><a href="cabang.php">Cabang</a></li>
        <li><a href="peta-persebaran-cabang.php">Peta Persebaran Cabang</a></li>
        <li><a href="tentang-kami.php">Tentang Kami</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="lainnya.php">Lainnya</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="map" style="height: 100%; width: 100%;">
</div>
<script type="text/javascript">
    var locations = [
       ['ASCO Automotive Banyuwangi <br> Jawa Timur <br> Jl. S. Parman No. 74 Banyuwangi <br> (0333) 419000', -8.2415686, 114.3516184, 3]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(-8.2415686, 114.3516184),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>


    <footer class="container-fluid">
   <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Beranda</a></li>
        <li><a href="legalitas.php">Legalitas</a></li>
        <li><a href="kebijakan-privasi.php">Kebijakan Privasi</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Copyright © 2016 ASCO Automotive, All right reserved.</a></li>
      </ul>
    </div>
</footer>
  </body>
</html>