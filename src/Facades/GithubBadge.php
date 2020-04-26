<?php

namespace Jeddtony\GithubBadge\Facades; 

use Illuminate\Support\Facades\Facade;

class GithubBadge extends Facade {


    protected static function getFacadeAccessor()
    {
        return 'github-badges';
    }
}