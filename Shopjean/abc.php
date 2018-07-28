<?php
	@session_start();
	include("controllers/c_gio_hang.php");
	$c_gio_hang = new C_gio_hang();
	
		$giohang=$c_gio_hang->layGioHang();
		$a=$c_gio_hang->lay_thong_tin_san_pham($giohang);
		
	
		var_dump($a);
	
	//	var_dump($giohang);
	;


	
?>
<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Thanh toán qua Paypal</title>
</head>
<body>

<fieldset>
	<legend>Thanh toán qua cổng PayPal</legend>
	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

            <!-- Nhập địa chỉ email người nhận tiền (người bán) -->
            <input type="hidden" name="business" value="tuanseoeakar@gmail.com">

            <!-- tham số cmd có giá trị _xclick chỉ rõ cho paypal biết là người dùng nhất nút thanh toán -->
            <input type="hidden" name="cmd" value="_xclick">

            <!-- Thông tin mua hàng. -->
           
            <input type="hidden" name="item_name" value="<?php echo $s ?>">
            
			<!--Trị giá của giỏ hàng, vì paypal không hỗ trợ tiền việt nên phải đổi ra tiền $-->
        <input type="hidden" name="amount"  value="<?php echo $tt ?>">
			<!--Loại tiền-->
			
            <input type="hidden" name="currency_code" value="USD">

			<!--Đường link mình cung cấp cho Paypal biết để sau khi xử lí thành công nó sẽ chuyển về theo đường link này-->
         /   <input type="hidden" name="return" value="http://localhost:8080/demothanhtoanonline/thanhcong.html">
			<!--Đường link mình cung cấp cho Paypal biết để nếu  xử lí KHÔNG thành công nó sẽ chuyển về theo đường link này-->
            <input type="hidden" name="cancel_return" value="http://localhost:8080/demothanhtoanonline/loi.html">
            <!-- Nút bấm. -->
            <input type="submit" name="submit" value="Thanh toán quay Paypal">
	</form>
</fieldset>
</body>
</html>