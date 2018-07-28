<?php 
	include("controllers/c_tai_khoan.php");
	$c_tai_khoan = new C_tai_khoan();
	
	
	if(isset($_GET['thoat']))
		$c_tai_khoan->thoat_dang_nhap();
	else 
		$c_tai_khoan->Hien_thi_dang_nhap();
		
?>