<?php

session_start();

require_once('config.php');

require_once('functions/url.php');
require_once('functions/message.php');
require_once('functions/auth.php');
require_once('functions/database.php');

$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';port=' . DB_PORT;
$pdo = new PDO($dsn, DB_USER, DB_PASS);



if (empty($_GET['route'])) {
    $page = 'home';
} else {
    $page = $_GET["route"];
}


if (!empty($_GET['area']) && $_GET['area'] == 'admin') {
    $layout_folder = 'backoffice';
} else {
    $layout_folder = 'frontoffice';
}


switch ($page) {
    case 'authenticate':
        require_once('controllers/authenticate.php');
        break;

    case 'logout':
        require_once('controllers/logout.php');
        break;

    default:
        break;
}

if (!empty($_GET['area']) && $_GET['area'] == 'admin' && !is_authenticated() && $page != 'login') {
    set_flash_message('Acesso negado: Faça login para ter acesso a esta página');
    url_redirect(['route' => 'login']);
}


$page_template = 'templates/' . $layout_folder . '/page_' . $page . '.php';


require_once 'templates/' . $layout_folder . '/head.php';


if (file_exists($page_template)) {
    require_once $page_template;
} else {

    require_once 'templates/' . $layout_folder . '/page_not_found.php';
}

require_once 'templates/' . $layout_folder . '/foot.php';
