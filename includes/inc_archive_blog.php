<div class="container blogs-container">
    <div class="top-container">
        <div style="margin-top:10px">
            <div class="col-lg-4 col-md-4 col-sm-10 menu" style="padding:0px">
                <ul>
                    <li class="-menu-blog" style="float:left;padding: 0 10px"><a style="color:#000;text-transform:uppercase;font-family:'SFU'" href="mot.1.html">Mốt</a></li>
                    <li class="-menu-blog" style="float:left;padding: 0 10px"><a style="color:#000;text-transform:uppercase;font-family:'SFU'" href="dep.1.html">Đẹp</a></li>
                    <li class="active-menu-blog" style="float:left;padding: 0 10px"><a style="color:#000;text-transform:uppercase;font-family:'SFU'" href="khoe.html">Khoẻ</a></li>
                    <li class="-menu-blog" style="float:left;padding: 0 10px"><a style="color:#000;text-transform:uppercase;font-family:'SFU'" href="meo.1.html">Mẹo</a></li>
                    <li class="-menu-blog" style="float:left;padding: 0 10px"><a style="color:#000;text-transform:uppercase;font-family:'SFU'" href="ngon.html">Ngon</a></li>
                    <li class="-menu-blog" style="float:left;padding: 0 10px"><a style="color:#000;text-transform:uppercase;font-family:'SFU'" href="em.html">Em</a></li>
                    <li class="-menu-blog" style="float:left;padding: 0 10px"><a style="color:#000;text-transform:uppercase;font-family:'SFU'" href="song.html">Sống</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10" >
                <p style="float:right">
                    JUNO MAGAZINE <span>Khám phá, tận hưởng niềm đam mê thời trang và làm đẹp mỗi ngày</span>
                </p>
            </div>
        </div>
    </div>
    <div class="blog-head row clearfix">
    </div>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: "/blogs/khoe/tagged/blog-top?view=head-item",
                success:function(data){
                    $('.blog-head').append(data);
                }
            })
        })
    </script>
    <div class="flexslider"  id="flexslider-blog">
        <ul class="slides" >
            <li data-thumb="//sw001.hstatic.net/8/0b6f1cd8c42232/img_9087-58ff3_1024x1024.jpg">
                <a href="khoe/nhung-bai-tap-the-duc-don-gian-cho-da-luon-cang-min.html"><img src="https://sw001.hstatic.net/8/0b6f1cd8c42232/img_9087-58ff3_1024x1024.jpg"/></a>
                <div class="flex-caption">
                    <a href="khoe.html" class="slider-blog-category">Khỏe</a>
                    <h3>
                        <a href="khoe/nhung-bai-tap-the-duc-don-gian-cho-da-luon-cang-min.html" class="slider-blog-title">Những bài tập thể dục đơn giản cho da luôn căng mịn</a>
                    </h3>
                    <p class="slider-blog-description">
                        Không những vóc dáng mà làn da của nàng cũng cần “thể dục thể thao” để đẹp khỏe mỗi ngày!!!
                    </p>
                </div>
            </li>
            <li data-thumb="//sw001.hstatic.net/5/01a43aa7ea8846/354055-r3l8t8d-650-11facebook_1024x1024.jpg">
                <a href="khoe/nhung-meo-don-gian-cho-giao-mua-chang-lo-cam-cum.html"><img src="https://sw001.hstatic.net/5/01a43aa7ea8846/354055-r3l8t8d-650-11facebook_1024x1024.jpg"/></a>
                <div class="flex-caption">
                    <a href="khoe.html" class="slider-blog-category">Khỏe</a>
                    <h3>
                        <a href="khoe/nhung-meo-don-gian-cho-giao-mua-chang-lo-cam-cum.html" class="slider-blog-title">Những mẹo đơn giản cho giao mùa chẳng lo cảm cúm</a>
                    </h3>
                    <p class="slider-blog-description">
                        Mùa Thu còn là mùa của các loại bệnh về đường hô hấp vì thời tiết thay đổi “chóng vánh”. Bỏ túi bí kíp đẩy lùi căn bệnh ấy nhé nàng!
                    </p>
                </div>
            </li>
            <li data-thumb="//hstatic.net/969/1000003969/10/2016/8-15/20151022-sao-viet-22_f481a79d-9292-405d-5054-fd30c809efcc_small.jpg">
                <a href="khoe/giam-can-nhanh-bat-ngo-chi-bang-cach-tam.html"><img src="https://hstatic.net/969/1000003969/10/2016/8-15/20151022-sao-viet-22_f481a79d-9292-405d-5054-fd30c809efcc.jpg"/></a>
                <div class="flex-caption">
                    <a href="khoe.html" class="slider-blog-category">Khỏe</a>
                    <h3>
                        <a href="khoe/giam-can-nhanh-bat-ngo-chi-bang-cach-tam.html" class="slider-blog-title">Giảm cân nhanh bất ngờ chỉ bằng cách … tắm</a>
                    </h3>
                    <p class="slider-blog-description">
                        Chỉ tắm thôi mà có thể giảm cân? Cùng Juno khám phá “bí quyết” độc lạ lại đơn giản vô cùng này nàng nhé!
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <script>
        $(document).ready(function(){
            $('#flexslider-blog').flexslider({
                animation: "slide",
                controlNav: "thumbnails",
                directionNav : true
            })
        })
    </script>
    <div class="items-ngang">
        <div class="row">
            <?php for($i = 0; $i < 2; $i ++): ?>
                <div class="col-xs-10 col-sm-5 clearfix">
                    <div class="info pull-left">
                        <h3>
                            <a href="/single-blog.php">Điểm danh các loại trái cây ăn “càng nhiều càng tốt” mùa này</a>
                        </h3>
                        <span class="date">09.08/2016</span>
                        <p class="des">
                            Thật may mắn vì chúng ta đang sống trong “vựa” hoa quả với cây trái nhiệt đới phong phú và giàu dinh dưỡng. Nàng cùng Juno điểm danh trái cây ngon, bổ và rẻ nha
                        </p>
                        <div class="share">
                            <p class="link-icon clearfix">
                                <a href="javascript:void(0)" class="share-icon"></a>
                                <a href="khoe.html#comment_1000212829" class="comment-icon" data-spy="scroll"></a>
                                <span class="count count_1000212829">1</span>
                            </p>
                            <div class="content">
                                <ul class="icon-share-share">
                                    <li class="facebook">
                                        <a href="http://www.facebook.com/share.php?v=4&src=bm&u=https://juno.vn/blogs/khoe/diem-danh-cac-loai-trai-cay-an-cang-nhieu-cang-tot-mua-nay&t=Điểm danh các loại trái cây ăn “càng nhiều càng tốt” mùa này"
                                            onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=626,height=436');   return false;"
                                            rel="nofollow" title="Share this on Facebook"></a>
                                    </li>
                                    <li class="google">
                                        <a href="https://plus.google.com/share?url=https://juno.vn/blogs/khoe/diem-danh-cac-loai-trai-cay-an-cang-nhieu-cang-tot-mua-nay"
                                            onclick="javascript:window.open(this.href,'  ','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
                                            rel="nofollow" title="Share this on Google+"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="/single-blog.php">
                        <div class="item-img pull-right" style="background: url('/assets/hstatic.net/969/1000003969/10/2016/8-9/soda-chanh-day1.jpg') no-repeat;background-size: cover;background-position: center;">
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="items-doc">
        <div class="row">
            <?php for($i = 0; $i < 20; $i ++): ?>
            <div data-id="<?php echo $i; ?>" class="col-xs-5 col-sm-25 col-md-2" style="margin: 10px 0">
                <a class="ClickBlogItem" href="/single-blog.php">
                    <div class="item-img ClickBlogItem" style="height:305px !important;background: url('/assets/sw001.hstatic.net/8/0c38c7ad24adf5/1434306494-9_1024x1024.jpg') no-repeat;background-size: cover;background-position: center;">
                    </div>
                </a>
                <h3 class="ClickBlogItem">
                    <a class="ClickBlogItem" href="/single-blog.php">Vì sao đi bộ giúp nàng khoẻ hơn?</a>
                </h3>
                <span class="date Khỏe">26.07.2016</span>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="text-center">
        <ul class="pagination">
            <li><span>1</span></li>
            <li><a href="https://juno.vn/blogs/khoe?page=2">2</a></li>
            <li><a href="https://juno.vn/blogs/khoe?page=3">3</a></li>
            <li class=""><a href="https://juno.vn/blogs/khoe?page=2"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
        </ul>
    </div>
</div>