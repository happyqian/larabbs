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

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}