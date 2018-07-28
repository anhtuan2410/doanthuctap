<?php
	if(isset($_POST['ten_dang_nhap'])){
		$ten_dang_nhap = $_POST['ten_dang_nhap'];
		if(!empty($ten_dang_nhap))
		{
			include("models/m_tai_khoan.php");
			$m_tai_khoan = new M_tai_khoan();
			$user = $m_tai_khoan->Kiem_tra_ten_dang_nhap($ten_dang_nhap);
			if($user)
				echo "<p style='color:#F00'>Tên đăng nhập đã tồn tại</p>";
			else 
				echo "<p style='color:#00F'>Tên đăng nhập hợp lệ</p>";
				
		}
	}
?>