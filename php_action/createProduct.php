<?php
require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {
	$productName = $_POST['productName'];
	
	$quantity = $_POST['quantity'];
	$rate = $_POST['rate'];
	$brandName = $_POST['brandName'];
	$categoryName = $_POST['categoryName'];
	$productStatus = $_POST['productStatus'];

	$type = explode('.', $_FILES['productImage']['name']);
	$type = $type[count($type)-1];
	$url = '../assets/images'.uniqid(rand()).'.'.$type;
	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
		if(is_uploaded_file($_FILES['productImage']['tmp_name'])) {
			if(move_uploaded_file($_FILES['productImage']['tmp_name'], $url)) {
				$sql = "INSERT INTO urunler (urun_ad, urun_resim, marka_id, kategori_id, adet, fiyat, etkin, durum) VALUES ('$productName', '$url', '$brandName', '$categoryName', '$quantity', '$rate', '$productStatus',1)";
				
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Ekleme Basarili.";
				}
				else {
					$valid['success'] = false;
					$valid['messages'] = "Ekleme sirasinda hata olustu.";
				} }
				else {
					return false;
				
			} //if move 
		} //if is uploaded
	} // if in array

	$connect->close();
	echo json_encode($valid);




} // if $_POST




?>