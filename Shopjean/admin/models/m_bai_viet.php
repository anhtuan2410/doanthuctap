<?php
require_once ('database.php');
class M_bai_viet extends database
{
    // Quản trị

	public function Doc_bai_viet($tim="",$vt=-1,$limit=-1)
    { 
		
		$dk="";

		if($tim!="")
		{
			$dk = "and ( tieu_de like '% $tim%' or tieu_de like '%$tim %')";
		}
		$dk2="where status=1";
		$sql = "Select * from bai_viet ".$dk2.$dk ." order by ngay_xuat_ban desc";
		if($vt>=0 && $limit>0)
		{
			$sql .=" Limit $vt,$limit ";	
		}
		
		
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet)
    {
        $sql = "Select * from bai_viet where ma_bai_viet =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_bai_viet));
    }
	public function Them_bai_viet($ma_bai_viet, $ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet,    $ngay_xuat_ban,  $xuat_ban,$hinh,$status)
	   {
		  $sql="insert into bai_viet values(?,?,?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array($ma_bai_viet,$ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet,  $ngay_xuat_ban,  $xuat_ban,$hinh,$status));
	   }
	 public function Sua_bai_viet($ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet,    $ngay_xuat_ban,  $xuat_ban,$hinh,$ma_bai_viet)
	   {
		  $sql="update bai_viet set ma_loai_bai_viet=?, ma_nguoi_dung=?, tieu_de=?, noi_dung_tom_tat=?, noi_dung_chi_tiet=?,    ngay_xuat_ban=?, xuat_ban=?,hinh=? Where ma_bai_viet=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet,     $ngay_xuat_ban,  $xuat_ban,$hinh,$ma_bai_viet));
	   }
	   
	 public function Xoa_bai_viet_theo_ma($ma_bai_viet)
	   {
		   $sql="UPDATE `bai_viet` SET status=0 WHERE ma_bai_viet=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_bai_viet));
	   }
}
//$ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet,       $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban,$ma_bai_viet
?>
