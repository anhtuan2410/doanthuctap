<?php
@session_start();
include_once("models/m_nguoi_dung.php");
class C_user
{
	function Hien_thi_dang_nhap()
	{
		
		if(isset($_POST["login"]))
		{	
	
			
			$ten=$_POST["ten_dang_nhap"];
			$mk=$_POST["mat_khau"];
			$m_nguoi_dung = new M_user();
			$user = $m_nguoi_dung->Doc_user_theo_tenDn_pass($ten,$mk);
			if($user->ma_loai_nguoi_dung == 1)
			{
				
					$this->luu_dang_nhap($ten,$mk);
				
			}
			
		}
		if(isset($_SESSION["fullname"]) )
		{
			$title="Quản lý Shop Jean|Quản trị";
			include("include/layout.php");	
		}
		
		if(!isset($_SESSION["fullname"]))
		{
			$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
			header("location:login.php");	
		}
		
	}
	function thoat_dang_nhap()
	{
		session_destroy();
		header("location:login.php");	
	}
	function luu_dang_nhap($ten,$mk)
	{
		$m_user=new M_user();
		$user=$m_user->Doc_user_theo_tenDn_pass($ten,$mk);
		
		$_SESSION['fullname']=$user->ho_ten;
		$_SESSION['iduser']=$user->ma_nguoi_dung;
	}
		
}
?>