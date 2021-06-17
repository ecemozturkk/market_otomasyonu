<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$brandName = $_POST['editCategoriesName'];
  $brandStatus = $_POST['editCategoriesStatus']; 
  $categoriesId = $_POST['editCategoriesId'];

	$sql = "UPDATE kategoriler SET kategori_ad = '$brandName', kategori_etkin = '$brandStatus' WHERE kategori_id = '$categoriesId'";

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