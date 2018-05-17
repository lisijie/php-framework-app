<?php
namespace App\Controller;

use Core\Controller;

class HomeController extends Controller
{

    public function init()
    {
        $this->setLayout('layout/layout');
        $this->setLayoutSection('header', 'layout/section/header');
    }

    public function welcomeAction()
    {
        $this->assign(array(
            'title' => '演示页面',
            'name' => 'world',
        ));

        return $this->render();
    }

}
