<?php

namespace SilverStripe\GraphQL\Tests\Fake;

use SilverStripe\Assets\File;
use SilverStripe\Dev\TestOnly;
use SilverStripe\Security\Member;
use SilverStripe\ORM\DataObject;

class DataObjectFake extends DataObject implements TestOnly
{
    private static $db = [
        'MyField' => 'Varchar',
        'MyInt' => 'Int'
    ];

    private static $has_one = [
        'Author' => Member::class
    ];

    private static $many_many = [
        'Files' => File::class
    ];

    public $customSetterFieldResult;

    public $customSetterMethodResult;

    public function getCustomGetter()
    {
        return 'customGetterValue';
    }

    public function customMethod()
    {
        return 'customMethodValue';
    }

    public function setCustomSetterField($val)
    {
        $this->customSetterFieldResult = $val;
    }

    public function customSetterMethod($val)
    {
        $this->customSetterMethodResult = $val;
    }

    public function canCreate($member = null, $context = [])
    {
        return true;
    }

    public function canEdit($member = null)
    {
        return true;
    }

    public function canView($member = null)
    {
        return true;
    }

    public function canDelete($member = null)
    {
        return true;
    }
}
