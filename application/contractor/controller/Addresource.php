<?php
namespace app\contractor\controller;
use think\Controller;
//use think\db;
class Addresource extends Controller
{
    public function index()
    {
        return $this->fetch('addresource');
    }
}
