<?php

use NathanCox\HasOneAutocompleteField\Forms\HasOneAutocompleteField;
use SilverCommerce\CatalogueAdmin\Model\CatalogueProduct;

class Product extends CatalogueProduct 
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
