{include file="views/blog/banner_post.tpl"}
<div class="blog-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="row">
          <div class="col-md-12">
            <div class="single-blog">
              <div class="blog-photo"> <a href="#"><img src="{$bai_viet->hinh}" alt="" /></a>
                <div class="blog-post-date"> <span>13th</span> <span>Feb</span> </div>
              </div>
              <div class="blog-brief">
                <p>{$bai_viet->noi_dung_chi_tiet}</p>
                <div class="like-comment"> <a href="#"><i class="sp-like"></i>120 like</a> <a href="#"><i class="sp-comment"></i>60 comment</a> </div>
              </div>
            </div>
            <div class="social-sharing">
              <h3>Chia sẽ bài viết này</h3>
              <div class="sharing-icon"> <a href="#"><i class="sp-facebook"></i></a> <a href="#"><i class="sp-twitter"></i></a> <a href="#"><i class="sp-linkedin"></i></a> <a href="#"><i class="sp-google"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12"> 
		{include file="views/blog/widget.tpl"}
      </div>
    </div>
  </div>
</div>
