<?php
	@session_start();
	$error ="";
	if(isset ($_SESSION['ten_dang_nhap']))
	{
		include("controllers/c_tai_khoan.php");
		$c_tai_khoan = new C_tai_khoan();
		$c_tai_khoan->Dat_san_pham_khi_da_co_tk_2();
	}
	else
	{
		if(isset($_SESSION['error']))
		{
			$error = $_SESSION['error'];	
		}
		include("controllers/Smarty_shop_jean.php");
		$smarty = new Smarty_shop_jean();
		$view = "views/checkout/layout.tpl";
		$title = "Checkout";
		$smarty->assign("title",$title);
		$smarty->assign("error",$error);
		$smarty->assign("view",$view);
		$smarty->Hien_thi_giao_dien("layout.tpl");	
	}
?>