<?php
@session_start();
include("models/m_loai_nguoi_dung.php");
class C_loai_nguoi_dung
{
	function Hien_thi_loai_nguoi_dung()
	{
			// Models
			$m_loai_nguoi_dung=new M_loai_user();
			$loainguoidungs=$m_loai_nguoi_dung->Doc_loai_user();
			
			// View
			
			$title="Quản lý Shop Jean";
			$tieude="Danh sách loại người dùng";
			$view="views/loainguoidung/v_loai_nguoi_dung.php";
			include("include/layout.php");	
	
	}
	function Them_loai_nguoi_dung()
	{
			// Models
			
			$m_loai_nguoi_dung=new M_loai_user();
			
			if(isset($_POST["btnCapnhat"]))
			{
				$ma_loai_nguoi_dung =NULL;
				$ten_loai_nguoi_dung=$_POST["ten_loai_nguoi_dung"];
				$status=1;
				$kq=$m_loai_nguoi_dung->Them_loai_nguoi_dung_moi($ma_loai_nguoi_dung,$ten_loai_nguoi_dung,$status);
				if($kq)
				{
					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='loainguoidung.php'</script>";	
				}
			}
	
			
			// View
			$title="Quản lý Shop Jean";
			$tieude="Thêm loại người dùng";
			

			$view="views/loainguoidung/v_them_loai_nguoi_dung.php";
			include("include/layout.php");	
	
	}
	function Sua_loai_nguoi_dung()
	{		
		 	$m_loai_nguoi_dung=new M_loai_user();
			
			// Models
			if(isset($_GET["ma_lnd"]))
			{
				$ma_loai_nguoi_dung=$_GET["ma_lnd"];
				
			}
			$loainguoidungss=$m_loai_nguoi_dung->Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($ma_loai_nguoi_dung);
			if(isset($_POST["btnCapnhat"])){
			
				
				$ten_loai_nguoi_dung =$_POST["ten_loai_nguoi_dung"];
			
				$kq=$m_loai_nguoi_dung->Sua_loai_nguoi_dung($ten_loai_nguoi_dung,$ma_loai_nguoi_dung);
				if($kq)
				{
					echo "<script>alert('Sửa thành công')</script>";
					echo "<script>window.location='loainguoidung.php'</script>";	
				}
			}
			
			// View
			
			$title="Quản lý Shop Jean";
			$tieude="Sửa loại người dùng";
			$view="views/loainguoidung/v_sua_loai_nguoi_dung.php";
			include("include/layout.php");
	
	}
	public function Xoa_loai_nguoi_dung()
	{
		$ma_loai_nguoi_dung=$_GET["ma_lnd"];
		
		$m_loai_nguoi_dung=new M_loai_user();
			
		$kq=$m_loai_nguoi_dung->Xoa_loai_nguoi_dung_theo_ma_lnd($ma_loai_nguoi_dung);
		
		if($kq)
		{
			echo "<script>alert('Xóa thành công')</script>";
			echo "<script>window.location='loainguoidung.php'</script>";	
		}
		else
		{
			echo "<script>alert('Xóa bị lỗi.')</script>";	
		}
			
	}	
	
	
		
}
?>