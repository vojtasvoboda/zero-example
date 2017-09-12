<?php

namespace App\Commands;

use NunoMaduro\ZeroFramework\Commands\AbstractCommand;

use Illuminate\Database\Capsule\Manager as DB;

class UserActivateCommand extends AbstractCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:activate {user}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Activate user command';

    /**
     * Execute the console command. Here goes the command
     * code.
     *
     * @return void
     */
    public function handle(): void
    {
        $id = $this->argument('user');
        $this->info('Activating user with ID ' . $id);
    }
}
