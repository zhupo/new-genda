<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Cases extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'default';

    public function index()
    {
        return $this->view->fetch();
    }

}
