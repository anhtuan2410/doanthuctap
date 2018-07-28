<?php
require_once('database.php');
class M_hoa_don extends database
{
    // Quản trị

	public function Thong_ke_hoa_don()
    {
        
		$sql='SELECT concat(Month(ngay_hd),"-",Year(ngay_hd)) as ThangNam,sum(tri_gia) as tong  FROM `hoa_don` 
  				where tinh_trang in(1,2) group by Month(ngay_hd),Year(ngay_hd) order by Month(ngay_hd),Year(ngay_hd)';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	public function Doc_hoa_don($gt="")
    {
        
		$sql='SELECT   hd.*,ho_ten from hoa_don hd,nguoi_dung nd where   hd.ma_khach_hang =nd.ma_nguoi_dung ';
		if($gt!="")
		{
			$sql.=" and tinh_trang=?";	
		}
        $this->setQuery($sql);
        return ($gt!="")?$this->loadAllRows(array($gt)):$this->loadAllRows();
    }
	public function Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don)
    {
		$sql='SELECT hd.*,ho_ten,email,dia_chi,so_dien_thoai from hoa_don hd,nguoi_dung nd where hd.ma_khach_hang=nd.ma_nguoi_dung and so_hoa_don=?';

        $this->setQuery($sql);
        return $this->loadRow(array($ma_hoa_don));
    }
	public function Doc_chi_tiet_hoa_don_theo_ma_hoa_don($so_hoa_don)
    {
		$sql='SELECT ct.*,ten_san_pham,hinh from ct_hoa_don ct,san_pham m where ct.ma_san_pham=m.ma_san_pham and so_hoa_don=?';
        $this->setQuery($sql);
        return $this->loadAllRows(array($so_hoa_don));
    }
	// Cập nhật lại tình trạng đơn hàng
	public function Cap_nhat_tinh_trang($ma_hoa_don,$tinh_trang)
	{
		$sql="update hoa_don set tinh_trang=? where so_hoa_don=?";
		$this->setQuery($sql);
		return $this->execute(array($tinh_trang,$ma_hoa_don));
	}
}

/*$m_hoa_don = new M_hoa_don();
echo '<pre>',print_r($m_hoa_don->Doc_chi_tiet_hoa_don_theo_ma_hoa_don(1)),'</pre>';*/
?>