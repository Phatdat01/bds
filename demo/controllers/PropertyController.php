<?php
require_once 'models/Property.php';
require_once 'views/property.php';

class PropertyController
{
    public function showProperty($id)
    {
        $property = Property::getPropertyById($id);
        require 'views/includes/header.php';
        require 'views/property.php';
        require 'views/includes/footer.php';
    }
}