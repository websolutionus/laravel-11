<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {--count=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count = $this->option('count');
        $bar = $this->output->createProgressBar($count);
        $bar->start();
        for ($i = 1; $i <= $count; $i++) {
            $user = \Str::random(5);
            $email = \Str::random(5).'@example.com';
            $password = 'password';
            User::create([
                'name' => $user,
                'email' => $email,
                'password' => bcrypt($password),
            ]);
            $bar->advance();
        }
        $bar->finish();

        $this->info("\nUsers created successfully!");
        
    }
}
