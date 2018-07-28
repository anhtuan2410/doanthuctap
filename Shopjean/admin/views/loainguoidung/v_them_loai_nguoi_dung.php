<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tên loại người dùng</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên loại người dung" type="text" id="ten_loai_nguoi_dung" name="ten_loai_nguoi_dung" />
          </p>
         
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loai_nguoi_dung.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
