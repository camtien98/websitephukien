<?php 
	if(!isset($bien_bao_mat)){exit();}
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=str_replace("'","&#39;",$noi_dung);

	$tv="
	UPDATE quang_cao SET 
	html = '$noi_dung'
	WHERE vi_tri='phai';
	";
	mysqli_query($conn,$tv);
?>