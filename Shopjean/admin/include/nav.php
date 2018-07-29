<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script>

<ul id="main-nav">
  <!-- Accordion Menu -->
 <li> <a href="quantri.html" class="nav-top-item" id="baiviet"> Báo cáo </a>
    <ul>
      <li><a href="quantri.html" title="baiviet">Doanh thu theo tháng</a></li>
      <li><a href="thongkeloilai.php" title="baiviet">Thông kê lời lãi</a></li>
    </ul>
  </li>
 
  <li> <a href="baiviet.php" class="nav-top-item" id="baiviet"> Bài viết </a>
    <ul>
      <li><a href="baiviet.php" title="baiviet">Danh sách bài viết</a></li>
      <li><a href="thembaiviet.php" title="baiviet">Thêm bài viết</a></li>
    </ul>
  </li>
  <li> <a href="loaibaiviet.php" class="nav-top-item" id="loaibaiviet"> Loại bài viết </a>
    <ul>
      <li><a href="loaibaiviet.php" title="loaibaiviet">Danh sách loai bài viết</a></li>
      <li><a href="themloaibaiviet.php" title="loaibaiviet">Thêm loai bài viết</a></li>
    </ul>
  </li>
  <li> <a href="sanpham.php" class="nav-top-item" id="sanpham"> Sản phẩm </a>
    <ul>
      <li><a href="sanpham.php" title="sanpham">Danh sách sản phẩm</a></li>
      <li><a href="themsanpham.php" title="sanpham">Thêm sản phẩm</a></li>
    </ul>
  </li>
  <li> <a href="loaisanpham.php" class="nav-top-item" id="loaisanpham"> Loại sản phẩm </a>
    <ul>
      <li><a href="loaisanpham.php" title="loaisanpham">Danh sách loại sản phẩm</a></li>
      <li><a href="themloaisanpham.php" title="loaisanpham" >Thêm loại sản phẩm</a></li>
    </ul>
  </li>
  
  <li> <a href="nguoidung.php" class="nav-top-item" id="nguoidung"> Người dùng </a>
    <ul>
      <li><a href="nguoidung.php" title="nguoidung">Danh sách người dùng</a></li>
      <li><a href="themnguoidung.php" title="nguoidung">Thêm người dùng</a></li>
    </ul>
  </li>
  <li> <a href="loainguoidung.php" class="nav-top-item" id="loainguoidung"> Loại người dùng </a>
    <ul>
      <li><a href="loainguoidung.php" title="loainguoidung">Danh sách loại người dùng</a></li>
      <li><a href="themloainguoidung.php" title="loainguoidung">Thêm loạingười dùng</a></li>
    </ul>
  </li>
  <li> <a href="hoa_don.php" class="nav-top-item" id="hoadon"> Hóa đơn xuất </a>
    <ul>
      <li><a href="hoadon.php" title="hoadon">Danh sách hóa đơn</a></li>
    </ul>
  </li>
   <li> <a href="hoa_don_nhap.php" class="nav-top-item" id="hoadonnhap"> Hóa đơn nhập </a>
    <ul>
      <li><a href="hoadonnhap.php" title="hoadonnhap">Danh sách hóa đơn nhập</a></li>
      <li><a href="themhoadonnhap.php" title="hoadonnhap">Thêm hóa đơn nhập</a></li>
    </ul>
  </li>
   <li> <a href="kho.php" class="nav-top-item" id="kho"> Kho </a>
    <ul>
      <li><a href="kho.php" title="kho">Kiểm tra kho</a></li>
      
    </ul>
  </li>
</ul>
<!-- End #main-nav -->