<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
    <caption>
    <form method="post">
    <p>
    <label>Nhập tiêu đề bài viết:</label> <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã bài viết</th>
          <th>Mã loại bài viết</th>
          <th>Mã người dùng</th>
          <th>Tiêu đề</th>
         
     
          <th>Ngày xuất bản</th>
         
      
          <th>Xuất bản</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> <?php echo $lst ?> </div>
         
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
      
        <?php
        foreach ($bai_viets as $tin)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $tin->ma_bai_viet; ?></td>
          <td><?php echo $tin->ma_loai_bai_viet; ?></td>
          <td><?php echo $tin->ma_nguoi_dung; ?></td>
          <td><a href="suabaiviet.php?ma_bai_viet=<?php echo $tin->ma_bai_viet ?>" title="Edit"><?php echo $tin->tieu_de ?></a></td>
         
          
          <td><?php echo $tin->ngay_xuat_ban ?></td>
        
           
             <td><?php echo $tin->xuat_ban ?></td>
          <td><!-- Icons --> 
            <a href="suabaiviet.php?ma_bai_viet=<?php echo $tin->ma_bai_viet ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="xoabaiviet.php?ma_bai_viet=<?php echo $tin->ma_bai_viet ?>" title="Delete" onclick=""> 
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
