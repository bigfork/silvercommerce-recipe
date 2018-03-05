<?php

use NathanCox\HasOneAutocompleteField\Forms\HasOneAutocompleteField;
use SilverCommerce\CatalogueAdmin\Model\CatalogueProduct;

class Product extends CatalogueProduct {

    private static $db = [];

    private static $has_one = [
        "Page" => Page::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab(
            "Root.Main",
            HasOneAutocompleteField::create(
                "PageID",
                "Page",
                Page::class
            )->setSearchFields([
                "Title",
                "MenuTitle",
                "URLSegment"
            ])
        );

        return $fields;
    }

}