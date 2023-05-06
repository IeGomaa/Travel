<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class StartProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command To Start Project';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        Artisan::call('migrate:fresh');
        $this->info('Migration Was Fresh');

        Artisan::call('db:seed');
        $this->info('Seeders Was Seeded');

        $name = $this->ask('Enter Your Name');
        $email = $this->ask('Enter Your Email');
        $password = $this->secret('Enter Your Password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        $this->info('User Account Was Created Successfully');
        return self::SUCCESS;
    }
}
