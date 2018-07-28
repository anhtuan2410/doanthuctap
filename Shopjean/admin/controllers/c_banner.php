<?php 
	class C_banner 
	{
		function Hien_thi_giao_dien()
		{
			//models
			include("models/m_banner.php");
			$m_banner = new M_banner();
			$banner = $m_banner->Doc_banner();
			
			//views 			
			$title = "Banner";
			$view = "views/banner/banner.php";
			include("include/layout.php");		
		}	
	}
?>