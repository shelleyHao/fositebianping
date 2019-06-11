<?php
return	array(	
	'index'=>array('name'=>'首页','child'=>array(
			array('name' => '概览','child' => array(
					array('name' => '模板设置', 'act'=>'index', 'op'=>'index'),
			)),
	)),

	'system'=>array('name'=>'设置','child'=>array(
				array('name' => '系统','child' => array(
						array('name'=>'系统设置','act'=>'index','op'=>'System'),
						array('name'=>'城市设置','act'=>'region','op'=>'Tools'),
						array('name'=>'友情链接','act'=>'linkList','op'=>'Article'),
						array('name'=>'清除缓存','act'=>'cleanCache','op'=>'System'),
				)),

			array('name' => '权限','child'=>array(
						array('name' => '管理员列表', 'act'=>'index', 'op'=>'Admin'),
						array('name' => '角色管理', 'act'=>'role', 'op'=>'Admin'),
						array('name'=>'权限资源列表','act'=>'right_list','op'=>'System'),
						array('name' => '管理员日志', 'act'=>'log', 'op'=>'Admin'),
//						array('name' => '供应商列表', 'act'=>'supplier', 'op'=>'Admin'),
				)),
			
				array('name' => '数据','child'=>array(
						array('name' => '数据备份', 'act'=>'index', 'op'=>'Tools'),
						array('name' => '数据还原', 'act'=>'restore', 'op'=>'Tools'),
                        array('name' => '清空测试数据', 'act'=>'clear_demo_data', 'op'=>'Tools'),
				)),

	)),
		
	'decorate'=>array('name'=>'界面','child'=>array(
		array('name' => '界面','child'=>array(
            array('name'=>'PC端导航栏','act'=>'navigationList','op'=>'System'),
            array('name' => '模板切换', 'act'=>'change', 'op'=>'Template')

		))
	)),


	'shop'=>array('name'=>'商城','child'=>array(
				array('name' => '商品','child' => array(
				    array('name' => '商品列表', 'act'=>'goodsList', 'op'=>'Goods'),
					array('name' => '商品分类', 'act'=>'categoryList', 'op'=>'Goods'),
					array('name' => '库存管理', 'act'=>'stockList', 'op'=>'Goods'),
					array('name' => '商品模型', 'act'=>'type_list', 'op'=>'Goods'),
					array('name' => '品牌列表', 'act'=>'brandList', 'op'=>'Goods'),
					array('name' => '评论列表', 'act'=>'index', 'op'=>'Comment'),
					array('name' => '商品咨询', 'act'=>'ask_list', 'op'=>'Comment'),
			)),
//			array('name' => '订单','child'=>array(
//					array('name' => '订单列表', 'act'=>'index', 'op'=>'Order'),
//					array('name' => '虚拟订单', 'act'=>'virtual_list', 'op'=>'Order'),
//					array('name' => '发货单', 'act'=>'delivery_list', 'op'=>'Order'),
//					array('name' => '退款单', 'act'=>'refund_order_list', 'op'=>'Order'),
//					array('name' => '退换货', 'act'=>'return_list', 'op'=>'Order'),
//					array('name' => '添加订单', 'act'=>'add_order', 'op'=>'Order'),
//					array('name' => '订单日志','act'=>'order_log','op'=>'Order'),
//					array('name' => '发票管理','act'=>'index', 'op'=>'Invoice'),
//			        array('name' => '拼团列表','act'=>'team_list','op'=>'Team'),
//			        array('name' => '拼团订单','act'=>'order_list','op'=>'Team'),
//			        array('name' => '上门自提','act'=>'index','op'=>'ShopOrder'),
//			)),

			array('name' => '广告','child' => array(
					array('name'=>'广告列表','act'=>'adList','op'=>'Ad'),
					array('name'=>'广告位置','act'=>'positionList','op'=>'Ad'),
			)),

			array('name' => '文章','child'=>array(
					array('name' => '文章列表', 'act'=>'articleList', 'op'=>'Article'),
					array('name' => '文章分类', 'act'=>'categoryList', 'op'=>'Article'),
					array('name' => '帮助管理', 'act'=>'help_list', 'op'=>'Article'),
					array('name'=>'友情链接','act'=>'linkList','op'=>'Article'),
					array('name' => '会员协议', 'act'=>'agreement', 'op'=>'Article'),
					array('name' => '公告管理', 'act'=>'notice_list', 'op'=>'Article'),
					array('name' => '专题列表', 'act'=>'topicList', 'op'=>'Topic'),
			)),

			array('name' => '新闻','child'=>array(
					array('name' => '新闻列表', 'act'=>'newsList', 'op'=>'News'),
					array('name' => '新闻分类', 'act'=>'categoryList', 'op'=>'News'),
			)),
	))
);