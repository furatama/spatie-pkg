<?php

namespace Furatama\SpatiePkg\Commands;

use Illuminate\Console\Command;

class SpatiePkgCommand extends Command
{
    public $signature = 'spatie-pkg';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
