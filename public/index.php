<?php 

//asosiy rootni public/ inedxga togrilb qoyish kerak apachi toki nginx confdan
//echo "Request URL = " . $_SERVER["QUERY_STRING"];
/*
*Routing
*/
require "../core/router.php";
$router=new Router();
echo get_class($router);
// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
    
// Display the routing table
// echo '<pre>';
// var_dump($router->getRoutes());
// echo '</pre>';




// Match the requested route
$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found for URL '$url'";
}
?>

<!-- 수고했습니다 민성씨 -->