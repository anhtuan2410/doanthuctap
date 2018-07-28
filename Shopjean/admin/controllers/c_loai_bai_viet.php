<?php
@session_start();
include("models/m_loai_bai_viet.php");
class C_loai_bai_viet
{
	function Hien_thi_loai_bai_viet()
	{
			// Models
			$m_loai_bai_viet=new M_loai_bai_viet();
			$loai_bai_viets=$m_loai_bai_viet->Doc_loai_bai_viet();
			
			// phan trang
			include("Pager.php");
			$p=new pager();
			$limit=8;
			$count=count($loai_bai_viets);
			$vt=$p->findStart($limit);
			$pages=$p->findPages($count,$limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			
			$loai_bai_viets=$m_loai_bai_viet->Doc_loai_bai_viet("",$vt,$limit);
			if(isset($_POST["btnTim"])&& isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$loai_bai_viets=$m_loai_bai_viet->Doc_loai_bai_viet($gt,$vt,$limit);
			}	
			
			// View
			
			
			$title="Quản lý Shop Jean";
			$tieude="Danh sách loại bài viết";
			$view="views/loaibaiviet/v_loai_bai_viet.php";
			include("include/layout.php");	
	
	}
	function Them_loai_bai_viet()
	{
			// Models
			
			$m_loai_bai_viet=new M_loai_bai_viet();
			if(isset($_POST["btnCapnhat"]))
			{
				$ma_loai_bai_viet =NULL;
				$ten_loai_bai_viet =$_POST["ten_loai_bai_viet"];
				$mo_ta =$_POST["mo_ta"];
				
				$status=1;
				$kq=$m_loai_bai_viet->Them_loai_bai_viet($ma_loai_bai_viet, $ten_loai_bai_viet, $mo_ta,$status);
				if($kq)
				{
					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='loaibaiviet.php'</script>";	
				}
			}
			
			
			
			// View
			$title="Quản lý Shop Jean";
			$tieude="Thêm loại bài viết";
			
			
			$view="views/loaibaiviet/v_them_loai_bai_viet.php";
			include("include/layout.php");	
	
	}
	function Sua_loai_bai_viet()
	{		
		    $m_loai_bai_viet=new M_loai_bai_viet();
			// Models
			if(isset($_GET["ma_loai"]))
			{
				$ma_loai_bai_viet=$_GET["ma_loai"];
				
			}
			$loai_bai_vietss=$m_loai_bai_viet->Doc_loai_bai_viet_theo_ma_bai_viet($ma_loai_bai_viet);
			if(isset($_POST["btnCapnhat"])){
				
				
				$ten_loai_bai_viet =$_POST["ten_loai_bai_viet"];
				$mo_ta =$_POST["mo_ta"];
				
				
				
				$kq=$m_loai_bai_viet->Sua_loai_bai_viet_theo_ma_bai_viet($ten_loai_bai_viet, $mo_ta, $ma_loai_bai_viet);
				if($kq)
				{
					echo "<script>alert('Sửa thành công')</script>";
					echo "<script>window.location='loaibaiviet.php'</script>";	
				}
			}
			
			// View
			
			$title="Quản lý Nhà Hàng";
			$tieude="Sửa loại bài viết";
			$view="views/loaibaiviet/v_sua_loai_bai_viet.php";
			include("include/layout.php");
	
	}
	public function Xoa_loai_bai_viet()
	{
		
		$ma_loai_bai_viet=$_GET["ma_loai"];
		$m_loai_bai_viet= new M_loai_bai_viet();
		
		$kq=$m_loai_bai_viet->Xoa_loai_bai_viet_theo_ma_loai($ma_loai_bai_viet);
		if($kq)
		{
			echo "<script>alert('Xóa thành công')</script>";
			echo "<script>window.location='loaibaiviet.php'</script>";	
		}
		else
		{
			echo "<script>alert('Xóa bị lỗi.')</script>";	
		}
			
	}	
	
	
		
}
?>