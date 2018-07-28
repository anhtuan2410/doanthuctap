<?php
@session_start();
include("models/m_hoa_don_nhap.php");
include("models/m_san_pham.php");
class C_hoa_don_nhap
{
	function Hien_thi_hoa_don_nhap()
	{
			// Models
			$m_hoa_don_nhap=new M_hoa_don_nhap();
			$hoadonnhaps=$m_hoa_don_nhap->Doc_hoa_don_nhap();
			
			// View
			
			$title="Quản lý Shop Jean";
			$tieude="Danh sách hóa đơn nhập";
			$view="views/hoadonnhap/v_hoadonnhap.php";
			include("include/layout.php");	
	
	}
	function Them_hoa_don_nhap()
	{
			// Models
			
			$m_hoa_don_nhap=new M_hoa_don_nhap();
			
			
				$ma_loai_nguoi_dung =NULL;
				$ngay_xuat_ban = date('Y-m-d');
				$ma_nguoi_dung =$_SESSION['iduser'];
				$kq=$m_hoa_don_nhap->Them_hoa_don_nhap($ma_loai_nguoi_dung,$ma_nguoi_dung,$ngay_xuat_ban);
				if($kq)
				{
					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='hoadonnhap.php'</script>";	
				}
		
	
			
			// View
			$title="Quản lý Shop Jean";
		
		
			$view="views/hoadonnhap/v_hoadonnhap.php";
			include("include/layout.php");	
	
	}
	public function Hien_thi_chi_tiet_hoa_don_nhap()
	{
		// Models
		$so_hoa_don=$_GET["so_hoa_don"];

		$m_hoa_don= new M_hoa_don_nhap();
		$hoa_don=$m_hoa_don->Doc_hoa_don_nhap_theo_ma_hoa_don($so_hoa_don);
		
		$chi_tiets=$m_hoa_don->Doc_chi_tiet_hoa_don_nhap_theo_ma_hoa_don($so_hoa_don);
		// View
		$title="Quản lý Nhà Hàng";
		$tieude="Hóa đơn nhập hàng";
		$view="views/hoadonnhap/v_chitiethoadonnhap.php";
		include("include/layout.php");
			
	}
	public function Them_chi_tiet_hoa_don_nhap()
	{
			$m_hoa_don= new M_hoa_don_nhap();
			$m_sp= new M_san_pham();
				$so_hoa_don=$_GET["so_hoa_don"];
				$sanphams=$m_sp->Doc_allsan_pham();
				if(isset($_POST["btnCapnhat"]))
			{
				$ma_loai_nguoi_dung =NULL;
				$sp=$_POST['sanpham'];
				$gia=$_POST['gianhap'];
				$sl=$_POST['slnhap'];
				
				
				$kq=$m_hoa_don->Them_ct_hoa_don_nhap($ma_loai_nguoi_dung,$so_hoa_don,$sp,$gia,$sl);
				if($kq)
				{	
					$m_hoa_don->Update_kho($sl,$sp);
					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='hoadonnhap.php'</script>";	
				}
			}	
	
		// View
		$title="Quản lý Nhà Hàng";
		$tieude="Thêm chi tiết phiếu nhập";
		$view="views/hoadonnhap/v_themchitietphieunhap.php";
		include("include/layout.php");
			
	}
	function Hien_thi_kho()
	{
			// Models
			$m_hoa_don_nhap=new M_hoa_don_nhap();
			$khos=$m_hoa_don_nhap->Doc_kho();
			
			// View
			
			$title="Quản lý Shop Jean";
			$tieude="Danh sách hóa đơn nhập";
			$view="views/hoadonnhap/v_kho.php";
			include("include/layout.php");	
	
	}
	
	
	
		
}
?>