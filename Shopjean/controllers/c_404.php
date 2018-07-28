<?php
	class C_404
	{
		function Hien_thi_404()
		{
			//views
			include("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$view = "views/404/404.tpl";
			$title = "Không tìm thấy trang";
			$smarty->assign("title",$title);
			$smarty->assign("view",$view);
			$smarty->Hien_thi_giao_dien("layout.tpl");	
		}	
	}

?>