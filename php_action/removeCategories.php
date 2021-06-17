<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$categoriesId = $_POST['categoriesId'];

if($categoriesId) { 

 $sql = "UPDATE kategoriler SET kategori_durum = 2 WHERE kategori_id = {$categoriesId}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Kategoriyi kaldirma basarili.";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Kategoriyi kaldirma sirasinda hata olustu.";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST