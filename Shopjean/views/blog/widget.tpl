<aside class="widget sidebar-banner margin-mbl"> <a href="#"><img src="http://vn-live.slatic.net/cms/2016/campaign-12/Tet/12-banner-trend-03.jpg" alt="" /></a> </aside>
<aside class="widget top-rated">
  <h5 class="sidebar-title">Được quan tâm nhiều</h5>
  <div class="sidebar-product"> 
    <!-- Single-product start --> 
    {for $i=0 to 4}
    <div class="single-product">
      <div class="product-photo"> <a href="post_blog.php?ma_bai_viet={$bai_viets[$i]->ma_bai_viet}"> <img class="primary-photo" src="images/{$bai_viets[$i]->hinh}" alt=""/> </a> </div>
      <div class="product-brief">
        <h2><a href="post_blog.php?ma_bai_viet={$bai_viets[$i]->ma_bai_viet}">{$bai_viets[$i]->tieu_de}</a></h2>
      </div>
    </div>
    {/for} </div>
</aside>
<aside> <a href="#"><img src="http://www.laprendo.com/data/1/Folder/leftbanner/leftbanner_20160422.jpg" alt="" /></a> </aside>
