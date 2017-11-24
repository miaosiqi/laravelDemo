<?php
/**
 * 活动中间件
 * Created by PhpStorm.
 * User: boser
 * Date: 2017/5/14
 * Time: 10:23
 */
namespace App\Http\Middleware;
use Closure;
class Activity{
    public function handle($request, Closure $next){
        if(time() > strtotime('2017-05-13')){
            return redirect('Student/act0');
        }else{
            return $next($request);
        }
    }
}