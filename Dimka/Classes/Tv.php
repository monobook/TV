<?php
namespace Dimka\Classes;

abstract class Tv
{
    protected $type;
    protected $diagonal;
    protected $resolution;
    protected $media;

    protected function firstStart()
    {
        echo "This is the '" . __METHOD__ . "' method of '" . __CLASS__ . "' class.";
    }

    public function __construct()
    {
        $this->type = 'LCD, LED or PDP?';
        $this->diagonal = 'from 32" to 60" ?';
        $this->resolution = 'HD Ready or FullHD ?';
        $this->media = 'USB, WEB and so on...';
    }

    public function setInformation($type, $diagonal, $resolution, $media)
    {
        $this->type = $type;
        $this->diagonal = $diagonal;
        $this->resolution = $resolution;
        $this->media = $media;
    }
}
