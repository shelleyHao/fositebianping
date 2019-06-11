<?php

namespace app\home\controller;

use think\Controller;
use think\Db;
use think\Request;
use app\home\logic\NewsCatLogic;

class News extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //推荐文章
        $recom_articles = $this->recommed(5);
        $this->assign('recomArticles', $recom_articles);
        //新闻分类
        $news_cat =  new NewsCatLogic();
        $news_cat_list = $news_cat->news_cat_list();
        $this->assign('newsCatList',$news_cat_list );
        foreach($news_cat_list as $k => $v){
            $cat_ids[]=$v['cat_id'];
            $news_list = DB::name('news')->where('cat_id', $v['cat_id'])->order('publish_time desc')->limit(5)->select();
            $news_cat_list[$k]['list']=$news_list;
        }
        $news_list = $news_cat_list;
        $this->assign('newsList', $news_list);
        // 热门阅读
        $hot_articles = $this->hot();
        $this->assign('hotArticles', $hot_articles);
        return $this->fetch();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function newsList(){
        $data = input();
        $cat_id = $data['cat_id'];
        $news_cat =  new NewsCatLogic();
        $news_cat_list = $news_cat->news_cat_list();
        $this->assign('newsCatList', $news_cat_list);
        if($cat_id > 0){
            $news_list = DB::name('news')->where('cat_id', $cat_id)->order('publish_time desc')->paginate(5);
        }else{
            $news_list = DB::name('news')->order('publish_time desc')->paginate(5);
        }
        $data['lab'] = isset($data['lab']) ? $data['lab'] : -1;
            $this->assign('lab', $data['lab']);

        $this->assign('newsList', $news_list);
        $page = $news_list->render();
        $this->assign('page', $page);
        return $this->fetch('list');
    }
    public function detail(){
        $article_id = input('get.article_id');
        //更新点击量
        $click = Db::name('news')->field('click')->where('article_id', $article_id)->find();
        $click['click'] += 1;
        Db::name('news')->where('article_id', $article_id)->update(['click'=>$click['click']]);
        //获取文章
        $article = Db::name('news')->where('article_id', $article_id)->find();
        $this->assign('article', $article);
        //上一条
        $pr_article = $this->pre($article_id);
        $this->assign('preArticle', $pr_article);
        //下一条
        $next_article = $this->next($article_id);
        $this->assign('nextArticle', $next_article);
        //推荐新闻
        $recom_articles = $this->recommed(10);
        $this->assign('recomArticles', $recom_articles);
        //同类文章排行
        $cat_id = Db::name('news')->field('cat_id')->where('article_id', $article_id)->find();
        $comm_cat_articles = $this->top($cat_id['cat_id']);
        $this->assign('commCatArticles', $comm_cat_articles);
        //最新
        $latest_articles = $this->latest();
        $this->assign('latestArticles', $latest_articles);
        return $this->fetch();
    }
    /*
    * 获取上一篇新闻文章
    *
    * */
    public function pre($article_id){
        $cat_id = Db::name('news')->field('cat_id')->where('article_id', $article_id)->find();
        $article = Db::name('news')->where('article_id', '<', $article_id)->where('cat_id', $cat_id['cat_id'])->order('article_id desc')->find();
        return $article;
    }
    /*
    * 获取下一篇新闻文章
    *
    * */
    public function next($article_id){
        $cat_id = Db::name('news')->field('cat_id')->where('article_id', $article_id)->find();
        $article = Db::name('news')->where('article_id', '>', $article_id)->where('cat_id', $cat_id['cat_id'])->find();
        return $article;
    }
    /*
     * 获取推荐新闻文章
     *
     * */
    public function recommed($limit){
        $articles = Db::name('news')->where('tags', 'like', '%2%')->order('publish_time desc')->limit($limit)->select();
        return $articles;
    }
    /*
  * 同类文章排行
  *
  * */
    public function top($cat_id){
        $articles = Db::name('news')->where('cat_id', $cat_id)->order('click desc')->limit(10)->select();
        return $articles;
    }
    /*
    * 最新产品新闻
    *
    * */
    public function latest(){
        $articles = Db::name('news')->where('tags', 'like', '0%')->order('publish_time desc')->limit(5)->select();
        return $articles;
    }
    /*
    * 热门新闻
    *
    * */
    public function hot(){
       $articles = DB::name('news')->where('tags', 'like', '%1%')->order('click desc')->limit(10)->select();
       return $articles;
    }
}
