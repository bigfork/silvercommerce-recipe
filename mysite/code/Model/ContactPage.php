<?php

use SilverStripe\ORM\FieldType\DBVarchar;
use SilverStripe\ORM\FieldType\DBHTMLText;
use SilverStripe\ORM\FieldType\DBText;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\SiteConfig\SiteConfig;

class ContactPage extends Page
{
    private static $casting = [
        "PhoneNumber"   => "Varchar",
        "Email"         => "Varchar",
        "Address"       => "Text"        
    ];

    public function getPhoneNumber()
    {
        $config = SiteConfig::current_site_config();
        return $config->ContactPhone;
    }

    public function getEmail()
    {
        $config = SiteConfig::current_site_config();
        return $config->ContactEmail;
    }

    public function getAddress()
    {
        $config = SiteConfig::current_site_config();
        return $config->ContactAddress;
    }
}
