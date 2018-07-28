<?php
	if(isset($_POST['link_anh']) && isset($_POST['id'])){ 
		$link_anh = $_POST['link_anh'];
		$id = $_POST['id'];
		include("models/m_banner.php");
		$m_banner = new M_banner();
		$kq = $m_banner->Cap_nhat_banner($link_anh,$id);
		if($kq)
			echo "Lỗi cập nhật";
		else
			echo "Đã cập nhật";
	}
?>