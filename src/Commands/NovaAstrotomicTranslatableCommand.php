<?php

namespace Blastedcode\NovaAstrotomicTranslatable\Commands;

use Illuminate\Console\Command;

class NovaAstrotomicTranslatableCommand extends Command
{
    public $signature = 'nova-astrotomic-translatable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
