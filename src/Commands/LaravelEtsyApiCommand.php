<?php

namespace automica\LaravelEtsyApi\Commands;

use Illuminate\Console\Command;

class LaravelEtsyApiCommand extends Command
{
    public $signature = 'laravel-etsy-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
