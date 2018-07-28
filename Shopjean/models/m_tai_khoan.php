<?php 
	require_once ("database.php");
	class M_tai_khoan extends database
	{
		function Kiem_tra_ten_dang_nhap($ten_dang_nhap)
		{
			$sql = "select *from nguoi_dung where ten_dang_nhap=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ten_dang_nhap));
				
		}
		function Kiem_tra_user($ten,$mk)
		{
			$sql="select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?";
			$this->setQuery($sql);
			$result = $this->loadRow(array($ten,md5($mk)));
			if($result)
                return $this->getLastId(); 
            else
            
                return false;	
		}
		//ma_nguoi_dung, ma_loai_nguoi_dung, ho_ten, gioi_tinh, ten_dang_nhap, mat_khau, email, so_dien_thoai, dia_chi, ngay_dang_ky, ngay_dang_nhap_cuoi, active
		function Them_tai_khoan($ho_ten,$gioi_tinh,$ten_dang_nhap, $mat_khau, $email, $so_dien_thoai, $dia_chi)
		{
			$sql = "insert into nguoi_dung values(?,?,?,?,?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$param = array(NULL,2,$ho_ten,$gioi_tinh,$ten_dang_nhap,md5($mat_khau),$email,$so_dien_thoai,$dia_chi,date('Y-m-d'),NULL,0);
			$result = $this->execute($param);
			 if($result)
                return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
            else
            
                return false;
		}
		function Them_khach_hang($ten_khach_hang, $dia_chi, $dien_thoai, $email)
		{
			$sql = "insert into khach_hang values(?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$param = array(NULL,$ten_khach_hang,0,date('Y-m-d'),$dia_chi,$dien_thoai,$email);
			$result = $this->execute($param);
			 if($result)
                return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
            else
            
                return false;
		}
		function Doc_user_theo_tenDn_pass($ten,$mk)
		{
			$sql="select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ten,md5($mk)));
		}
		function Cap_nhat_tai_khoan($ten_dang_nhap)
		{
			$sql = "update nguoi_dung set active=? where ten_dang_nhap=?";
			$this->setQuery($sql);
			$param = array(1,$ten_dang_nhap);
			$result = $this->execute($param);
			if($result) 
                return $this->getLastId();
            else
                return false;
		}
		function themHoaDon($ngay_dat,$ma_khach_hang,$tri_gia) 
		{
            $query = "INSERT INTO hoa_don VALUES(?,?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array(NULL, $ngay_dat,$ma_khach_hang,$tri_gia,1));
            if($result) 
                return $this->getLastId();
            else
                return false;
        }
        function themHoaDon2($ngay_dat,$ma_khach_hang,$tri_gia) 
		{
            $query = "INSERT INTO hoa_don VALUES(?,?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array(NULL, $ngay_dat,$ma_khach_hang,$tri_gia,0));
            if($result) 
                return $this->getLastId();
            else
                return false;
        }
		function themChiTietHoaDon($so_hoa_don, $ma_san_pham, $so_luong, $don_gia) {
            $query = "INSERT INTO ct_hoa_don VALUES(?,?,?,?,?)";
            $this->setQuery($query);
            $this->execute(array($so_hoa_don, $ma_san_pham, $so_luong, $don_gia, NULL));
        }
		function capNhatDonGia_san_pham($so_hoa_don) {
            $query = "UPDATE ct_hoa_don ";
            $query.= "SET don_gia = (SELECT don_gia FROM san_pham WHERE ct_hoa_don.ma_san_pham = san_pham.ma_san_pham) ";
            $query.= "WHERE so_hoa_don = ?";
            $this->setQuery($query);
            $this->execute(array($so_hoa_don));
        }
        function capNhatTongTien($so_hoa_don)
        {
            $query = "UPDATE hoa_don ";
            $query.= "SET tri_gia = (SELECT SUM( so_luong * don_gia ) AS tt FROM ct_hoa_don WHERE ct_hoa_don.so_hoa_don = hoa_don.so_hoa_don) ";
            $query.= "WHERE so_hoa_don = ?";
            $this->setQuery($query);
            $this->execute(array($so_hoa_don));
        }
		
		//ma_nguoi_dung, ma_loai_nguoi_dung, ho_ten, gioi_tinh, ten_dang_nhap, mat_khau, email, so_dien_thoai, dia_chi, ngay_dang_ky, ngay_dang_nhap_cuoi, active
		function capNhatThongTin($ho_ten,$gioi_tinh,$mat_khau,$email,$so_dien_thoai,$dia_chi,$ten_dang_nhap)
		{
			$sql = "update nguoi_dung set ho_ten=?,gioi_tinh=?, mat_khau=?, email=?, so_dien_thoai=?, dia_chi=? where ten_dang_nhap=?";
			$this->setQuery($sql);
			$param = array($ho_ten,$gioi_tinh,md5($mat_khau),$email,$so_dien_thoai,$dia_chi,$ten_dang_nhap);
			return $this->execute($param);	
		}
		function capTaiKhoan($mat_khau,$active,$ten_dang_nhap)
		{
			$sql = "update nguoi_dung set mat_khau=?, active=? where ten_dang_nhap=?";
			$this->setQuery($sql);
			$param = array(md5($mat_khau),1,$ten_dang_nhap);
			$result = $this->execute($param);	
			if($result) 
                return $this->getLastId();
            else
                return false;
		}
	}
	//$m_tai_khoan = new M_tai_khoan();
	//echo '<pre>',print_r($m_tai_khoan->Kiem_tra_ten_dang_nhap("tanphathihi")),'</pre>';
?>