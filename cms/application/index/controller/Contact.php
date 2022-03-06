<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Contact extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'default';

    public function index()
    {
        return $this->view->fetch();
    }

}
