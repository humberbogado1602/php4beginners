<?php 

//nueva notacion, indica clase-método, muy similar a laravel
$router->get('www/php4beginners','PagesController@home');
$router->get('www/php4beginners/home','PagesController@home');
$router->get('www/php4beginners/about','PagesController@about');
$router->get('www/php4beginners/contact','PagesController@contact');

$router->get('www/php4beginners/users','UsersController@index');
$router->post('www/php4beginners/users','UsersController@store');
