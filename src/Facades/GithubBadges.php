<?php

namespace Jeddtony\GithubBadge\Facades; 

use Illuminate\Support\Facades\Facade;

class GithubBadges extends Facade {


    protected static function getFacadeAccessor()
    {
        return 'github-badges';
    }
}