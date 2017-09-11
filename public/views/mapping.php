<?php
$page = filter_input(INPUT_GET, 'page');
switch ($page) {
    case 'home':
        include('views/pages/home.php');
        break;
    case 'honden':
        include('views/pages/honden.php');
        break;
    default:
        include('views/pages/home.php');
        break;
}
?>