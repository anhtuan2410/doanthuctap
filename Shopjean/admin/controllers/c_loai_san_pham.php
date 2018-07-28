<?php
@session_start();
include("models/m_loai_san_pham.php");
class C_loai_san_pham
{
	function Hien_thi_loai_san_pham()
	{
			// Models
			$m_loai_san_pham=new M_loai_san_pham();
			$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham();
			
						
			$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham();
			
			// View
			
			
			$title="Quản lý Shop Jean";
			$tieude="Danh sách loại sản phẩm";
			$view="views/loaisanpham/v_loai_san_pham.php";
			include("include/layout.php");	
	
	}
	function Them_loai_san_pham()
	{
			// Models
			
			$m_loai_san_pham=new M_loai_san_pham();
			if(isset($_POST["btnCapnhat"]))
			{
				$ma_loai_san_pham =NULL;
				$ten_loai =$_POST["ten_loai"];
				$mo_ta =$_POST["mo_ta"];
				$ma_loai_cha=$_POST["maloaicha"];
				$status=1;
				$kq=$m_loai_san_pham->Them_loai_san_pham($ma_loai_san_pham, $ten_loai, $mo_ta, $ma_loai_cha,$status);
				if($kq)
				{
					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='loaisanpham.php'</script>";	
				}
			}
			
			
			
			// View
			$title="Quản lý Shop Jean";
			$tieude="Thêm loại sản phẩm";
			
			
			$view="views/loaisanpham/v_them_loai_san_pham.php";
			include("include/layout.php");	
	
	}
	function Sua_loai_san_pham()
	{		
		    $m_loai_san_pham=new M_loai_san_pham();
			// Models
			if(isset($_GET["ma_loai"]))
			{
				$ma_loai_san_pham=$_GET["ma_loai"];
				
			}
			$loai_san_phamss=$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai_san_pham);
			if(isset($_POST["btnCapnhat"])){
				
				$ten_loai =$_POST["ten_loai"];
				$mo_ta =$_POST["mo_ta"];
				$ma_loai_cha=$_POST["maloaicha"];
				
				$kq=$m_loai_san_pham->Sua_loai_san_pham_theo_ma_san_pham($ten_loai, $mo_ta, $ma_loai_cha,$ma_loai_san_pham);
				if($kq)
				{
					echo "<script>alert('Sửa thành công')</script>";
					echo "<script>window.location='loaisanpham.php'</script>";	
				}
			}
			
			// View
			
			$title="Quản lý Nhà Hàng";
			$tieude="Sửa loại sản phẩm";
			$view="views/loaisanpham/v_sua_loai_san_pham.php";
			include("include/layout.php");
	
	}
	public function Xoa_loai_san_pham()
	{
		$m_loai_san_pham= new M_loai_san_pham();
		if(isset($_GET["ma_loai"]))
			{
				$ma_loai_san_pham=$_GET["ma_loai"];
				
			}
		
		$kq=$m_loai_san_pham->Xoa_loai_san_pham_theo_ma_sp($ma_loai_san_pham);
		if($kq)
		{
			echo "<script>alert('Xóa thành công')</script>";
			echo "<script>window.location='loaisanpham.php'</script>";	
		}
			
		else
		{
			echo "<script>alert('Xóa bị lỗi.')</script>";	
		}
			
	}	
	
	
		
}
?>