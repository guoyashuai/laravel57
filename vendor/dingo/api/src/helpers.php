<?php


if (! function_exists('version')) {
    /**
     * Set the version to generate API URLs to.
     *
     * @param string $version
     *
     * @return \Dingo\Api\Routing\UrlGenerator
     */
    function version($version)
    {
        return app('api.url')->version($version);
    }


    /**
     * dingo添加路由
     */
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

}
