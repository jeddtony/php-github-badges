<?php

namespace Jeddtony\GithubBadge;

use Illuminate\Support\ServiceProvider;
use Jeddtony\GithubBadge\Console\GithubBadge;

class GithubBadgeServiceProvider extends ServiceProvider {

    public function boot () {
        if($this->app->runningInConsole()) {
            $this->commands([
                 GithubBadge::class
            ]);
        }
    }

    public function register() {
        $this->app->bind('github-badges', function() {
            return new GithubBadgeFactory();
        });
    }

}