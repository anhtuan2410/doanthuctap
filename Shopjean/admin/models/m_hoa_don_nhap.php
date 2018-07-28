<?php
require_once("database.php");
class M_hoa_don_nhap extends database
{
	function Doc_hoa_don_nhap()
	{
		$sql="select * from hoa_don_nhap ";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($ma_loai_nguoi_dung)
	{
		$sql="select * from hoa_don_nhap where ma_loai_nguoi_dung=? ";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_nguoi_dung));	
	}
	public function Doc_hoa_don_nhap_theo_ma_hoa_don($ma_hoa_don)
    {
		$sql='SELECT hd.*,ho_ten,so_dien_thoai from hoa_don_nhap hd,nguoi_dung nd where hd.nguoi_tao=nd.ma_nguoi_dung and so_hoa_don_nhap=?';

        $this->setQuery($sql);
        return $this->loadRow(array($ma_hoa_don));
    }
	function Them_hoa_don_nhap($so_hoa_don_nhap,$nguoi_tao,$ngay_tao)
	{
		$sql="insert into hoa_don_nhap value(?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",$nguoi_tao,$ngay_tao));
	}
	function Them_ct_hoa_don_nhap($id,$so_hoa_don_nhap,$ma_sp,$gia_nhap,$so_luong_nhap)
	{
		$sql="insert into ct_hoa_don_nhap value(?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",$so_hoa_don_nhap,$ma_sp,$gia_nhap,$so_luong_nhap));
	}

	public function Doc_chi_tiet_hoa_don_nhap_theo_ma_hoa_don($so_hoa_don)
    {
		$sql='SELECT ct.*,ten_san_pham from ct_hoa_don_nhap ct,san_pham m where ct.ma_sp=m.ma_san_pham and so_hoa_don_nhap=?';
        $this->setQuery($sql);
        return $this->loadAllRows(array($so_hoa_don));
    }
    function Doc_kho()
	{
		$sql='SELECT ct.*,ten_san_pham,ma_san_pham from kho ct,san_pham m where ct.id_sp=m.ma_san_pham ';
        $this->setQuery($sql);
        return $this->loadAllRows();	
	}
	 function Update_kho($sl,$idsp)
	{
		$sql='UPDATE `kho` SET `so_luong_con_lai`=so_luong_con_lai+ ? WHERE id_sp =?';
        $this->setQuery($sql);
        return $this->execute(array($sl,$idsp));	
	}
	 function Them_kho($idsp)
	{
		$sql='INSERT INTO `kho`(`id`, `id_sp`, `so_luong_con_lai`) VALUES (NUlL,?,0)';
        $this->setQuery($sql);
        return $this->execute(array($idsp));	
	}

	
		
}
?>