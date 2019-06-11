<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"./template/pc/yingdongli/product\detail.html";i:1560196329;s:59:"F:\fositebianping\template\pc\yingdongli\public\header.html";i:1560195647;s:64:"F:\fositebianping\template\pc\yingdongli\public\product-box.html";i:1559819527;s:59:"F:\fositebianping\template\pc\yingdongli\public\footer.html";i:1559701309;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>首页-硬动力官网|硬动力官网</title>
    <meta name="keywords" content="硬动力官网是变频行业权威官网"/>
    <meta name="description" content="硬动力官网是变频行业权威官网"/>
    <link rel="stylesheet" type="text/css" href="/template/pc/yingdongli/static/css/fontInco/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/template/pc/yingdongli/static/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/template/pc/yingdongli/static/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="/template/pc/yingdongli/static/css/public.css"/>
    <link rel="stylesheet" type="text/css" href="/template/pc/yingdongli/static/css/about.css"/>
    <script src="/template/pc/yingdongli/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/global.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/public/upload/logo/2019/05-22/b23e888e0210bffc194d4f8b4ad42e20.png" media="screen"/>
</head>
<body>
<!--header-s-->
<div class="top-box minwidth">
    <div class="wrap">
        <div class="welcome">欢迎来到硬动力官网！查看分站<i class="fa fa-angle-down"></i></div>
        <div class="tel"><i class="fa fa-volume-control-phone"></i><span>0755-88889999</span></div>
    </div>
</div>
<div class="header-box minwidth">
    <div class="wrap">
        <div class="logo">
            <a href="/index.php/Home/index/index.html">
                <img src="/template/pc/yingdongli/static/imgs/logo/logo.png"/>
            </a>
        </div>
        <div class="slogn">中国变频器领先品牌<br>www.fositebianping.com</div>
        <div class="search-box">
            <div class="search-input">
                <form id="searchForm" name="" method="get" action="/index.php/Home/Goods/search.html" class="ecsc-search-form">
                    <input value="" autocomplete="off" name="q" id="q" type="text" placeholder="输入关键字">
                    <button type="submit">搜索</button>
                </form>
            </div>
            <div class="keyword" id="search_list">
                <a href="/index.php/Home/Goods/search/q/%E5%8F%98%E9%A2%91%E5%99%A8.html" target="_blank">变频器</a>
                <a href="/index.php/Home/Goods/search/q/%E5%8F%98%E9%A2%91%E6%9F%9C.html" target="_blank">变频柜</a>
                <a href="/index.php/Home/Goods/search/q/%E6%B0%B4%E6%B3%B5%E5%8F%98%E9%A2%91%E6%9F%9C.html" target="_blank">水泵变频柜</a>
                <a href="/index.php/Home/Goods/search/q/%E5%8C%85%E8%A3%85%E5%8F%98%E9%A2%91%E6%9F%9C.html" target="_blank">包装变频柜</a>
                <a href="/index.php/Home/Goods/search/q/%E6%9C%BA%E5%BA%8A%E5%8F%98%E9%A2%91%E6%9F%9C.html" target="_blank">机床变频柜</a>
            </div>
        </div>
    </div>
</div>
<div class="nav-box minwidth">
    <div class="wrap">
        <span class="on"><a href="/index.php/home/Index/index.html">首页</a></span>
        <span >
            <a href="#" target="_blank"  >变频器</a>
        </span>
        <span >
            <a href="#" target="_blank"  >变频柜</a>
        </span>
        <span >
            <a href="/home/product/index" target="_blank"  >产品中心</a>
        </span>
        <span >
            <a href="#" target="_blank"  >定制/维修/加盟</a>
        </span>
        <span >
            <a href="/home/news/index" target="_blank"  >新闻百科</a>
        </span>
        <span >
            <a href="#" target="_blank"  >客户案例</a>
        </span>
        <span >
            <a href="#" target="_blank"  >在线购买 </a>
        </span>
        <span >
            <a href="#" target="_blank"  >关于我们</a>
        </span>
    </div>
