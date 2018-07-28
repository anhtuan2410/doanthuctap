<?php
require_once("database.php");
class M_loai_san_pham extends database
{
	function Doc_loai_san_pham()
	{
		$sql="select * from loai_san_pham where status=1";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_loai_san_pham_theo_ma_loai($ma_loai)
	{
		$sql="select * from loai_san_pham where ma_loai=? ";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai));	
	}
	function Them_loai_san_pham($ma_loai, $ten_loai, $mo_ta, $ma_loai_cha,$status)
	{
		$sql="insert into loai_san_pham value(?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL", $ten_loai, $mo_ta, $ma_loai_cha,$status));
	}
	function Sua_loai_san_pham_theo_ma_san_pham($ten_loai, $mo_ta, $ma_loai_cha,$ma_loai){
		$sql="update loai_san_pham set ten_loai=?,mo_ta=?,ma_loai_cha=? where ma_loai=? ";
		$this->setQuery($sql);
		return $this->execute(array($ten_loai, $mo_ta, $ma_loai_cha,$ma_loai));
		
	}
	public function Xoa_loai_san_pham_theo_ma_sp($ma_loai_san_pham)
	   {
		   $sql="UPDATE `loai_san_pham` SET status=0 WHERE ma_loai=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_loai_san_pham));
	   }
		
}

//`ma_loai`, `ten_loai`, `mo_ta`, `ma_loai_cha`
?>
