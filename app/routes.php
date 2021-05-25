<?php

/**
 * key = url
 * val = controller and function
 */
return [
    '/' => 'HomeController@index',
    '/home' => 'HomeController@index',
    '/product/{id}/{type?}/{cat?}' => 'HomeController@product',
    '/contact/{id}' => 'HomeController@contact',
    '/phpMethod' => 'HomeController@phpMethod'
];
