<?php 
@session_start();
class C_tim_kiem
	{
		function Hien_thi_tim_kiem()
		{
			//models 
			if(isset($_POST['Tim'])){
				$gt = $_POST['Tim'];
				include("models/m_san_pham.php");
				$m_san_pham = new M_san_pham();
				$chi_tiets = $m_san_pham->Tim_san_pham($gt);
				 //views
				include("Smarty_shop_jean.php");
				$smarty = new Smarty_shop_jean();			
				$title = "Tìm kiếm";
				$smarty->assign("title",$title);
				$view = "views/tim_kiem/tim_kiem.tpl";
				$smarty->assign("view",$view);
				$smarty->assign("chi_tiets",$chi_tiets);
				$smarty->Hien_thi_giao_dien("layout.tpl");
					
			}
			//view
		}
	}

?>