<?php

namespace PixelFarms\LaravelBase\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelBase extends Facade {

    protected static function getFacadeAccessor() {
        return 'pixelfarms-laravelbase';
    }
}
