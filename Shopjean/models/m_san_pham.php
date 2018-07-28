<?php 
	include("database.php");
	
	class M_san_pham extends database
	{
		function Doc_san_pham()
		{
			$sql = "select * from san_pham where status=1 ";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Tim_san_pham($gt)
		{
			$sql = "SELECT * FROM san_pham where status=1 and ten_san_pham like '%$gt%'";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Doc_san_pham_theo_ma($ma_san_pham)
		{
			$sql = "select * from san_pham where ma_san_pham=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_san_pham));
		}
		function Doc_san_pham_theo_ma_loai($ma_loai,$ma_san_pham)
		{
			$sql = "select * from san_pham where status=1 and ma_loai=? and ma_san_pham!=?";
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_loai,$ma_san_pham));
		}
		function Doc_san_pham_moi()
		{
			$sql = "select * from san_pham where status=1 and san_pham_moi=1";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		function Doc_san_pham_best_sell($vt=-1,$limit=-1)
		{
			if($vt>=0 && $limit>0)	
				$sql = "select * from san_pham where status=1 limit $vt,$limit";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Doc_san_pham_theo_nam($vt=-1,$limit=-1)
		{	
			if($vt>=0 && $limit>0)		
				$sql = "select * from san_pham where status=1 and ma_loai_cha=9 limit $vt,$limit";
			else 
				$sql = "SELECT * FROM san_pham where ma_loai_cha=9";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Doc_san_pham_theo_nu($vt=-1,$limit=-1)
		{	
			if($vt>=0 && $limit>0)		
				$sql = "select * from san_pham where status=1 and ma_loai_cha=15 limit $vt,$limit";
			else 
				$sql = "SELECT * FROM san_pham where ma_loai_cha=15";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Doc_san_pham_moi_nhat()
		{	
			$sql = "select * from san_pham where status=1  ORDER BY ma_san_pham DESC";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function lay_san_pham_cho_gio_hang($chuoi)
        {
            $query="Select * from san_pham where ma_san_pham in($chuoi)";
			$this->setQuery($query);
			return $this->loadAllRows();
        }
		function lay_san_pham_theo_gia($gtDau,$gtCuoi)
		{
			$sql = "SELECT * FROM san_pham WHERE don_gia BETWEEN $gtDau AND $gtCuoi order by don_gia";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
	}

	//$m_san_pham = new M_san_pham();
	//$san_pham = $m_san_pham->Tim_san_pham("jean");
	//echo '<pre>',print_r($san_pham),'</pre>';
?>
