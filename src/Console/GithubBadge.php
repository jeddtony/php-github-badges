<?php

namespace Jeddtony\GithubBadge\Console;

use Illuminate\Console\Command;
use Jeddtony\GithubBadge\Facades\GithubBadge as FacadesGithubBadge;

class GithubBadge extends Command{

    protected $signature = 'github-badge';

    protected $description = 'Creates a travis.yml file';

    public function handle() {
        $this->info(FacadesGithubBadge::generateTravis()); 
    }
}