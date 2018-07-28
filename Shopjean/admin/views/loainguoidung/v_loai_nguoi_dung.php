<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
    <caption>
   
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã loại người dùng</th>
          <th>Tên loại người dùng</th>
          
        </tr>
      </thead>
      
      <tbody>
        <?php
        foreach ($loainguoidungs as $lnd)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $lnd->ma_loai_nguoi_dung; ?></td>
          <td><a href="sualoainguoidung.php?ma_lnd=<?php echo $lnd->ma_loai_nguoi_dung; ?>" title="Edit"><?php echo $lnd->ten_loai_nguoi_dung ?></a></td>
          
          <td><!-- Icons --> 
            <a href="sualoainguoidung.php?ma_lnd=<?php echo $lnd->ma_loai_nguoi_dung ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="xoaloainguoidung.php?ma_lnd=<?php echo $lnd->ma_loai_nguoi_dung ?>" title="Edit" >
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
