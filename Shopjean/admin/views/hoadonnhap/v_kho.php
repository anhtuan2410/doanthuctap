

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
          <th>ID</th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Số lượng còn lại</th>
        
        </tr>
      </thead>
      
        <?php

        foreach ($khos as $hd)
		{

    
   
		?>	
        <tr>
          <td>  <?php echo $hd->id; ?> </td>
           <td>  <?php echo $hd->ma_san_pham; ?> </td>
          <td> <?php echo $hd->ten_san_pham ?></td>
          <td><?php echo $hd->so_luong_con_lai  ?></td>
           

        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
   
  </div>
  
</div>
