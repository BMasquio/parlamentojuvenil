<?php

namespace App\Base;

use Log;

class Sync
{
    public function log($message, $command = null)
    {
        Log::info($message);

        if ($command && $command instanceof \Illuminate\Console\Command) {
            $command->comment($message);
        }
    }
}
