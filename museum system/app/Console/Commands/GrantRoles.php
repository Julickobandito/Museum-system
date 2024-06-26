<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;


class GrantRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:grant-roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::find(1);
        $user->assignRole('admin');
    }
}
