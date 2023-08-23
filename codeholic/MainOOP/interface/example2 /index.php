<?php 

require_once 'FileCache.php';
require_once 'Application.php';
require_once 'RadisCache.php';


$app = new Application(
    new RadisCache()
);


$HTML = "......";
$app->cache->set('home-page', $HTML);
$app->cache->get('homepage');
$app->cache->invalidate('homepage')

?>