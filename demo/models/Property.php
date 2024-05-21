<?php
class Property
{
    private $id;
    private $title;
    private $author;
    private $area;
    private $price;
    private $image;

    public function __construct($id, $title, $author, $area, $price, $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->area = $area;
        $this->price = $price;
        $this->image = $image;
    }

    public static function getAllProperties()
    {
        // Fetch all properties from the database and return an array of Property objects
        // This is where you would implement the database connection and query
        $properties = array(
            new Property(1, 'Property 1', 'Author 1', 100, 1000000, 'image/property1.jpg'),
            new Property(2, 'Property 2', 'Author 2', 150, 1500000, 'image/property2.jpg'),
            new Property(3, 'Property 3', 'Author 3', 200, 2000000, 'image/property3.jpg')
        );
        return $properties;
    }

    public static function getPropertyById($id)
    {
        // Fetch the property with the given ID from the database and return a Property object
        // This is where you would implement the database connection and query
        $properties = self::getAllProperties();
        foreach ($properties as $property) {
            if ($property->id == $id) {
                return $property;
            }
        }
        return null;
    }

    // Getters and setters for the properties
    // ...
}