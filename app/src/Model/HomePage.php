<?php

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\Forms\GridField\GridFieldEditButton;
use SilverCommerce\CatalogueAdmin\Forms\GridField\GridFieldConfig_CatalogueRelated;
use SilverCommerce\CatalogueAdmin\Model\CatalogueProduct;
use SilverCommerce\CatalogueAdmin\Model\CatalogueCategory;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

class HomePage extends Page
{
    private static $db = [];

    private static $has_one = [];

    private static $has_many = [
        'FeaturedProducts' => Product::class,
        'FeaturedCategories' => Category::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $config = GridFieldConfig_CatalogueRelated::create(Product::class);
        $config->addComponent(new GridFieldOrderableRows('HomeSort'));

        $fields->addFieldToTab(
            'Root.Products',
            GridField::create(
                'FeaturedProducts',
                'Products',
                $this->FeaturedProducts()
            )->setConfig($config)
        );

        $config = GridFieldConfig_CatalogueRelated::create(Category::class);
        $config->addComponent(new GridFieldOrderableRows('HomeSort'));

        $fields->addFieldToTab(
            'Root.Categories',
            GridField::create(
                'FeaturedCategories',
                'Categories',
                $this->FeaturedCategories()
            )->setConfig(GridFieldConfig_CatalogueRelated::create(Category::class))
        );
        
        return $fields;
    }
}
