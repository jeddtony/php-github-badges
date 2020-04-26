<?php

namespace Jeddtony\GithubBadge;

class GithubBadgeFactory {

    public function generateTravis() {
        $myfile = fopen(".travis.yml", "w") or die("Unable to open file!");
$txt = "language: php\n \nphp: \n \t - 7.1\n \t - 7.2 \n \t - 7.3 \n\n
before_script:\n \t - travis_retry composer update\n \n script: \n \t - vendor/bin/phpunit";
fwrite($myfile, $txt);
// $txt = "Jane Doe\n";
// fwrite($myfile, $txt);
fclose($myfile);
    }    

}