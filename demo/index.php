<?php
// Load the necessary files
require_once 'controllers/HomeController.php';
require_once 'controllers/PropertyController.php';

// Determine the requested action and load the appropriate controller
if (isset($_GET['action']) && $_GET['action'] === 'property') {
    $controller = new PropertyController();
    $controller->showProperty($_GET['id']);
} else {
    $controller = new HomeController();
    $controller->showHomePage();
}