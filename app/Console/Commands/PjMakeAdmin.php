<?php

namespace App\Console\Commands;

use App\Base\Constants;
use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class PjMakeAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:admin:make {user_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make the user an administrator';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (!($user = User::find($user_id = $this->argument('user_id')))) {
            return $this->error('User not found');
        }

        Role::create([
            'user_id' => $user->id,
            'role' => Constants::ROLE_ADMINISTRATOR,
        ]);

        $this->info($user->name . ' is now an administrator');
    }
}
