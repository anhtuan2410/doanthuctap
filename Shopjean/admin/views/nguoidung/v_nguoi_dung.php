<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
  
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã người dùng</th>
          <th>Mã loại người dùng</th>
          <th>Tên đăng nhập</th>
       
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>SĐT</th>
          <th>Ngày đăng ký</th>
       
           <th>Active</th>
        </tr>
      </thead>
      
      <tbody>
        <?php
        foreach ($nguoidungs as $nd)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $nd->ma_nguoi_dung; ?></td>
          <td><?php echo $nd->ma_loai_nguoi_dung; ?></td>
          <td><a href="suanguoidung.php?ma_nd=<?php echo $nd->ma_nguoi_dung; ?>" title="Edit"><?php echo $nd->ten_dang_nhap ?></a></td>
        
          <td><?php echo $nd->email ?></td>
           <td><?php echo $nd->dia_chi ?></td>
            <td><?php echo $nd->so_dien_thoai ?></td>
          <td><?php echo $nd->ngay_dang_ky ?></td>
         
          <td><?php echo $nd->active ?></td>
          <td><!-- Icons --> 
            <a href="suanguoidung.php?ma_nd=<?php echo $nd->ma_nguoi_dung ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
           <a href="xoanguoidung.php?ma_nd=<?php echo $nd->ma_nguoi_dung ?>" title="Delete" > 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
   
  </div>
  
</div>
