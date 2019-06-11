<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"./template/pc/yingdongli/news\index.html";i:1560195295;s:59:"F:\fositebianping\template\pc\yingdongli\public\header.html";i:1560195647;s:59:"F:\fositebianping\template\pc\yingdongli\public\footer.html";i:1559701309;}*/ ?>
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

<div class="news-box wrap minwidth clearfix">
    <div class="content fl">
        <div class="recommend clearfix">
            <img class="fl" src="/template/pc/yingdongli/static/imgs/news/intro.png" alt="">
            <div class="fl rec">
                <h3 id="comm-title"><i class="fa fa-list-ul"></i>推荐文章</h3>
                <ul>
                    <?php if(is_array($recomArticles) || $recomArticles instanceof \think\Collection || $recomArticles instanceof \think\Paginator): if( count($recomArticles)==0 ) : echo "" ;else: foreach($recomArticles as $k=>$vo): ?>
                    <li><?php echo $vo['title']; ?><span>【<?php echo date('Y-m-d', $vo['publish_time']); ?>】</span></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--<li>我国低压变频器器市场在未来行业增长趋势十分强劲 <span>【2019-09-09】</span></li>-->
                    <!--<li>我国低压变频器器市场在未来行业增长趋势十分强劲 <span>【2019-09-09】</span></li>-->
                    <!--<li>我国低压变频器器市场在未来行业增长趋势十分强劲 <span>【2019-09-09】</span></li>-->
                    <!--<li>我国低压变频器器市场在未来行业增长趋势十分强劲 <span>【2019-09-09】</span></li>               -->
                </ul>
            </div>
        </div>
        <div class="ad"><img src="/template/pc/yingdongli/static/imgs/ad/ad6.png" alt=""></div>
        <div class="topic-box">
            <?php if(is_array($newsList) || $newsList instanceof \think\Collection || $newsList instanceof \think\Paginator): if( count($newsList)==0 ) : echo "" ;else: foreach($newsList as $k=>$vo): ?>
                <div class="box fl">
                    <div class="clearfix ">
                        <div id="comm-title" class="fl"><i class="fa fa-list-ul"></i><?php echo $vo['cat_name']; ?></div>
                        <div class="fr more"><a href="<?php echo U('home/news/newsList',['cat_id'=>$vo['cat_id']]); ?>">更多>></a></div>
                    </div>
                    <ul>
                        <?php if(is_array($vo['list']) || $vo['list'] instanceof \think\Collection || $vo['list'] instanceof \think\Paginator): if( count($vo['list'])==0 ) : echo "" ;else: foreach($vo['list'] as $k1=>$vo1): ?>
                            <li><?php echo $vo1['title']; ?></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<li>我国低压变频器器市场在未来行业增长趋势我国低压变频器器市场在未来行业增长趋势....</li>-->

                    </ul>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
        <div class="ad"> <img src="/template/pc/yingdongli/static/imgs/ad/ad6.png" alt=""> </div>
        <!-- <div class="ad  1"><img src="/template/pc/yingdongli/static/imgs/ad/ad6.png" alt=""></div> -->
    </div>
    <div class="menu fr">
        <div class="tag">
            <div id="comm-title"><i class="fa fa-list-ul"></i><span>热门标签</span></div>
            <div class="tags">
                <span>君耀电子</span>
                <span>电子</span>
                <span>电子</span>
                <span>美国约翰逊</span>
                <span>电容</span>
                <span>君耀电子</span>
                <span>君耀电子</span>
                <span>美国约翰逊</span>
                <span>电子</span>
                <span>君耀电子</span>
                <span>君耀电</span>
                <span>君耀电子</span>
            </div>
        </div>
        <div class="reading tag">
            <div id="comm-title"><i class="fa fa-list-ul"></i><span>热门阅读</span></div>
            <ul>
                <?php if(is_array($hotArticles) || $hotArticles instanceof \think\Collection || $hotArticles instanceof \think\Paginator): if( count($hotArticles)==0 ) : echo "" ;else: foreach($hotArticles as $k=>$vo): ?>
                <li class="clearfix">
                    <a href="">
                        <p class="fl"><?php echo $vo['title']; ?></p>
                        <span class="fr"><?php echo date('Y-m-d', $vo['publish_time']); ?></span>
                    </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li class="clearfix">-->
                    <!--<p class="fl">我国低压变频器器市场.....</p> -->
                    <!--<span class="fr">05-22</span>-->
                <!--</li>-->
                <!--<li class="clearfix">-->
                    <!--<p class="fl">我国低压变频器器市场.....</p> -->
                    <!--<span class="fr">05-22</span>-->
                <!--</li>-->
            </ul>
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