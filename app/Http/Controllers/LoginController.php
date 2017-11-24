<?php
/**
 * Created by PhpStorm.
 * User: boser
 * Date: 2017/5/11
 * Time: 10:25
 */
namespace App\Http\Controllers;
use App\Member;

class LoginController extends Controller{
    public function login(){
        echo Member::getInfo();die;
        return 'login controller login action';
    }

    public function showAny(){
        $mem_ins = new Member();
        echo $mem_ins->showAny();
    }
}