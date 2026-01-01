<?php
require_once "../core/Controller.php";
require_once "../core/Model.php";

require_once "../app/controller/DashboardController.php";

$controller = new DashboardController();
$controller->index();
