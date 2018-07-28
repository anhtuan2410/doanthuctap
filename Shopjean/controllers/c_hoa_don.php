<?php 
	@session_start();
	include("models/m_hoa_don.php");
	class C_hoa_don
	{
		function HienThiChiTietHoaDon()
		{
			$so_hoa_don = $_GET['so_hoa_don'];
			//models
			$m_hoa_don = new M_hoa_don();
			$chi_tiets = $m_hoa_don->getChiTietHoaDon($so_hoa_don);
			//views
			include("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$title = "Chi tiết hóa đơn";
			$smarty->assign("chi_tiets",$chi_tiets);
			$smarty->assign("title",$title);
			$view = "views/hoa_don/chi_tiet_hoa_don.tpl";
			$smarty->assign("view",$view);
			$smarty->Hien_thi_giao_dien("layout.tpl");		
		}
	}
?>