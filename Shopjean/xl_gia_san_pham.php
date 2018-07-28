<?php
if(isset($_POST['GiaTriDau']) && isset($_POST['GiaTriCuoi'])){
	$GiaTriDau = $_POST["GiaTriDau"]; 
	$GiaTriCuoi = $_POST["GiaTriCuoi"];
	include("models/m_san_pham.php");
	
	$m_san_pham = new M_san_pham();
	$san_pham = $m_san_pham->lay_san_pham_theo_gia($GiaTriDau,$GiaTriCuoi);
/*	include("controllers/Pager.php");
	$p = new pager();
	$limit = 9;
	$count = count($san_pham);
	$vt = $p->findStart($limit);
	$pages = $p->findPages($count,$limit);
	$curpage=$_GET["page"];
	$list=$p->pageList($curpage,$pages);
	$san_pham = $m_san_pham->Doc_san_pham_best_sell($vt,$limit);*/
}
?>

<div class="row shop-grid" id="content-shop-nam">
  <?php foreach($san_pham as $sp){ ?>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="single-product">
      <div class="product-photo"> <a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $sp->ma_san_pham ?>"> 
      <img class="primary-photo" src="images/<?php echo $sp->hinh ?>" alt="" /> <img class="secondary-photo" src="images/<?php echo $sp->hinh ?>" alt="" /> </a>
        <div class="pro-action"> <a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a> <a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a> <a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a> </div>
      </div>
      <div class="product-brief">
        <h2 class="ten_san_pham"><a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $sp->ma_san_pham ?>"> <?php echo $sp->ten_san_pham ?> </a></h2>
        <h3>Giá: <?php echo number_format($sp->don_gia)?> </h3>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<div class="product-toolbar btm-border"> 
  <!-- Shop-menu --> 
  <!-- Pagination -->
  <div class="shop-pagination">
    <?php //echo $list ?>
  </div>
</div>
