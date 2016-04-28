<?php
require_once('./Controller/SiteController.php');
require_once('./Controller/ArticleController.php');
// $url = 'http://localhost/index.php';
// $url = 'http://localhost/index.php?r=article/index&id=1000';
// $url = 'http://localhost/index.php?r=article/index&id=1';
// $url = 'http://localhost/index.php?r=site/index&p=1';
// $url = 'http://localhost/index.php?r=site/gender&type=2';
// $url = 'http://localhost/index.php?r=site/gender&type=1';
// $url = 'http://localhost/index.php?r=site/boys';
// $url = 'http://localhost/index.php?r=site/girls';

// 这块是路由处理
$url = $url ?? ''; //url 空缺时候的处理
$query = parse_url($url)['query'] ?? 'r=site/index'; // parse_url会将url分成会多块。其中query是?号后面的部分。这里当query缺省时，赋予默认值
parse_str($query, $_GET); // 可以将site/index&p=1变成dictionary的形式


$route = $_GET['r']; //默认路径处理
$routes = explode('/', $route); // 使用/来分割字符串

// 这样就获得controller的名称和action的名称
$controller_name = ucwords($routes[0]) . 'Controller';
$controller = new $controller_name;
$action_name = 'action' . ucwords($routes[1]);
$models = $controller->$action_name();