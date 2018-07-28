<?php
  class C_home
  {
      public function Hien_thi_home()
      {
        //Models
		require_once("models/m_san_pham.php");
		$m_san_pham = new M_san_pham();
		$san_phams = $m_san_pham->Doc_san_pham();
		$nam = $m_san_pham->Doc_san_pham_theo_nam(0,6);
		$nu = $m_san_pham->Doc_san_pham_theo_nu(0,6);
		$san_pham_new = $m_san_pham->Doc_san_pham_moi_nhat();
		//$banner_nam = $m_san_pham->Doc_san_pham_theo_nam(0,1);
		//$banner_nu = $m_san_pham->Doc_san_pham_theo_nu(0,1);
		//banner 
		
	
		
		require_once("models/m_bai_viet.php");
		$m_bai_viet = new M_bai_viet();
		$bai_viets = $m_bai_viet->Doc_bai_viet(0,3);

        //Views
        require_once("Smarty_shop_jean.php");
        $smarty = new Smarty_shop_jean();
		$view = "views/home/v_layout.tpl";
		$smarty->assign("san_phams",$san_phams);
		//$smarty->assign("banner_nam",$banner_nam);
		//$smarty->assign("banner_nu",$banner_nu);
		$smarty->assign("nam",$nam);
		$smarty->assign("nu",$nu);
		$smarty->assign("bai_viets",$bai_viets);
		$smarty->assign("san_pham_new",$san_pham_new);
		$title = "Trang chủ";
		$smarty->assign("title",$title);
	
		$smarty->assign("view",$view);
        $smarty->Hien_thi_giao_dien("layout.tpl");
      }
  }
?>
