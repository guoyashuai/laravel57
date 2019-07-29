<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019/1/18
 * Time: 14:01
 */

if(! function_exists('unit')) {
    function unit() {
        return 'unit helpers';
    }
}

if (! function_exists('api_route')) {
    /**
     * Generate the URL to a named route.
     *
     * @param  array|string  $name
     * @param  mixed  $parameters
     * @param  bool  $absolute
     * @return string
     */
    function api_route($name, $parameters = [], $version = 'v1', $absolute = true)
    {
        return version($version)->route($name, $parameters, $absolute);
    }
}