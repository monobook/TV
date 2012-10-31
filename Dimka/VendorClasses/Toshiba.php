<?php
namespace Dimka\VendorClasses;

use Dimka\Interfaces\DigitalTvInterface;
use Dimka\Classes\Tv;

class Toshiba extends Tv implements DigitalTvInterface
{
    private $dvbStandard;

    public function __construct($standart)
    {
        $this->dvbStandard = $standart;
        $this->firstStart();
    }

    public function checkDvbTuner()
    {
        if ($this->dvbStandard == 'DVB-C') {
            $this->setCamModule();
        } else {
            echo "Your operator doesn't provide Digital Video Broadcasting technology.";
        }
    }

    public function setCamModule()
    {
        echo "Find CI slot and insert CAM module there ... Additional information in User's guide!";
    }

    protected function firstStart()
    {
        echo "Turn off the brain - you've got a BlackScreen for it!";
    }
}
