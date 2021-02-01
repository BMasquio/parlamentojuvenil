<?php

namespace App\Console\Commands;

use App\Base\Constants;
use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class PjListAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:admin:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all administrators';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Role::all()->each(function ($role) {
            $this->info("{$role->user->name} ({$role->user->email})");
        });
    }
}
