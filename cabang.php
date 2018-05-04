<!DOCTYPE html>
<html lang="en">
<head>
  <title>ASCO Automotive</title>
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

  

<body>
  
  <div class="container table-responsive">
    <?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'sig';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);

echo 
'<div class="container"><br>
  <h2 align="center">Sistem Informasi Cabang PT. ASCO Automotive</h2><br>            
  <table class="table table-bordered">
    <thead align="center">
      <tr>
        <td><b>ID</b></td>
        <td><b>Nama Perusahaan</b></td>
        <td><b>Kota</b></td>
        <td><b>Provinsi</b></td>
        <td><b>Alamat</b></td>
        <td><b>No. Telepon</b></td>
        <td width="150"><b>Action</b></td>
      </tr>
    </thead>
    </tbody>
</div>
</body>  
 
';

  $sql = "SELECT * FROM `infocabang`";
  $lihatdata = mysql_query($sql);
  while ($data = mysql_fetch_array($lihatdata)) {
    echo '<tr>';
    echo '<td align="center">'.$data[0].'</td>';
    echo '<td>'.$data[1].'</td>';
    echo '<td>'.$data[2].'</td>';
    echo '<td>'.$data[3].'</td>';
    echo '<td>'.$data[4].'</td>';
    echo '<td>'.$data[5].'</td>';
  echo '<td align="center"><a href="detail.php"><span class="glyphicon glyphicon-map-marker"></span> Lokasi dan Detail</a></td>';
    echo '</tr>';
  }
echo '</table>';

mysql_close($koneksi);

?>
</body>
</html>
  </div>
   
</body>


</div><br><br>

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
