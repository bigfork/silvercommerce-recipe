<?php

use SilverCommerce\CatalogueAdmin\Model\CatalogueCategory;

class Category extends CatalogueCategory 
{
    
    private static $db = [];


    private static $has_one = [
        "HomePage" => HomePage::class
    ];    

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        return $fields;
    }
}

