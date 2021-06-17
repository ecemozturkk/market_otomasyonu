<?php 	

require_once 'core.php';

$brandId = $_POST['brandId'];

$sql = "SELECT marka_id, marka_ad, marka_etkin, marka_durum FROM markalar WHERE marka_id = $brandId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);