<?php
namespace app\contractor\controller;
use think\Controller;
//use think\db;
class Adduserdetail extends Controller
{
    public function index()
    {
        
        return $this->fetch('adduserdetail');
    }
}
