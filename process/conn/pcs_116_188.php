<?php
$servername = '172.25.116.188'; $username = 'server_113.4'; $password = 'SystemGroup@2022';
try {
    $conn_pcs = new PDO ("mysql:host=$servername;dbname=pcs_db",$username,$password);
    $conn_pcs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Success";
} catch (PDOException $e) {
    echo 'NO CONNECTION'.$e->getMessage();
}
?>