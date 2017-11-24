<?php
/**
 * 成员模型
 * Created by PhpStorm.
 * User: boser
 * Date: 2017/5/11
 * Time: 11:23
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class Member extends Model{
    static public function getInfo(){
        return 'getInfo model';
    }

    public function showAny(){
        return 'show any model method';
    }
}