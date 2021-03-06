<?php

namespace App\Console\Commands\Seed;

use Illuminate\Console\Command;

class PreseedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:pre';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed preseed data';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('db:seed', [
            '--class' => 'SeedPreseedSeeder',
        ]);
        $this->info('Preseed data has been seeded');
    }
}
