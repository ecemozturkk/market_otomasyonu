<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$brandId = $_POST['brandId'];

if($brandId) { 

 $sql = "UPDATE markalar SET marka_durum = 2 WHERE marka_id = {$brandId}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Markayi kaldirma basarili.";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Markayi kaldirma sirasinda hata olustu.";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST