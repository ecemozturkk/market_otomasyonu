<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$brandName = $_POST['brandName'];
  $brandStatus = $_POST['brandStatus']; 

	$sql = "INSERT INTO markalar (marka_ad, marka_etkin, marka_durum) VALUES ('$brandName', '$brandStatus', 1)";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST