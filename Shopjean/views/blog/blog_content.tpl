

<div class="blog-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="row"> {foreach $bai_viets as $bv}
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-blog">
              <div class="blog-photo" > <a href="post_blog.php?ma_bai_viet={$bv->ma_bai_viet}"><img    src="images/{$bv->hinh}" alt="" /></a>
                <div class="blog-post-date"> <span>{$bv->ngay_xuat_ban}</span> </div>
              </div>
              <div class="blog-brief">
                <p>{$bv->tieu_de}</p>
                <div class="like-comment"> <a href="#"><i class="sp-like"></i>120 like</a> <a href="#"><i class="sp-comment"></i>60 comment</a> </div>
                <a class="shop-now" href="post_blog.php?ma_bai_viet={$bv->ma_bai_viet}">Xem them</a> </div>
            </div>
          </div>
          {/foreach} 
         </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12"> 
        <!-- widget-brand start -->
		{include file="views/blog/widget.tpl"}
      </div>
    </div>
  </div>
</div>
