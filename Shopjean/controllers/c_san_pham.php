<?php 

	class C_san_pham
	{
		function Hien_thi_ds_san_pham()
		{
			$GT = $_GET['GT'];
			//models
			include("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$sp_nams = $m_san_pham->Doc_san_pham_theo_nam(); 
			$sp_nus = $m_san_pham->Doc_san_pham_theo_nu();
			//Phân Trang 
			include("Pager.php");
			$p = new pager();
			$limit = 9;
			$count_nam = count($sp_nams);
			$count_nu = count($sp_nus);
			$vt = $p->findStart($limit);
			$pages_nam = $p->findPages($count_nam,$limit);
			$pages_nu = $p->findPages($count_nu,$limit);
			$curpage=$_GET["page"];
			$list_nam=$p->pageList($curpage,$pages_nam);
			$list_nu=$p->pageList($curpage,$pages_nu);
			$sp_nams = $m_san_pham->Doc_san_pham_theo_nam($vt,$limit);
			$sp_nus = $m_san_pham->Doc_san_pham_theo_nu($vt,$limit);
			
			//views
			include("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$view_nam = "views/shop/layout_nam.tpl";
			$view_nu = "views/shop/layout_nu.tpl";
			if($GT == "Nam")
			{
				$title = "Shop nam";
				$smarty->assign("title",$title);
				$smarty->assign("view",$view_nam);
			}
			elseif($GT == "Nu")
			{
				$smarty->assign("view",$view_nu);
				$title = "Shop nữ";
				$smarty->assign("title",$title);
			}
			$smarty->assign("sp_nams",$sp_nams);
			$smarty->assign("sp_nus",$sp_nus);
			$smarty->assign("list_nam",$list_nam);
			$smarty->assign("list_nu",$list_nu);
			$smarty->Hien_thi_giao_dien("layout.tpl");	
		}
		function Hien_thi_chi_tiet_san_pham()
		{
			$ma_san_pham = $_GET['ma_san_pham'];
			include("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$san_pham = $m_san_pham->Doc_san_pham_theo_ma($ma_san_pham);
			$ma_loai = $san_pham->ma_loai;
			$san_phams = $m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai,$ma_san_pham);	
			//views
			include("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$view = "views/product/layout.tpl";
			$title = $san_pham->ten_san_pham;
			$smarty->assign("title",$title);
			$smarty->assign("san_pham",$san_pham);
			$smarty->assign("san_phams",$san_phams);
			$smarty->assign("view",$view);
			$smarty->Hien_thi_giao_dien("layout.tpl");
		}
	}

?>