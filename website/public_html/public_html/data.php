<?php

//https://iothera.000webhostapp.com/
$servername = "localhost";
$username = "id20835216_sulhairah17";
$password = "Bismillah17@";
$dbname = "id20835216_iotproject";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Koneksi ke database gagal: ".mysqli_connect_error());
}else{
    echo "Selamat koneksi berhasil";
}

$webhook = json_decode(file_get_contents('php://input'),true);
$topic = $webhook['topic'];
$payload = $webhook['payload'];


if ($topic == "control/bedroom/suhu" || $topic == "control/bedroom/kelembaban" || $topic == "control/bedroom/led"){
    $sql = "INSERT INTO bedroom (topic, payload) VALUES ('$topic', '$payload')";
}else if ($topic == "control/livingroom/suhu" || $topic == "control/livingroom/kelembaban" || $topic == "control/livingroom/led"){
    $sql = "INSERT INTO livingroom (topic, payload) VALUES ('$topic', '$payload')";
}
else if ($topic == "control/bathroom/suhu" || $topic == "control/bathroom/kelembaban" || $topic == "control/bathroom/led"){
    $sql = "INSERT INTO bathroom (topic, payload) VALUES ('$topic', '$payload')";
}else if ($topic == "control/kitchen/suhu" || $topic == "control/kitchen/kelembaban" || $topic == "control/kitchen/led"){
    $sql = "INSERT INTO kitchen (topic, payload) VALUES ('$topic', '$payload')";
}

mysqli_query($conn, $sql);
?>