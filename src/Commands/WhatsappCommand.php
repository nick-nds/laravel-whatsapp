<?php

namespace Bistrokeep\Whatsapp\Commands;

use Illuminate\Console\Command;

class WhatsappCommand extends Command
{
    public $signature = 'laravel-whatsapp';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
