<?php 

$router->get('www/php4beginners','controllers/index.php');
$router->get('www/php4beginners/home','controllers/index.php');
$router->get('www/php4beginners/about','controllers/about.php');
$router->get('www/php4beginners/about/culture','controllers/about-culture.php');
$router->get('www/php4beginners/contact','controllers/contact.php');
$router->post('www/php4beginners/names','controllers/add-name.php');
