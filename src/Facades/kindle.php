<?php

namespace PixelFarms\kindle\Facades;

use Illuminate\Support\Facades\Facade;

class kindle extends Facade {

    protected static function getFacadeAccessor() {
        return 'pixelfarms-kindle';
    }
}
