<?php 
	class C_bai_viet
	{
		function Hien_thi_ds_bai_viet()
		{
			//Models
			
			include("models/m_bai_viet.php");
			$m_bai_viet = new M_bai_viet();
			$bai_viets = $m_bai_viet->Doc_bai_viet();
			//Phân trang
			include("Pager.php");
			$p = new pager();
			$limit = 20;
			$count = count($bai_viets);
			$vt = $p->findStart($limit);
			$pages = $p->findPages($count,$limit);
			$curpage=$_GET["page"];
			$list=$p->pageList($curpage,$pages);
			$bai_viets = $m_bai_viet->Doc_bai_viet($vt,$limit);
			//Views
			include("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$view = "views/blog/layout.tpl";
			$title = "Tin tức";
			$smarty->assign("title",$title);
			$smarty->assign("view",$view);
			$smarty->assign("list",$list);
			$smarty->assign("bai_viets",$bai_viets);
			$smarty->Hien_thi_giao_dien("layout.tpl");
		}
		function Hien_thi_chi_tiet_bai_viet()
		{
			$ma_bai_viet = $_GET['ma_bai_viet'];
			//Models
			include("models/m_bai_viet.php");
			$m_bai_viet = new M_bai_viet();
			$bai_viet = $m_bai_viet->Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet);
			$bai_viets = $m_bai_viet->Doc_bai_viet(0,5);
			
			//views
			include("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$view = "views/blog/blog_post.tpl";
			$title = $bai_viet->tieu_de;
			$smarty->assign("title",$title);
			$smarty->assign("view",$view);
			$smarty->assign("bai_viet",$bai_viet);
			$smarty->assign("bai_viets",$bai_viets);
			$smarty->Hien_thi_giao_dien("layout.tpl");
		}		
	}
?>