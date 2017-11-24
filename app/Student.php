<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model{
    const BOY = 1;
    const GIRL = 0;
    const UNKNOWN = 2;
    protected $table = 'student';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $dateFormat  = 'id';
    protected $fillable = [
        'name',
        'age',
        'sex',
    ];
    protected function getDateFormat(){
        return time();
    }

    protected function asDateTime($value){
        return $value;
    }

    public function hdlSex($sex = null){
        $arr = [
            self::BOY => '男',
            self::GIRL => '女',
            self::UNKNOWN => '未知',
        ];
        if(null !== $sex){
            return array_key_exists($sex, $arr) ? $arr[$sex] : $arr[self::UNKNOWN];
        }else{
            return $arr;
        }
    }
}
