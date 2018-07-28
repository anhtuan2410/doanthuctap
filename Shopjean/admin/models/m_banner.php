<?php 
	require_once("database.php");
	class M_banner extends database
	{
		function Doc_banner()
		{
			$sql = "select * from banner";
			$this->setQuery($sql);
			return $this->loadAllRows(array());
		}
		
		//id, ten_banner, link_anh, ngay_dang, ngay_het_han, ghi_chu, active
		function Cap_nhat_banner($link_anh,$id)
		{
			$sql = "update banner set link_banner=? where id=?";
			$this->setQuery($sql);
			$param = array($link_anh,$id);
			$result = $this->execute($param);
			if($result)
                return $this->getLastId(); 
            else
            
                return false;
		}
	}
	//$banner = new M_banner();
	//echo '<pre>',print_r($banner->Cap_nhat_banner("https://devitems.com/html/shopick-preview/shopick/img/slider/slider-1/1.jpg",1)),'</pre>';
?>