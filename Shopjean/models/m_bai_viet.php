<?php
	require_once("database.php");
	class M_bai_viet extends database
	{
		function Doc_bai_viet($vt=-1, $limit=-1)
		{
			if($vt>=0 && $limit>0)
				$sql = "select * from bai_viet  order by ngay_xuat_ban DESC limit $vt,$limit";
			else
				$sql = "select * from bai_viet order by ngay_xuat_ban DESC";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Doc_bai_viet_theo_ma_loai_bai_viet($ma_loai_bai_viet)
		{
			$sql = "select * from bai_viet where ma_loai_bai_viet=?";
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_loai_bai_viet));	
		}
		function Doc_loai_bai_viet()
		{
			$sql = "select * from loai_bai_viet";
			$this->setQuery($sql);
			return $this->loadAllRows();		
		}
		function Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet)
		{
			$sql = "select * from bai_viet where ma_bai_viet=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_bai_viet));	
		}
		function Doc_bai_viet_moi_nhat()
		{
			$sql = "select * from bai_viet ORDER BY ma_bai_viet DESC";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
	}
	//$tin_tuc = new M_bai_viet();
	//echo '<pre>',print_r($tin_tuc->Doc_bai_viet(0,3)),'</pre>';
?>