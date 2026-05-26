<?php
namespace App\Controller;

class HelloController extends AppController
{
    public function index()
    {
        $this->set('message', 'Hello Gaurav from CakePHP 🚀');
    }

    public function Greet()
    {
        $this->set('message', 'Hello Gaurav 👋');
    }

    public function form()
    {
        if ($this->request->is('post')){
            $name = $this->request->getData('username');
            if (empty($name)){
                $this->set('error', 'Name is required');
            }else{
                $this->set('message', "Hello $name 👋");
            }
        }
    }
}