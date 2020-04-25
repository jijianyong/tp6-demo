<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index(){
        $title = '商城';
        $login = '欧阳克';
        $left = [
            [
                'title' => '商品管理',
                'lists' => [
                    [
                        'id' => 1,
                        'title' => '商品列表',
                    ],
                    [
                        'id' => 2,
                        'title' => '商品分类',
                    ]
                ]
            ],
            [
                'title' => '用户管理',
                'lists' => [
                    [
                        'id' => 3,
                        'title' => '用户列表',
                    ],
                    [
                        'id' => 4,
                        'title' => '购物车',
                    ],
                    [
                        'id' => 5,
                        'title' => '用户地址',
                    ],
                    [
                        'id' => 6,
                        'title' => '订单管理',
                    ]
                ]
            ],
            [
                'title' => '后台管理',
                'lists' => [
                    [
                        'id' => 7,
                        'title' => '管理员列表',
                    ],
                    [
                        'id' => 8,
                        'title' => '个人中心',
                    ],
                    [
                        'id' => 9,
                        'title' => '左侧菜单列',
                    ]
                ]
            ]
        ];
        $right = [
            [
                'id' => 1,
                'title' => '熙世界2019秋冬新款长袖杏色上衣连帽宽松刺绣文艺落肩袖加厚卫衣BF风',
                'cat' => '女装',
                'price' => 189,
                // 'discount' => 6,
                // 'status' => 1,
                'status' => '开启',
                'add_time' => '2019-12-12',
                // 'add_time' => '1576080000'
            ],
            [
                'id' => 2,
                'title' => '秋水伊人双面呢冬装2019年新款女装气质西装领撞色羊毛大衣外套女',
                'cat' => '女装',
                'price' => 699,
                // 'discount' => 7,
                // 'status' => 1,
                'status' => '开启',
                'add_time' => '2019-12-12',
                // 'add_time' => '1576080000'
            ],
            [
                'id' => 3,
                'title' => '微弹中高腰直脚牛仔裤男',
                'cat' => '男装',
                'price' => 179,
                // 'discount' => 8,
                // 'status' => 2,
                'status' => '关闭',
                'add_time' => '2019-12-12',
                // 'add_time' => '1576080000'
            ],
            [
                'id' => 4,
                'title' => '男士长袖t恤秋季圆领黑白体恤T 纯色上衣服打底衫',
                'cat' => '男装',
                'price' => 99,
                // 'discount' => 9,
                // 'status' => 1,
                'status' => '开启',
                'add_time' => '2019-12-12',
                // 'add_time' => '1576080000'
            ],
        ];
        View::assign([
            'title'  => $title,
            'login' => $login,
            'left' => $left,
            'right' => $right
        ]);
        return View::fetch();
    }
}
