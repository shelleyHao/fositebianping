<?php
/**
 * Created by PhpStorm.
 * User: HaoYL
 * Date: 2019/6/10
 * Time: 10:25
 */
use think\Db;
class GoodsLogic{
    public static function all_attrs(){
        $goods_ids = DB::name('goods_attr')->field('goods_id')->group('goods_id')->select();
        //ids 保存所有商品的goods_id
        $ids = [];
        foreach($goods_ids as $k => $v){
            $ids[] = $v['goods_id'];
        }
        $attrs = DB::query('select a.attr_id, a.attr_name, a.type_id, t.name, g.attr_value, g.goods_id from tp_goods_attribute a join tp_goods_type t join tp_goods_attr g on a.type_id = t.id and a.attr_id = g.attr_id');
        $goods_attr = [];
        foreach($ids as $k){
            foreach($attrs as $attr){
                if($attr['goods_id'] == $k){
                    $goods_attr[$k][]=$attr;
                }
            }
        }
    }
    public static function productList($cat_id = 0){
        $cat_id = input('get.cat_id');
//       dump(input('get.cat_id'));
        if($cat_id > 0){
            $list =  Db::name('goods')->where('cat_id',$cat_id)->paginate(3);
        }else{
            $list = Db::name('goods')->paginate(3);
        }
        return $list;
    }
}