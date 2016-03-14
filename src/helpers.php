<?php

use Illuminate\Container\Container;

/**
 * Get the evaluated view contents for the given view.
 *
 * @param  string  $view
 * @param  array   $data
 * @param  array   $mergeData
 * @return \Illuminate\View\View
 */
function view($view = null, $data = [], $mergeData = [])
{
    $factory = app('view');

    if (func_num_args() === 0) {
        return $factory;
    }

    return $factory->make($view, $data, $mergeData);
}


/**
 * Get the available container instance.
 *
 * @param  string  $make
 * @param  array   $parameters
 * @return mixed|\Illuminate\Foundation\Application
 */
function app($make=null,$parameters=[])
{
    if (is_null($make)) {
        return Container::getInstance();
    }

    return Container::getInstance()->make($make, $parameters);
}


/**
 * Retrieve an old input item.
 *
 * @param  string  $key
 * @param  mixed   $default
 * @return mixed
 */
function old($key = null, $default = null)
{
    return app('request')->old($key, $default);
}


function route($routeName)
{
    return 'index.php?view='.$routeName;
}

function public_path($path)
{
    return realpath(FCPATH.'.'.$path);
}

function asset($url)
{
    return base_url($url);
}
