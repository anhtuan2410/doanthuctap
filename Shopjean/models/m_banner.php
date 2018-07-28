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
		function Cap_nhat_banner($link_anh)
		{
			$sql = "update banner set link_anh=? where id=?";
			$this->setQuery($sql);
			$param = array($link_anh);
			return $this->execute($param);
		}
	}
	//$banner = new M_banner();
	//echo '<pre>',print_r($banner->Doc_banner(1)),'</pre>';
?>