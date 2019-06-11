<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:39:"./template/pc/yingdongli/news\list.html";i:1560185674;s:59:"F:\fositebianping\template\pc\yingdongli\public\header.html";i:1560195647;s:59:"F:\fositebianping\template\pc\yingdongli\public\footer.html";i:1559701309;}*/ ?>
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

<div class="wrap minwidth clearfix news-list">
    
    <div class="menu fl">
        <div class="menu-box">
            <h3 id="comm-title"><i class="fa fa-list-ul"></i><span>新闻中心</span></h3>
            <ul class="link">
                <?php if(is_array($newsCatList) || $newsCatList instanceof \think\Collection || $newsCatList instanceof \think\Paginator): if( count($newsCatList)==0 ) : echo "" ;else: foreach($newsCatList as $k=>$vo): ?>
                <li class="<?php if($lab == $k): ?>active<?php endif; ?>" > <a href="<?php echo U('home/news/newsList', ['cat_id'=>$vo['cat_id'], 'lab'=>$k]); ?>"><i class="fa fa-caret-right"></i><span><?php echo $vo['cat_name']; ?></span></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li><a href=""><i class="fa fa-caret-right"></i><span>公司新闻</span></a></li>-->
                <!--<li><a href=""><i class="fa fa-caret-right"></i><span>产品百科</span></a></li>-->
            </ul>
        </div>
        <div class="img"><img src="/template/pc/yingdongli/static/imgs/common/num.png" alt=""></div>
        
    </div>
    <div class="content-box fr">
        <div class="nav"><i class="fa fa-home" style="margin-right: 5px"></i><a href="">硬动力</a> -> <a href="">新闻列表</a></div>
        <div class="list-box">
            <div id="comm-title" class="title"><i class="fa fa-list-ul"></i><span>新闻中心</span></div>
            <ul>
                <?php if(is_array($newsList) || $newsList instanceof \think\Collection || $newsList instanceof \think\Paginator): if( count($newsList)==0 ) : echo "" ;else: foreach($newsList as $k=>$vo): ?>
                    <li class="clearfix">
                        <a href="<?php echo U('home/news/detail',['article_id'=>$vo['article_id']]); ?>">
                        <img class="fl" src="<?php echo $vo['thumb']; ?>" alt="">
                        <div class="fl info">
                            <h3><?php echo $vo['title']; ?></h3>
                            <p><?php echo $vo['description']; ?></p>
                        </div>
                        <div class="date fr">
                        <?php echo date("Y-m-d",$vo['publish_time']); ?>
                        </div>
                        </a>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li class="clearfix">-->
                    <!--<img class="fl" src="imgs/news/news1.png" alt="">-->
                    <!--<div class="fl info">-->
                        <!--<h3>我国低压变频器器市场在未来行业增长趋势十分强劲</h3>-->
                        <!--<p>作为国家高新技术企业，我司专注于电气传动、工业控制领域，是极少数成功研制矢量型变频器器并实现产业化的内资变频器器企业，具有自主的技术研发能力、完备的生产制造能力和遍布全国的营销网络</p>-->
                    <!--</div>-->
                    <!--<div class="date fr">-->
                    <!--2019-09-10-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li class="clearfix">-->
                    <!--<img class="fl" src="imgs/news/news1.png" alt="">-->
                    <!--<div class="fl info">-->
                        <!--<h3>我国低压变频器器市场在未来行业增长趋势十分强劲</h3>-->
                        <!--<p>作为国家高新技术企业，我司专注于电气传动、工业控制领域，是极少数成功研制矢量型变频器器并实现产业化的内资变频器器企业，具有自主的技术研发能力、完备的生产制造能力和遍布全国的营销网络</p>-->
                    <!--</div>-->
                    <!--<div class="date fr">-->
                    <!--2019-09-10-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li class="clearfix">-->
                    <!--<img class="fl" src="imgs/news/news1.png" alt="">-->
                    <!--<div class="fl info">-->
                        <!--<h3>我国低压变频器器市场在未来行业增长趋势十分强劲</h3>-->
                        <!--<p>作为国家高新技术企业，我司专注于电气传动、工业控制领域，是极少数成功研制矢量型变频器器并实现产业化的内资变频器器企业，具有自主的技术研发能力、完备的生产制造能力和遍布全国的营销网络</p>-->
                    <!--</div>-->
                    <!--<div class="date fr">-->
                    <!--2019-09-10-->
                    <!--</div>-->
                <!--</li>-->

            </ul>
            <div class="page rel">
                <?php echo $page; ?>
            </div>
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
    $('.news-list .menu-box ul li:first-child').attr('class', 'active');
    var oLi = $('.news-list .menu-box ul li')
    oLi.click(function(){
        var n = $(this).index();
        oLi.removeClass('active');
        $(this).addClass('active');
        var cat_id = ($(this).attr('data_id');
        
    });
</script>