</div>
<!--header-e-->
<!--header-e-->
<div class="ad-img"><img src="/template/pc/yingdongli/static/imgs/ad/ad4.jpg" alt="" style="width:100%"></div>
<!-- 产品服务中心 -->
<div class="wrap minwidth"  >
    <div class="product clearfix">
        
        <!-- 右侧产品详情 -->
        <div class="service fr">
            <div class="nav"><i class="fa fa-home" style="margin-right: 5px"></i><a href="">硬动力</a> -> <a href=""></a>产品服务中心</-></div>
            <div class="detail">
                <div class="attr-box">
                    <div class="attr" >
                        <ul class="clearfix">
                            <li class="fl">
                                <div class="big-img"><img src="<?php echo $goodsList['original_img']; ?>" alt=""></div>
                                <div class="small-img">
                                    <?php if(is_array($goodsImgs) || $goodsImgs instanceof \think\Collection || $goodsImgs instanceof \think\Paginator): if( count($goodsImgs)==0 ) : echo "" ;else: foreach($goodsImgs as $k=>$vo): ?>
                                    <img src="<?php echo $vo['image_url']; ?>" alt="">

                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </li>
                            <li class="fr">
                                <h3> <?php echo $goodsList['goods_name']; ?></h3>
                                <p class="intro">应用范围：<?php echo $goodsList['applied_range']; ?>.</p>
                                <div class="attr-table" style="background-image: url('/template/pc/yingdongli/static/imgs/common/bg.png')">
                                    <div>
                                    <?php if(is_array($goodsAttrs) || $goodsAttrs instanceof \think\Collection || $goodsAttrs instanceof \think\Paginator): if( count($goodsAttrs)==0 ) : echo "" ;else: foreach($goodsAttrs as $k=>$vo): ?>
                                        <span><?php echo $vo['attr_name']; ?>：<?php echo $vo['attr_value']; ?></span>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                    <div>
                                        <span>产品系列：<?php echo $goodsList['series']; ?>系列</span>
                                        <span>产品型号：<?php echo $goodsList['goods_mode']; ?></span>
                                    </div>
                                        
                                    <!--</tr>-->
                                </div>
                                <div class="price clearfix">
                                    <p class="fl">交期：<?php echo $goodsList['product_cycle']; ?></p>
                                    <p class="fl">参考价格（含增值税）：￥ <i class="money"><?php echo $goodsList['min_price']; ?> - <?php echo $goodsList['max_price']; ?></i></p>
                                </div>
                                <div class="call clearfix">
                                    <span class="btn fl"><a href="#">0755-88889999</a></span>
                                    <span class="btn fl"><a href="#">联系客服</a></span>

                                </div>
                                <p class="tip">提示：如果未找到您核实的产品，请联系客服，批量下单更优惠！</p>
                            </li>
                        </ul>
                    </div>
                    <div class="nav clearfix">
                        <p class="pre fl"><a href="<?php echo U('product/detail', ['goods_id' => $preGoods['goods_id']]); ?>"><i class="fa fa-angle-left" style=""></i>上一产品：<?php echo $preGoods['goods_name']; ?></a></p>
                        <p class="next fr"><a href="<?php echo U('product/detail', ['goods_id' => $nextGoods['goods_id']]); ?>">下一产品：<?php echo $nextGoods['goods_name']; ?><a href=""><i class="fa fa-angle-right" style=""></i></a></p>
                    </div>
                </div>
            </div>
            <div class="img-box">
                <div class="nav clearfix">
                    <span  class="btn active fl">产品详情</span>
                    <span  class="btn fl">使用手册</span>
                </div>
                <div class="box on">
                <?php if(is_array($goodsImgs) || $goodsImgs instanceof \think\Collection || $goodsImgs instanceof \think\Paginator): if( count($goodsImgs)==0 ) : echo "" ;else: foreach($goodsImgs as $k=>$vo): ?>
                    <img src="<?php echo $vo['image_url']; ?>" alt="">
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!-- <img src="imgs/product/p1.png" alt="">
                <img src="imgs/product/p5.png" alt="">
                <img src="imgs/product/p1.png" alt=""> -->
                </div>
                <div  class="box info">
                    <?php echo $goodsList['goods_content']; ?>
                </div>
            </div>
            
        </div>
        <!-- 左侧菜单 -->
        <div class="left fl">
<!---->
            <!--产品导航 s-->
            <div class="product-box" id="product-box">
    <div class="title">产品导航</div>
    <ul>
        <?php if(is_array($cat_list) || $cat_list instanceof \think\Collection || $cat_list instanceof \think\Paginator): if( count($cat_list)==0 ) : echo "" ;else: foreach($cat_list as $k=>$vo): if($vo['parent_id'] == 0): ?>
                <li><i class="fa fa-caret-right"></i> <?php echo $vo['name']; ?></li>
                <?php else: continue; endif; ?>
            <dt>
                <?php if(is_array($cat_list) || $cat_list instanceof \think\Collection || $cat_list instanceof \think\Paginator): if( count($cat_list)==0 ) : echo "" ;else: foreach($cat_list as $k1=>$vo1): if($vo['id'] == $vo1['parent_id']): ?>
                        <dl data-id="<?php echo $vo1['id']; ?>"><a href="<?php echo U('home/Product/index', ['cat_id'=>$vo1['id']]); ?>" ><i class="fa fa-caret-right"></i><?php echo $vo1['name']; ?></a></dl>
                        <?php else: continue; endif; endforeach; endif; else: echo "" ;endif; ?>
            </dt>
        <?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
    <div class="more"><a href="">查看更多 > ></a> </div>
</div>

<script>
    //产品导航的切换
    $(function(){
        // $('#product-box ul li:first-child i').attr('class', 'fa fa-caret-down');
        // $('#product-box ul li:first-child').next().css({"display":"block" , "color":"blue"});
        // $('#product-box ul li:first-child').next().children('dl').children('a').children('i').attr('class', 'fa fa-caret-down');
        $('#product-box ul li').click(function(){
            $('#product-box ul li i').attr('class', 'fa fa-caret-right');
            $('#product-box ul li').next().css('display', 'none');
            var n = $(this).index();
            console.log(n);
            console.log( $('#product-box ul li:nth-child(n) i'));
            $(this).children('i').attr('class', 'fa fa-caret-down');
            $(this).next().css({"display":"block" , "color":"blue"});
            $(this).next().children('i').attr('class', 'fa fa-caret-down');
        });
    })
