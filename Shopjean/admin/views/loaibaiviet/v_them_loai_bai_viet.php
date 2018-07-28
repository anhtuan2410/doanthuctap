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
            <label>Tên loại bài viết</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tiêu đề tin tức" type="text" id="ten_loai_bai_viet" name="ten_loai_bai_viet" />
          </p>
          <p>
            <label>Mô tả</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tiêu đề tin tức" type="text" id="mo_ta" name="mo_ta" />
          </p>
         
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='tintuc.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
