<?php

namespace AhmadChebbo\DotzoneProfanityFilter\Commands;

use Illuminate\Console\Command;

class DotzoneProfanityFilterCommand extends Command
{
    public $signature = 'dotzone-profanity-filter';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
