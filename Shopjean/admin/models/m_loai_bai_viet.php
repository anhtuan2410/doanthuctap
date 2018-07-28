<?php
require_once ('database.php');
class M_loai_bai_viet extends database
{
    // Quản trị

	public function Doc_loai_bai_viet($tim="",$vt=-1,$limit=-1)
    { 
		$dk="";
		if($tim!="")
		{
			$dk = "and ( ten_loai_bai_viet like '% $tim%' or ten_loai_bai_viet like '%$tim %')";
		}
		$dk2="where status =1";
		$sql = "Select * from loai_bai_viet ".$dk2.$dk ." order by ma_loai_bai_viet";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Doc_loai_bai_viet_theo_ma_bai_viet($ma_loai_bai_viet)
    {
        $sql = "Select * from loai_bai_viet where ma_loai_bai_viet =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai_bai_viet));
    }
	public function Them_loai_bai_viet($ma_loai_bai_viet, $ten_loai_bai_viet, $mo_ta,$status)
	   {
		  $sql="insert into loai_bai_viet values(?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array($ma_loai_bai_viet, $ten_loai_bai_viet, $mo_ta,$status));
	   }
	 public function Sua_loai_bai_viet_theo_ma_bai_viet( $ten_loai_bai_viet, $mo_ta,$ma_loai_bai_viet)
	   {
		  $sql="update loai_bai_viet set  ten_loai_bai_viet=?, mo_ta=? Where ma_loai_bai_viet=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_loai_bai_viet, $mo_ta,$ma_loai_bai_viet));
	   }
	 public function Xoa_loai_bai_viet_theo_ma_loai($ma_loai_bai_viet)
	   {
		   $sql="UPDATE `loai_bai_viet` SET status=0 WHERE ma_loai_bai_viet=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_loai_bai_viet));
	   }
}

?>
