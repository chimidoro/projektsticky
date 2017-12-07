<?php
include('db.php');

require_once("controllers/controller.php");
$controllers = new Controller();
$controllers->invoke();
?>