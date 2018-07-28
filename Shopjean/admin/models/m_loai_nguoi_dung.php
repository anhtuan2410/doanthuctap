<?php
require_once("database.php");
class M_loai_user extends database
{
	function Doc_loai_user()
	{
		$sql="select * from loai_nguoi_dung where status=1";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($ma_loai_nguoi_dung)
	{
		$sql="select * from loai_nguoi_dung where ma_loai_nguoi_dung=? ";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_nguoi_dung));	
	}
	function Them_loai_nguoi_dung_moi($ma_loai_nguoi_dung,$ten_loai_nguoi_dung,$status)
	{
		$sql="insert into loai_nguoi_dung value(?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",$ten_loai_nguoi_dung,$status));
	}
	function Sua_loai_nguoi_dung( $ten_loai_nguoi_dung,$ma_loai_nguoi_dung){
		$sql="update loai_nguoi_dung set ten_loai_nguoi_dung=? where ma_loai_nguoi_dung=? ";
		$this->setQuery($sql);
		return $this->execute(array($ten_loai_nguoi_dung,$ma_loai_nguoi_dung));
		
	}
	public function Xoa_loai_nguoi_dung_theo_ma_lnd($ma_loai_nguoi_dung){
		$sql="UPDATE `loai_nguoi_dung` SET status=0 WHERE ma_loai_nguoi_dung=? ";
		$this->setQuery($sql);
		return $this->execute(array($ma_loai_nguoi_dung));
	}
	
		
}
?>