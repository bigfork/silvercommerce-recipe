<?php

use NathanCox\HasOneAutocompleteField\Forms\HasOneAutocompleteField;
use SilverCommerce\CatalogueAdmin\Model\CatalogueProduct;

class Product extends CatalogueProduct 
{

    private static $db = [];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        return $fields;
    }

}