</script>
<script>
    $(document).ready(function(){
        var oBannerTop = $('#myCarousel').offset().top;
        var h = $(window).scrollTop();
        $(window).scroll(function(){
            sTop = $(this).scrollTop();
            sWithd = $(this).width();
            // console.log('width'+sWithd);
            // console.log(sTop);
            // console.log(oBannerTop);
            if(sWithd <= 420){
                if(sTop >= oBannerTop){
                    $("#header-box").css({"position":"fixed","top":"0"});
                }else{
                    $("#header-box").css({"position":"static"});
                }
            }

        });
    });
</script>

            <!--产品导航 e-->
            <!-- 电话图片 -->
            <img class="img" src="/template/pc/yingdongli/static/imgs/common/num.png">
            <!-- 推荐 start-->
            <div class="product-box recommend">
                <div class="title"><i class="fa fa-list-ul"></i><span>推荐产品</span></div>
                <?php if(is_array($recomGoodsList) || $recomGoodsList instanceof \think\Collection || $recomGoodsList instanceof \think\Paginator): if( count($recomGoodsList)==0 ) : echo "" ;else: foreach($recomGoodsList as $k=>$vo): ?>
                <div class="prdct">
                    <a href="<?php echo U('product/detail', ['goods_id' => $vo['goods_id']]); ?>">
                    <img src="<?php echo $vo['original_img']; ?>" alt="" style="width:232px; height: 182px;">
                    <p><?php echo $vo['goods_name']; ?></p>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
            <!-- 推荐-end -->
            <!-- 相关文章 start-->
            <div class="product-box recommend">
                <div class="title"><i class="fa fa-list-ul"></i><span>相关文章</span></div>
                <div class="article clearfix">
                    <img src="/template/pc/yingdongli/static/imgs/news/news1.png" alt="" class="fl">
                    <div class="intro fl">
                        <h3>我国低压变频器器市场在...</h3>
                        <p class="content">作为国家高新技术企业，我司专注于电气传动...</p>
                    </div>
                </div>
                <div class="article clearfix">
                    <img src="/template/pc/yingdongli/static/imgs/news/news1.png" alt="" class="fl">
                    <div class="intro fl">
                        <h3>我国低压变频器器市场在...</h3>
                        <p class="content">作为国家高新技术企业，我司专注于电气传动...</p>
                    </div>
                </div>
                <div class="article clearfix">
                    <img src="/template/pc/yingdongli/static/imgs/news/news1.png" alt="" class="fl">
                    <div class="intro fl">
                        <h3>我国低压变频器器市场在...</h3>
                        <p class="content">作为国家高新技术企业，我司专注于电气传动...</p>
                    </div>
                </div>
            </div>
            <!-- 相关文章 end-->

        </div>
    </div>
</div>
<!-- 底部 footer -->
<!-- 底部 footer -->
<div class="foot">
    <div class="top wrap">
        <div class="nav">
            <a href="">首页</a>
            <a href="">变频器</a>
            <a href="">变频柜</a>
            <a href="">产品服务中心</a>
            <a href="">公司案例</a>
            <a href="">购买收购指南</a>
            <a href="">关于我们</a>
            <a href="">网站指南</a>
        </div>
    </div>
    <div class="mid wrap clearfix">
        <div class="left">
            <div class="logo">
                <img src="/template/pc/yingdongli/static/imgs/logo/logo1.png" alt="">
            </div>
            <div class="qrcode">
                <img src="/template/pc/yingdongli/static/imgs/logo/qrcode.png" alt="">
                <img src="/template/pc/yingdongli/static/imgs/logo/qrcode.png" alt="">
            </div>
        </div>
        <div class="middle">
            <p>深圳市泰克天锐科技有限公司</p>
            <p>公司地址：广东省深圳市龙岗区佛山街道128号C栋3楼</p>
            <p>联系电话：0755-88889999</p>
            <p>联系人：彭先生</p>
        </div>
        <div class="right">
            <p>分公司：</p>
            <p>
                <a href="">沈阳分部</a>
                <a href="">佛山分部</a>
                <a href="">宁波分部 </a>
                <a href="">苏州分部</a>
                <a href="">东莞分部</a>
                <a href="">越南分部</a>
            </p>

        </div>
    </div>
    <div class="bottom wrap">
        Copyright © 2017 深圳市泰克天锐科技有限公司. All Rights Reserved      浙ICP备20170101号.
    </div>
</div>
</body>

<script>
    oNav = $('.product .service .img-box .nav span');
    oBox = $('.product .service .img-box .box ');
    console.log(oNav);
    oNav.click(function(){
        console.log($(this).index());
        var n = $(this).index();
        oNav.removeClass('active');
        oBox.removeClass('on');
        $(this).addClass('active');
        oBox.eq(n).addClass('on');
    });

</script>