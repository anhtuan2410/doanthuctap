<meta charset="utf-8"/>
<?php
	@session_start();
	class C_tai_khoan
	{
		function Hien_thi_giao_dien_login()
		{
			//models
			require_once("models/m_tai_khoan.php"); 
			$err="";
			//if(isset($_POST['dang_nhap'])){
				if(isset($_SESSION["error"]))
				{
					$err=$_SESSION["error"];
					$_SESSION["error"]="";
			//	}
			}
			if(isset($_SESSION["ten_dang_nhap"]))
			{
				header("location: tai_khoan.php");
			}
			//views
			require_once("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$title = "Đăng nhập";
			$smarty->assign("title",$title);
			$view = "views/login/layout.tpl";
			$smarty->assign("err",$err);
			$smarty->assign("view",$view);
			$smarty->Hien_thi_giao_dien("layout.tpl");	
		}
		function Hien_thi_dang_nhap()
		{
	
			if(isset($_POST["dang_nhap"]))
			{
				$ten_dang_nhap = $_POST["ten_dang_nhap"];
				$mat_khau = $_POST["mat_khau"];
				$this->luu_dang_nhap($ten_dang_nhap,$mat_khau);
	
			}
			if(isset($_SESSION["ten_dang_nhap"]) )
			{
				//models 
				$ten_dang_nhap = $_SESSION["ten_dang_nhap"];
				require_once("models/m_tai_khoan.php");
				$m_tai_khoan = new M_tai_khoan();
				$user = $m_tai_khoan->Kiem_tra_ten_dang_nhap($ten_dang_nhap);
				require_once("models/m_hoa_don.php");
				$m_hoa_don = new M_hoa_don();
				$hoa_dons = $m_hoa_don->lay_hoa_don($user->ma_nguoi_dung);
				
				//views
				require_once("Smarty_shop_jean.php");
				$smarty = new Smarty_shop_jean();
				$title = "Tài khoản";
				$smarty->assign("title",$title);
				$smarty->assign("user",$user);
				$smarty->assign("hoa_dons",$hoa_dons);
				$view = "views/account/layout.tpl";
				$smarty->assign("view",$view);
				$smarty->Hien_thi_giao_dien("layout.tpl");	
			}
			else
			{
				//$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
				header("location:login.php");
			}
		}
		function thoat_dang_nhap()
		{
			session_destroy();
			header("location: login.php");
		}
		function luu_dang_nhap($ten_dang_nhap,$mat_khau)
		{
			//models
			require_once("models/m_tai_khoan.php");
			$m_tai_khoan = new M_tai_khoan();
			$user = $m_tai_khoan->Doc_user_theo_tenDn_pass($ten_dang_nhap,$mat_khau);
			if($user)
			{
				if($user->active == 0)
				{
					$_SESSION['error']= "Tài khoản chưa được kích hoạt, vui lòng kiểm tra email";
					header("location: login.php");
				}else
					$_SESSION['ten_dang_nhap']=$user->ten_dang_nhap;
			}else
				$_SESSION['error']=$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
		}
		function Dang_ky_tai_khoan()
		{
			//models
			require_once("models/m_tai_khoan.php");
			$m_tai_khoan = new M_tai_khoan();
			if(isset($_POST['dangKy'])){
				$ho_ten = $_POST['txtHoTen'];
				$ten_dang_nhap = $_POST['txtTenDangNhap'];
				$email = $_POST['txtEmail'];
				$dia_chi = $_POST['txtDiaChi'];
				$gioi_tinh = $_POST['txtGioiTinh'];
				$so_dien_thoai = $_POST['txtSoDienThoai'];
				
				$pass_1 = $_POST['txtPassword1'];
				$pass_2 = $_POST['txtPassword2'];
				if(!empty($ten_dang_nhap) && !empty($email) && !empty($email)){
					if($pass_1 = $pass_2)
					{
						if($gioi_tinh == "nam" || $gioi_tinh == "Nam")
							$gioi_tinh = 1;
						else 
							$gioi_tinh = 0;
						$tai_khoan = $m_tai_khoan->Them_tai_khoan($ho_ten,$gioi_tinh,$ten_dang_nhap, $pass_1, $email, $so_dien_thoai, $dia_chi);
						if($tai_khoan > 0)
						{
							require_once("public/smtpgmail/class.phpmailer.php");
							$mail=new PHPMailer();
							$mail->IsSMTP(); // Chứng thực SMTP
							$mail->SMTPAuth=TRUE;
							$mail->Host="smtp.gmail.com";
							$mail->Port=465;
							$mail->SMTPSecure="ssl";
							/* Server google*/
							$mail->Username="anhtuan24101996@gmail.com"; // Nhập mail
							$mail->Password="tuanseo1996"; // Mật khẩu
							/* Server google*/
							$mail->CharSet="utf-8";
							$noidung="Họ tên:" .$ho_ten;
							$noidung .="Email:" .$email;
							$noidung .="<hr><br>Chủ đề: Xác nhận tài khoản Fashion EveryOne";
							$noidung .="<br>Nội dung: Bạn hãy nhấp vào link sau để trở thành, thành viên của Fashion EveryOne";
							$mail->SetFrom("hotrokhachhang@fashioneveryone.com","Support");
							$mail->Subject="Xác nhận tài khoản Fashion EveryOne";
							$mail->MsgHTML("Bạn hãy nhấp vào link sau để trở thành, thành viên của Fashion EveryOne <br> http://localhost:8080/Shopjean/xac_nhan_tai_khoan.php?ten_dang_nhap=$ten_dang_nhap");
							
							$mail->AddAddress($email); // Mail người nhận
								if(!$mail->Send())
									$err = "Mail lỗi".$mail->ErrorInfo;
								else
									$err = "Gửi mail thành công";
									
							//views
							require_once("Smarty_shop_jean.php");
							$smarty = new Smarty_shop_jean();
							$view = "views/login/dang_ky_thanh_cong.tpl";
							$title = "Đăng ký thành công";
							$content = "Đăng ký thành công. Vui lòng kiểm tra email để hoàn thành việc xác nhận";
							$smarty->assign("content",$content);
							$smarty->assign("title",$title);
							$smarty->assign("view",$view);
							$smarty->Hien_thi_giao_dien("layout.tpl");
						}
					}
				}
				else
				{	
					$_SESSION['loi_dang_nhap'] ="Bạn nhập sai hoặc thiếu thông tin, yêu cầu bạn nhập lại";
					header("location: login.php");	
				}
			}		
		}
		function Xac_thuc_tai_khoan()
		{
			//models
			$ten_dang_nhap = $_GET['ten_dang_nhap'];
			require_once("models/m_tai_khoan.php");
			$m_tai_khoan = new M_tai_khoan();
			$m_tai_khoan->Cap_nhat_tai_khoan($ten_dang_nhap);
			//views
			require_once("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$view = "views/login/dang_ky_thanh_cong.tpl";
			$title = "Xác nhận thành công";
			$content = "Xác nhận thành công. Vui lòng bấm quay lại	<a href=".'index.php'.">Trang chủ</a>";
			$smarty->assign("content",$content);
			$smarty->assign("title",$title);
			$smarty->assign("view",$view);
			$smarty->Hien_thi_giao_dien("layout.tpl");		
		}
		function checkcart()
		{
				require_once('controllers/c_gio_hang.php');
				require_once("models/m_hoa_don.php");
						$mhd=new M_hoa_don();
						$c_gio_hang=new C_gio_hang();
						$giohang1=$c_gio_hang->layGioHang();

						foreach($giohang1 as $key1=>$value1)
						{
							$a=	$mhd->checkkho($key1,$value1);

							if($a==null){
								return 1;
							}
						
						}
						return 0;
					
					
		}
		

		function Dat_san_pham_khi_da_co_tk()
		{
				include('controllers/c_gio_hang.php');
				require_once("models/m_tai_khoan.php");
				
			if(isset($_POST['DangNhap'])){
				$ten_dang_nhap = $_POST['ten_dang_nhap'];
				$mat_khau = $_POST['mat_khau'];
				$this->luu_dang_nhap($ten_dang_nhap,$mat_khau);
				if(isset($_SESSION["ten_dang_nhap"]) )
				{	
					

					$m_tai_khoan = new M_tai_khoan();
					$ma_khach_hang = $m_tai_khoan->Doc_user_theo_tenDn_pass($ten_dang_nhap,$mat_khau);		
					if($ma_khach_hang)
					{
						$ma_khach_hang = $ma_khach_hang->ma_nguoi_dung;
						$ngay_dat = date('Y-m-d');
						$tri_gia = 0; // chua sua
						
						$so_hoa_don= $m_tai_khoan->themHoaDon($ngay_dat,$ma_khach_hang,0);
						if($so_hoa_don>0)
						{
							require_once('controllers/c_gio_hang.php');
							$c_gio_hang=new C_gio_hang();
							$gio_hang=$c_gio_hang->layGioHang();
							foreach($gio_hang as $key=>$value)
							{
								$m_tai_khoan->themChiTietHoaDon($so_hoa_don, $key, $value, 0);
							}
							$m_tai_khoan->capNhatDonGia_san_pham($so_hoa_don);
							$m_tai_khoan->capNhatTongTien($so_hoa_don);
							$c_gio_hang->xoaGioHang();
							//In hoa đơn
							require_once("Smarty_shop_jean.php");
							$smarty = new Smarty_shop_jean();
							$view="views/account/in_hoa_don.tpl";
							$title=" Đặt hàng thành công ";

                       		 $smarty->assign('title',$title);
							$smarty->assign('view',$view);
							$smarty->Hien_thi_giao_dien('layout.tpl');
						}
					}
				}
				else
				{	
					//$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
					header("location: checkout.php");
					
				}
			}
		}
		function Dat_san_pham_khi_da_co_tk_1()
		{
				
				
				
				if(isset($_SESSION["ten_dang_nhap"]) ){	

					require_once("models/m_tai_khoan.php");

					$m_tai_khoan = new M_tai_khoan();

					$tk = $m_tai_khoan->Kiem_tra_ten_dang_nhap($_SESSION["ten_dang_nhap"]);		
					$ma_khach_hang = $tk->ma_nguoi_dung;
					$ngay_dat = date('Y-m-d');
					$tri_gia = 0; // chua sua
					
					$so_hoa_don= $m_tai_khoan->themHoaDon($ngay_dat,$ma_khach_hang,0);
					if($so_hoa_don>0)
					{
						require_once('controllers/c_gio_hang.php');
						$c_gio_hang=new C_gio_hang();
						$gio_hang=$c_gio_hang->layGioHang();
						foreach($gio_hang as $key=>$value)
						{
								$m_tai_khoan->themChiTietHoaDon($so_hoa_don, $key, $value, 0);
						}
						$m_tai_khoan->capNhatDonGia_san_pham($so_hoa_don);
						$m_tai_khoan->capNhatTongTien($so_hoa_don);
						$c_gio_hang->xoaGioHang();
						//In hoa đơn
						require_once("Smarty_shop_jean.php");
						$smarty = new Smarty_shop_jean();
						$view="views/account/in_hoa_don.tpl";
                        $title=" Đặt hàng thành công ";

                        $smarty->assign('title',$title);
						$smarty->assign('view',$view);
						$smarty->Hien_thi_giao_dien('layout.tpl');
					}
				}
		}
		function Dat_san_pham_khi_da_co_tk_2()
		{
				if(isset($_SESSION["ten_dang_nhap"]) )
				{	
					require_once("models/m_tai_khoan.php");
					$m_tai_khoan = new M_tai_khoan();
					$tk = $m_tai_khoan->Kiem_tra_ten_dang_nhap($_SESSION["ten_dang_nhap"]);		
					$ma_khach_hang = $tk->ma_nguoi_dung;
					$ngay_dat = date('Y-m-d');
					$tri_gia = 0; // chua sua
					
					$so_hoa_don= $m_tai_khoan->themHoaDon2($ngay_dat,$ma_khach_hang,0);
					if($so_hoa_don>0)
					{
						require_once('controllers/c_gio_hang.php');
						$c_gio_hang=new C_gio_hang();
						$gio_hang=$c_gio_hang->layGioHang();
						foreach($gio_hang as $key=>$value)
						{
								$m_tai_khoan->themChiTietHoaDon($so_hoa_don, $key, $value, 0);
						}
						$m_tai_khoan->capNhatDonGia_san_pham($so_hoa_don);
						$m_tai_khoan->capNhatTongTien($so_hoa_don);
						$c_gio_hang->xoaGioHang();
						//In hoa đơn
						require_once("Smarty_shop_jean.php");
						$smarty = new Smarty_shop_jean();
						$view="views/account/in_hoa_don.tpl";
                        $title=" Thanh toán thành công ";

                        $smarty->assign('title',$title);
						$smarty->assign('view',$view);
						$smarty->Hien_thi_giao_dien('layout.tpl');
					}
				}
		}
		function Dat_san_pham_khong_can_tk()
		{
			require_once("models/m_tai_khoan.php");
			require_once("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$title="Mua hàng thành công";
			$smarty->assign('title',$title);
			$m_khach_hang = new M_tai_khoan();
			//$ten_khach_hang, $dia_chi, $dien_thoai, $email
			if(isset($_POST['submit']))
			{
				$ten_khach_hang = $_POST['txtTenKhachHang'];
				$dia_chi = $_POST['txtDiaChi'];
				$dien_thoai = $_POST['txtDienThoai'];
				$email = $_POST['txtEmail'];
				
				$ma_khach_hang = $m_khach_hang->Them_khach_hang($ten_khach_hang, $dia_chi, $dien_thoai, $email);
				if($ma_khach_hang > 0)
				{
					$ngay_dat = date('Y-m-d');
					$so_hoa_don = $m_khach_hang->themHoaDon($ngay_dat,$ma_khach_hang,0);
					if($so_hoa_don>0)
					{
						require_once('controllers/c_gio_hang.php');
						$c_gio_hang=new C_gio_hang();
						$gio_hang=$c_gio_hang->layGioHang();
						foreach($gio_hang as $key=>$value)
						{
								$m_khach_hang->themChiTietHoaDon($so_hoa_don, $key, $value, 0); 
						}
						$m_khach_hang->capNhatDonGia_san_pham($so_hoa_don);
						$m_khach_hang->capNhatTongTien($so_hoa_don);
						$c_gio_hang->xoaGioHang();
						//In hoa đơn
						$smarty = new Smarty_shop_jean();
					  	$view="views/account/in_hoa_don.tpl";
						$title="Đặt hàng thành công";
						$smarty->assign('view',$view);
						$smarty->assign('title',$title);
						$smarty->Hien_thi_giao_dien('layout.tpl');
					}
				}
			}
		}
		
		function cap_nhat_thong_tin_tai_khoan()
			{
				//models
				require_once("models/m_tai_khoan.php");						
				$m_tai_khoan = new M_tai_khoan();
				require_once("Smarty_shop_jean.php");
				$smarty = new Smarty_shop_jean();
				if(isset($_POST['capNhatThongTin']))
				{
					 $ten_dang_nhap = $_POST['txtTenDangNhap'];
					 $ho_ten = $_POST['txtHoTen'];
					 $gioi_tinh = $_POST['txtGioiTinh'];
					 $email = $_POST['txtEmail'];
					 $dia_chi = $_POST['txtDiaChi'];
					 $so_dien_thoai = $_POST['txtSoDienThoai'];
					 $mat_khau_hien_tai = $_POST['txtMatKhauHienTai'];
					 $mat_khau_moi =$_POST['txtMatKhauMoi'];
					 $nhap_lai = $_POST['txtNhapLaiMatKhauMoi'];
					 
					 $user = $m_tai_khoan->Kiem_tra_ten_dang_nhap($ten_dang_nhap);
					 if($user->mat_khau != md5($mat_khau_hien_tai))
					 {			
								//views
								$erro = "Mật khẩu hiện tại không chính xác           <a href='tai_khoan.php'>Quay lại</a>";
								$view="views/account/layout.tpl";
								$smarty->assign('view',$view);
								 $title="Tài khoản";
						  $smarty->assign('title',$title);
								$smarty->assign('erro',$erro);
								$smarty->Hien_thi_giao_dien('layout.tpl');
					 }
					 else if ($mat_khau_moi != $nhap_lai)
					 {
						 $erro = "Mật khẩu nhập lại không khớp           <a href='tai_khoan.php'>Quay lại</a>";
						 $view="views/account/layout.tpl";
						 $smarty->assign('view',$view);
						 $title="Tài khoản";
						  $smarty->assign('title',$title);
						 $smarty->assign('erro',$erro);
						 $smarty->Hien_thi_giao_dien('layout.tpl');

					 }
					 else 
					 {
						 $m_tai_khoan->capNhatThongTin($ho_ten,$gioi_tinh,$mat_khau_moi,$email,$so_dien_thoai,$dia_chi,$ten_dang_nhap);
						 $erro = "Cập nhật thành công                <a href='tai_khoan.php'>Quay lại</a>";
						 $view = "views/account/layout.tpl";
						  $title="Tài khoản";
						  $smarty->assign('title',$title);
						 $smarty->assign('view',$view);
						 $smarty->assign('erro',$erro);
						 $smarty->Hien_thi_giao_dien('layout.tpl');

					 }
				}
			}
			
			function Quen_mat_khau()
			{
				
						//views
						require_once("Smarty_shop_jean.php");
						$smarty = new Smarty_shop_jean();
						$title = "Quên mật khẩu";
						$view="views/account/quen_mat_khau.tpl";
						$smarty->assign('title',$title);
						$smarty->assign('view',$view);
						$smarty->Hien_thi_giao_dien('layout.tpl');
					
			}
			
	}

?>