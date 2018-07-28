<?php
@session_start();
include("models/m_nguoi_dung.php");
include("models/m_loai_nguoi_dung.php");
class C_nguoi_dung
{
	function Hien_thi_nguoi_dung()
	{
			// Models
			$m_nguoi_dung=new M_user();

			$nguoidungs=$m_nguoi_dung->Doc_user();
			
			// View
			
			$title="Quản lý Shop Jean";
			$tieude="Danh sách người dùng";
			$view="views/nguoidung/v_nguoi_dung.php";
			include("include/layout.php");	
	
	}
	function Them_nguoi_dung()
	{
			// Models
			
			$m_nguoi_dung=new M_user();
			$m_loai_nguoi_dung=new M_loai_user();
			$loainguoidungs=$m_loai_nguoi_dung->Doc_loai_user();
			if(isset($_POST["btnCapnhat"]))
			{
				$ma_nguoi_dung =NULL;
		 	$ho_ten =$_POST["ho_ten"];
			$ma_loai_nguoi_dung=$_POST["loainguoidung"];
				$ten_dang_nhap =$_POST["ten_dang_nhap"];
				$mat_khau =$_POST["mat_khau"];
				$email =$_POST["email"];
				$sdt =$_POST["sdtt"];
				$diachi =$_POST["diachi"];
				$gioitinh =$_POST["gioitinh"];
				$status=1;
				// Lấy ngày
				$now = getdate();
                $dates=$now["year"] ."/". $now["mon"] . "/". $now["mday"]; 
				$ngay_dang_ky =$dates;
				$ngaydnc=$dates;
				
				
				$active =$_POST["active"];
			
				$kq=$m_nguoi_dung->Them_nguoi_dung($ma_nguoi_dung, $ma_loai_nguoi_dung, $ho_ten,$gioitinh, $ten_dang_nhap, $mat_khau, $email, $sdt,$diachi,$ngay_dang_ky,$ngaydnc,  $active,$status);
				if($kq)
				{
					

					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='nguoidung.php'</script>";	
				}
			}
	
			
			// View
			$title="Quản lý Shop Jean";
			$tieude="Thêm người dùng";
			

			$view="views/nguoidung/v_them_nguoi_dung.php";
			include("include/layout.php");	
	
	}
	function Sua_nguoi_dung()
	{		
		   $m_nguoi_dung=new M_user();
			// Models
			if(isset($_GET["ma_nd"]))
			{
				$ma_nguoi_dung=$_GET["ma_nd"];
				
			}
			$nguoidungss=$m_nguoi_dung->Doc_user_theo_ma_nd($ma_nguoi_dung);
			if(isset($_POST["btnCapnhat"])){
			
				$ho_ten =$_POST["ho_ten"];
				$ma_loai_nguoi_dung=$_POST["ma_loai_nguoi_dung"];
				$ten_dang_nhap =$_POST["ten_dang_nhap"];
				$mat_khau =$_POST["mat_khau"];
				$email =$_POST["email"];
				$ngay_dang_ky=$_POST["ngay_dang_ky"];
				
				$ngay_dang_nhap_cuoi =$_POST["ngay_dang_nhap_cuoi"];
				$active =$_POST["active"];
			
				$kq=$m_nguoi_dung->Sua_nguoi_dung_theo_ma_nd( $ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email,                                                               $ngay_dang_ky,$ngay_dang_nhap_cuoi, $active,$ma_nguoi_dung);
				if($kq)
				{
					echo "<script>alert('Sửa thành công')</script>";
					echo "<script>window.location='nguoidung.php'</script>";	
				}
			}
			
			// View
			
			$title="Quản lý Shop Jean";
			$tieude="Sửa người dùng";
			$view="views/nguoidung/v_sua_nguoi_dung.php";
			include("include/layout.php");
	
	}
	public function Xoa_nguoi_dung()
	{
		$ma_nguoi_dung=$_GET["ma_nd"];
		
		$m_nguoi_dung=new M_user();
			
		$kq=$m_nguoi_dung->Xoa_nguoi_dung_theo_ma_nd($ma_nguoi_dung);
		if($kq)
		{
			echo "<script>alert('Xóa thành công')</script>";
			echo "<script>window.location='nguoidung.php'</script>";	
		}
		else
		{
			echo "<script>alert('Xóa bị lỗi.')</script>";	
		}
			
	}	
	
	
		
}
?>