<?php
$servername = "localhost";
$username = "id20835216_sulhairah17";
$password = "Bismillah17@";
$dbname = "id20835216_iotproject";

// Koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen</title>
    <link rel="stylesheet" href="stylesheet\style.css?v9">
</head>
<body>
    <div class="header">
    <a href="index.html"><div class="header-logo">Smart Home</div></a>
        <div class="header-list">
            <ul>
                <a href="bedroom.php"><li>Bedroom</li></a>
                <a href="livingroom.php"><li>Livingroom</li></a>
                <a href="bathroom.php"><li>Bathroom</li></a>
                <a href="kitchen.php"><li>Kitchen</li></a>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="copy-container">
            <h2>Kitchen</h2>
            <h3>Detail Monitoring</h3>
        </div>
        <div class="contents">
            <div class="contents-suhu">
              <p>Suhu</p>
             <?php
              $query1 = "SELECT * FROM kitchen WHERE topic = 'control/kitchen/suhu' ORDER BY id DESC LIMIT 1";
              $result1 = mysqli_query($conn, $query1);
              $data = mysqli_fetch_array($result1);
              echo $data['payload'];
              ?>
            </div>
            <div class="contents-kel">
              <p>Kelembaban</p>
              <?php
              $query1 = "SELECT * FROM kitchen WHERE topic = 'control/kitchen/kelembaban' ORDER BY id DESC LIMIT 1";
              $result1 = mysqli_query($conn, $query1);
              $data = mysqli_fetch_array($result1);
              echo $data['payload'];
              ?>
            </div>
            <div class="contents-led">
            <p>LED</p>
            <?php
              $query1 = "SELECT * FROM kitchen WHERE topic = 'control/kitchen/led' ORDER BY id DESC LIMIT 1";
              $result1 = mysqli_query($conn, $query1);
              $data = mysqli_fetch_array($result1);
              if ($data==NULL) {
                echo "No payload";
              }else if ($data['payload']=="0"){
                echo "OFF";
              }else if ($data['payload']=="1"){
                echo "ON";
              }
            ?>
            </div>
          </div>
    </div>
    </div>
</body>
</html>