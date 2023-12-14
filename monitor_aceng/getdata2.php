<?php
// konfigurasi database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "iot";

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    $data = mysqli_query($koneksi, "SELECT * from kelembaban ORDER BY jam DESC LIMIT 1"); // ambil data terbaru saja
    $no=1;
    foreach ($data as $row){
	$datax=[	    
        	"jam"=>@$row['jam'],
		"kelembaban"=>(float)@$row['kelembaban']
   		];
    }

    // $datax=["jam"=>date("Y-m-d H:i:s"), "suhu"=>12];
    echo json_encode($datax);

    ?>

