<?php
@session_start();
include("models/m_khach_hang.php");
class C_khach_hang
{
	function Hien_thi_khach_hang()
	{
			// Models
			$m_khach_hang=new M_khach_hang();
			
			$khachhangs=$m_khach_hang->Doc_khach_hang();
			// phan trang
			include("Pager.php");
			$p=new pager();
			$limit=8;
			$count=count($khachhangs);
			$vt=$p->findStart($limit);
			$pages=$p->findPages($count,$limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			
			$khachhangs=$m_khach_hang->Doc_khach_hang("",$vt,$limit);
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$khachhangs=$m_khach_hang->Doc_khach_hang($gt,$vt,$limit);
			}	
			
			// View
			
			
			$title="Quản lý Shop Jean";
			$tieude="Danh sách khach hàng";
			$view="views/khachhang/v_khach_hang.php";
			include("include/layout.php");	
	
	}
	function Them_khach_hang()
	{
			// Models
			
			$m_khach_hang=new M_khach_hang();
			if(isset($_POST["btnCapnhat"]))
			{
				$ma_khach_hang =NULL;
				$ten_khach_hang =$_POST["ten_khach_hang"];
				$phai =$_POST["phai"];
				$ngay_sinh =$_POST["ngay_sinh"];
				$dia_chi =$_POST["dia_chi"];
				$sdt =$_POST["sdt"];
				$email =$_POST["email"];
				$ghi_chu=$_POST["ghi_chu"];
				
				
				
				$kq=$m_khach_hang->Them_khach_hang_moi($ma_khach_hang, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $sdt, $email,$ghi_chu);
				if($kq)
				{
					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='khachhang.php'</script>";	
				}
			}
			
			
			
			// View
			$title="Quản lý Shop Jean";
			$tieude="Thêm khách hàng";
			

			$view="views/khachhang/v_them_khach_hang.php";
			include("include/layout.php");	
	
	}
	function Sua_khach_hang()
	{		
		    $m_khach_hang=new M_khach_hang();
			// Models
			if(isset($_GET["ma_kh"]))
			{
				$ma_khach_hang=$_GET["ma_kh"];
				
			}
			$khachhangss=$m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang);
			if(isset($_POST["btnCapnhat"])){
				
				
				$ten_khach_hang =$_POST["ten_khach_hang"];
				$phai =$_POST["phai"];
				$ngay_sinh =$_POST["ngay_sinh"];
				$dia_chi =$_POST["dia_chi"];
				$sdt =$_POST["sdt"];
				$email =$_POST["email"];
				$ghi_chu=$_POST["ghi_chu"];
			
				$kq=$m_khach_hang->Sua_khach_hang_theo_ma_kh($ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $sdt, $email,$ghi_chu,$ma_khach_hang);
				if($kq)
				{
					echo "<script>alert('Sửa thành công')</script>";
					echo "<script>window.location='khachhang.php'</script>";	
				}
			}
			
			// View
			
			$title="Quản lý Shop Jean";
			$tieude="Sửa khách hàng";
			$view="views/khachhang/v_sua_khach_hang.php";
			include("include/layout.php");
	
	}
	public function Xoa_khach_hang()
	{
		$ma_khach_hang=$_GET["ma_kh"];
		// Models
	
		$m_khach_hang=new M_khach_hang();
		$kq=$m_khach_hang->Xoa_khach_hang_theo_ma_kh($ma_khach_hang);
		if($kq)
		{
			echo "<script>alert('Xóa thành công')</script>";
			echo "<script>window.location='khachhang.php'</script>";	
		}
		else
		{
			echo "<script>alert('Xóa bị lỗi.')</script>";	
		}
			
	}	
	
	
		
}
?>