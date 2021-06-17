<?php 	

require_once 'core.php';

$sql = "SELECT marka_id, marka_ad, marka_etkin, marka_durum FROM markalar WHERE marka_durum = 1";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $activeBrands = ""; 

 while($row = $result->fetch_array()) {
 	$brandId = $row[0];
 	// active 
 	if($row[2] == 1) {
 		// activate member
 		$activeBrands = "<label class='label label-success'>Uygun</label>";
 	} else {
 		// deactivate member
 		$activeBrands = "<label class='label label-danger'>Uygun degil</label>";
 	}

 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	Duzenle/Kaldir <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" data-target="#editBrandModel" onclick="editBrands('.$brandId.')"> <i class="glyphicon glyphicon-edit"></i> Duzenle</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removeMemberModal" onclick="removeBrands('.$brandId.')"> <i class="glyphicon glyphicon-trash"></i> Kaldir</a></li>       
	  </ul>
	</div>';

 	$output['data'][] = array( 		
 		$row[1], 		
 		$activeBrands,
 		$button
 		); 	
 } // /while 

} // if num_rows

$connect->close();

echo json_encode($output);