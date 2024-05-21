<?php
require_once 'models/Property.php';
require_once 'views/home.php';

class HomeController
{
    public function showHomePage()
    {
        $properties = Property::getAllProperties();
        require 'views/includes/header.php';
        require 'views/home.php';
        require 'views/includes/footer.php';
    }
}