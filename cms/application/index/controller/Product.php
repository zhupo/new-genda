<?php

namespace app\index\controller;

use app\admin\model\Product as ProductModel;
use app\common\controller\Frontend;

class Product extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'default';

    public function index()
    {
        $products = ProductModel::where('status',  30)
            ->field('id,image,description')
            ->select();
        $a = 'test123';
        $test2 = [
            [
                'id' => 1,
                'image' => '__CDN__/assets/img/genda/202112211435107997.jpeg'
            ]
        ];
//        var_dump($products[0]['image']);die;
        $this->view->assign('products', $products);
        $this->view->assign('testData', $a);
        $this->view->assign('testList', $test2);
        return $this->view->fetch();
    }

}
