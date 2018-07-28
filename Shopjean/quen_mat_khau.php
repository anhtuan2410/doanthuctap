<?php
	include("controllers/c_tai_khoan.php");
	$c_tai_khoan = new C_tai_khoan();
	
	if(isset($_POST['QuenMK']))
	{
		$ten_dang_nhap = $_POST['txtQuenMK'];
		//models
		require_once("models/m_tai_khoan.php");
		$m_tai_khoan = new M_tai_khoan();
		$user = $m_tai_khoan->Kiem_tra_ten_dang_nhap($ten_dang_nhap);
		if($user)
		{	
			$email = $user->email;
			/*if(!isset($_POST["th_gui"]))
			{
				taocaptcha();
			}*/
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
				$noidung="Họ tên:" ."Fashion EveryOne";
				$noidung .="Email:" .$email;
				$noidung .="<hr><br>Chủ đề: Khôi phục tài khoản quên mật khẩu";
				$noidung .="<br>Nội dung: Bạn hãy nhấp vào link sau để lấy lại mật khẩu Fashion EveryOne";
				$mail->SetFrom($email,"Fashion EveryOne");
				$mail->Subject="Khôi phục tài khoản quên mật khẩu";
				$mail->MsgHTML("Bạn hãy nhấp vào link sau để lấy lại mật khẩu Fashion EveryOne <br> Mật khẩu mới là: 123456");
				
				$mail->AddAddress($email); // Mail người nhận
				
				//$path="images/captcha.gif";
				//$mail->AddAttachment($path,"images/captcha.gif");
				/*if($_POST["chk"]==1)
				{
					$mail->AddBCC($email,"like");
				}*/
				//if($_POST["security_code"]==$_SESSION["code"])
				//{
					if(!$mail->Send())
					{
						$err = "Mail lỗi".$mail->ErrorInfo;
					}
					else
					{
						$err = "Gửi mail thành công";
					}
				//}
				//else
				//{
					//$err = "Nhập mã bảo vệ...";	
				//}
				$m_tai_khoan->capTaiKhoan(123456,1,$ten_dang_nhap);
				$_SESSION['quen_mat_khau'] = "Đã gửi thành công, bạn hãy kiểm tra mail để đăng nhập";
		}
		else 
		{
			header("location: quen_mat_khau.php");
			$_SESSION['quen_mat_khau'] = "Tên đăng nhập không tồn tại";	
		}
	}
	$c_tai_khoan->Quen_mat_khau(); 
?>