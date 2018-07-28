<?php
	include("controllers/c_gio_hang.php");
	$c_gio_hang = new C_gio_hang();
	if(isset($_POST["btnCapnhat"]))
	{
		$giohang=$c_gio_hang->layGioHang();
		//Xóa mặt hàng trong giỏ hàng
		foreach($giohang as $key=>$value)
		{
			if(isset($_POST[$key]))
			{
				$c_gio_hang->xoaMatHang($key,$_POST[$key]);
			}
		} 
		//cập nhật lại giỏ hàng
		$giohang=$c_gio_hang->layGioHang();
		if($giohang)
		{
			foreach($giohang as $key=>$value)
			{
				if(isset($_POST["soluonggiohang".$key])){
					$soluong_moi=$_POST["soluonggiohang".$key];
					if($soluong_moi!=$value)
					{                        
						$c_gio_hang->capNhatGioHang($key,$soluong_moi,$_POST["dongiagiohang".$key]);
					}
				}
			}
		}		
		
	}
	if(isset($_POST["btnxoagiohang"]))
	{
		$c_gio_hang->xoaGioHang();
	}
	$c_gio_hang->xem_gio_hang();
?>