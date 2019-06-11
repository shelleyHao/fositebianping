<?php
/**
 * Created by PhpStorm.
 * User: HaoYL
 * Date: 2019/6/3
 * Time: 17:29
 */
namespace app\home\controller;
use app\admin\logic\GoodsLogic;
use think\Page;
use think\Verify;
use think\Image;
use think\Db;
class Product extends Base {
    public function index(){
       $this->nav_cat_tree();
        $list = $this->productList();
        $goods_attrs = $this->all_attrs();
        $this->assign('goodsAttrs', $goods_attrs);
        $page = $list->render();
        $this->assign('goodsList', $list);
        $this->assign('page', $page);
//        dump($goods_attrs);
        return $this->fetch();
    }



    /*
     *商品详情
     * */
    public function detail(){
       $goods_id = input('get.goods_id');
       $this->nav_cat_tree();
       $goods_list = DB::name('goods')->where('goods_id', $goods_id)->find();
       $goods_imgs = DB::name('goods_images')->where('goods_id', $goods_id)->select();
       $goods_attrs= DB::table('tp_goods_attr')->join('tp_goods_attribute', 'tp_goods_attr.attr_id = tp_goods_attribute.attr_id')->where('tp_goods_attr.goods_id',$goods_id)->select();
       $this->assign('goodsList', $goods_list);
       $this->assign('goodsImgs', $goods_imgs);
       $this->assign('goodsAttrs', $goods_attrs);
       $pre_goods = $this->pre($goods_id);
       $next_goods = $this->next($goods_id);
       $this->assign('preGoods', $pre_goods);
       $this->assign('nextGoods', $next_goods);
       //推荐商品
        $recom_goods_list = $this->recommed();
        $this->assign('recomGoodsList', $recom_goods_list);
        //相关文章

        return $this->fetch();
    }
    /*
    * 获取上一个商品id和name
    * */
    public function pre($goods_id){
        $where = DB::name('goods')->field('cat_id, goods_type')->where('goods_id', $goods_id)->find();
        $pre_goods = DB::name('goods')->field('goods_id, goods_name')->where('goods_id','<', $goods_id)->where($where)->find();
        return $pre_goods;
    }
    /*
     * 获取下一个商品id和name
     * */
    public function next($goods_id){
        $where = DB::name('goods')->field('cat_id, goods_type')->where('goods_id', $goods_id)->find();
        $next_goods = DB::name('goods')->field('goods_id, goods_name')->where('goods_id','>', $goods_id)->where($where)->find();
        return $next_goods;
    }
    //推荐最新发布的产品前5个
    public function recommed(){
        $recom_goods_list = DB::name('goods')->field('goods_id, goods_name, original_img')->order('last_update desc')->limit(5)->select();
        return $recom_goods_list;
    }
//
}