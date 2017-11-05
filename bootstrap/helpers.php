<?php
/**
 * Created by PhpStorm.
 * User: happykitty
 * Date: 2017/11/5
 * Time: 21:45
 */

function route_class(){
    return str_replace('.','-',Route::currentRouteName());
}