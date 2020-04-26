<?php

namespace JeddTony\GithubBadge;

use Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter;

class GithubBadgesServiceProvider extends ServicesResetter {

    public function boot () {

    }

    public function register() {
        $this->app->bind('github-badges', function() {
            return new GithubBadgeFactory();
        })
    }

}