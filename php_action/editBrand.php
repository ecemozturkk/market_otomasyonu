<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$brandName = $_POST['editBrandName'];
  $brandStatus = $_POST['editBrandStatus']; 
  $brandId = $_POST['brandId'];

	$sql = "UPDATE markalar SET marka_ad = '$brandName', marka_etkin = '$brandStatus' WHERE marka_id = '$brandId'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Guncelleme basarili.";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Guncelleme sirasinda hata olustu.";
	}
	 
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST