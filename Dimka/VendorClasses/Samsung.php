<?php
namespace Dimka\VendorClasses;

use Dimka\Classes\Tv;

class Samsung extends Tv
{
    public $series;

    public function sayHello()
    {
        parent::firstStart();
    }
}
