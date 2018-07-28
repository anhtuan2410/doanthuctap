<?php
require_once ('database.php');
class M_khach_hang extends database
{
    // Quản trị

	public function Doc_khach_hang($tim="",$vt=-1,$limit=-1)
    { 
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_khach_hang like '% $tim%' or ten_khach_hang like '%$tim %'";
		}
		$sql = "Select * from khach_hang ". $dk ." order by ma_khach_hang ";
		if($vt>=0 && $limit>0)
		{
			$sql .=" Limit $vt,$limit ";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang)
    {
        $sql = "Select * from khach_hang where ma_khach_hang =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_khach_hang));
    }
	public function Them_khach_hang_moi($ma_khach_hang, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email,$ghi_chu)
	   {
		  $sql="insert into khach_hang values(?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array("NULL",$ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email,$ghi_chu));
	   }
	 public function Sua_khach_hang_theo_ma_kh($ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email,$ghi_chu,$ma_khach_hang)
	   {
		  $sql="update khach_hang set ten_khach_hang=?, phai=?, ngay_sinh=?, dia_chi=?, dien_thoai=?, email=?,ghi_chu=? Where ma_khach_hang=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email,$ghi_chu,$ma_khach_hang));
	   }
	 public function Xoa_khach_hang_theo_ma_kh($ma_khach_hang)
	   {
		   $sql="UPDATE `khach_hang` SET status=0 WHERE ma_khach_hang=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_khach_hang));
	   }
}
//`ma_khach_hang`, `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `ghi_chu`
?>
