<?php 
	require_once("database.php");
	class M_hoa_don extends database
	{
		function getChiTietHoaDon($so_hoa_don) {
			$sql ="select sp.ten_san_pham,sp.don_gia,sp.hinh,ct.so_luong
				from san_pham sp,ct_hoa_don ct,hoa_don hd
				where sp.ma_san_pham = ct.ma_san_pham and ct.so_hoa_don = hd.so_hoa_don and hd.so_hoa_don=?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($so_hoa_don));
        }
        public function lay_hoa_don($key)
        {
            $query = "select hd.ngay_hd, hd.tri_gia, hd.so_hoa_don, hd.tinh_trang
					  from nguoi_dung nd, hoa_don hd,ct_hoa_don ct 
					  where nd.ma_nguoi_dung = hd.ma_khach_hang and hd.so_hoa_don = ct.so_hoa_don and nd.ma_nguoi_dung=?";
            $this->setQuery($query);
            return $this->loadAllRows(array($key));
        }
         function Update_kho2($sl,$idsp)
	{
		$sql='UPDATE `kho` SET `so_luong_con_lai`=so_luong_con_lai- ? WHERE id_sp =?';
        $this->setQuery($sql);
        return $this->execute(array($sl,$idsp));	
	}
	function checkkho($idsp,$sl)
	{
		$sql='SELECT * FROM `kho` WHERE id_sp=? and so_luong_con_lai >=?';
        $this->setQuery($sql);
        return $this->loadRow(array($idsp,$sl));	
	}
}
	//$m_hoa_don = new M_hoa_don();
	//echo '<pre>',print_r($m_hoa_don->lay_hoa_don(44)),'</pre>';
?>