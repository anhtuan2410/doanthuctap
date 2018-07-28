<?php
@session_start();
include ("models/m_hoa_don.php");
class C_hoa_don
{
	function Hien_thi_hoa_don()
	{
			// Models
			$m_hoa_don=new M_hoa_don();
			if(isset($_POST["btnCapnhat"]) && isset($_POST["ds"]) && isset($_POST["so_hoa_don"]))
			{
				// Cập nhật lại tình trạng
				$ds=$_POST["ds"];
				$dsHoa_dons=$_POST["so_hoa_don"];
				for($i=0;$i<count($dsHoa_dons);$i++)
				{
					$ma_hoa_don=$dsHoa_dons[$i];
					$tinh_trang=$ds[$i];
					$m_hoa_don->Cap_nhat_tinh_trang($ma_hoa_don,$tinh_trang);	
				}
			}
			$g="";
			$hoa_dons=$m_hoa_don->Doc_hoa_don($g);
			
			if(isset($_POST["btnTim"]))
			{
				$gt=$_POST["tim"];
				$hoa_dons=$m_hoa_don->Doc_hoa_don($gt);
			}			
			// View
			
			$title="Quản lý Shop Jean";
			$tieude="Danh sách Hóa đơn";
			$view="views/hoadon/v_hoadon.php";
			include("include/layout.php");	
	
	}
	public function Hien_thi_chi_tiet_hoa_don()
	{
		// Models
		$so_hoa_don=$_GET["so_hoa_don"];
		$m_hoa_don=new M_hoa_don();
		$hoa_don=$m_hoa_don->Doc_hoa_don_theo_ma_hoa_don($so_hoa_don);
		$chi_tiets=$m_hoa_don->Doc_chi_tiet_hoa_don_theo_ma_hoa_don($so_hoa_don);
		// View
		$title="Quản lý Nhà Hàng";
		$tieude="Hóa đơn bán hàng";
		$view="views/hoadon/v_chitiethoadon.php";
		include("include/layout.php");
			
	}
}
?>