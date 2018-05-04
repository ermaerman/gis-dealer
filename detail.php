<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dealer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

   .thumbnail {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

/* Add shadows on hover */
.thumbnail:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.thumbnail .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

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
      <a class="navbar-brand" href="index.php">Dealer</a>
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

<br>
<br>

<div class="container">

<table class="table">
    <thead>
      <tr>
        <th>Info</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="detail-asco-pasar-minggu.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Pasar Minggu</a></td>
      </tr>      
      <tr class="success">
        <td><a href="detail-asco-tanjung-priok.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Tanjung Priok</a></td>
      </tr>
      <tr class="danger">
        <td><a href="detail-asco-dewi-sartika.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Dewi Sartika</a></td>
      </tr>
      <tr class="info">
        <td><a href="detail-asco-radio-dalam.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Radio Dalam</a></td>
      </tr>
      <tr class="warning">
        <td><a href="detail-asco-fatmawati.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Fatmawati</a></td>
      </tr>
      <tr class="active">
        <td><a href="detail-asco-jemur-sari.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Jemur Sari</a</td>
      </tr>
       <tr class="info">
        <td><a href="detail-asco-bekasi.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Bekasi</a>
          <tr>
        <td><a href="detail-asco-mastrip.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Mastrip</a></td>
      </tr> 
       <tr class="warning">
        <td><a href="detail-asco-jember.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Jember</a></td>
      </tr>
      <tr class="warning">
        <td><a href="detail-asco-lumajang.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Lumajang</a></td>
      </tr>
      <tr class="active">
        <td><a href="detail-asco-banyuwangi.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail ASCO Automotive Banyuwangi</a></td>
      </tr>
    </tbody>
  </table>







<br>
<br><br>



</div><br><br>

<footer class="container-fluid">
   <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Beranda</a></li>
        <li><a href="legalitas.php">Legalitas</a></li>
        <li><a href="kebijakan-privasi.php">Kebijakan Privasi</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Copyright © 2016, All right reserved.</a></li>
      </ul>
    </div>
</footer>

</body>
</html>
