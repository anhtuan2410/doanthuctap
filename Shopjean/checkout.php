<?php
	@session_start();
	include("controllers/c_tai_khoan.php");
	$c_tai_khoan = new C_tai_khoan();
	$error ="";
	$co=0;
	$co1=0;
	$co=$c_tai_khoan->checkcart();
	
	if($co==1 && isset($_SESSION['ten_dang_nhap'])){
			echo "<script>alert('Kho không đủ hàng')</script>";
			echo "<script>window.location='gio_hang.php'</script>";
		}
		
	if(isset ($_SESSION['ten_dang_nhap']) && $co==0)
	{
		
		$c_tai_khoan->Dat_san_pham_khi_da_co_tk_1();
		

	}
	else {
		if($c_tai_khoan->checkcart()==1){
			echo "<script>alert('Kho không đủ hàng')</script>";
			echo "<script>window.location='gio_hang.php'</script>";

		}

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