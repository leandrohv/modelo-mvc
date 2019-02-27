<?php

require_once "vendor/autoload.php";

use App\Controller\IndexController;

$view = new IndexController();
$view->loadingView();