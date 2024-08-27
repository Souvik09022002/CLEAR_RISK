<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $blankObject;

    public function __construct()
    {
        // Initialize the property with an instance of stdClass
        $this->blankObject = new \stdClass();
    }

    abstract protected function getBlankObject();
}
