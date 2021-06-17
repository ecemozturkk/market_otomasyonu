<?php 	

require_once 'core.php';

$categoriesId = $_POST['categoriesId'];

$sql = "SELECT kategori_id, kategori_ad, kategori_etkin, kategori_durum FROM kategoriler WHERE kategori_id = $categoriesId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);