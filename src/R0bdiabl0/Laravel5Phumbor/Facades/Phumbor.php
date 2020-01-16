<?php

namespace R0bdiabl0\Laravel5Phumbor\Facades;

use Illuminate\Support\Facades\Facade;

class Phumbor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'phumbor';
    }
}
