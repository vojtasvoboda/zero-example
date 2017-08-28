<?php

namespace App\Commands;

use NunoMaduro\ZeroFramework\Commands\AbstractCommand;

use Illuminate\Database\Capsule\Manager as DB;

class DatabaseMigrateCommand extends AbstractCommand
{
    /**
     * The name of the command.
     *
     * @var string
     */
    protected $name = 'database:migrate';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Database migrate command';

    /**
     * Execute the console command. Here goes the command
     * code.
     *
     * @return void
     */
    public function handle(): void
    {
        DB::schema()->create('users', function ($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->timestamps();
        });

        DB::table('users')->insert(
            ['email' => 'vojtasvoboda.cz@gmail.com']
        );
    }
}
