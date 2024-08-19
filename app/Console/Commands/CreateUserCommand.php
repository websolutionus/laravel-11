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
    protected $signature = 'user:create';

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
        $user = \Str::random(6);
        $email = $user.'@example.com';
        $password = 'password';
        User::create([
            'name' => $user,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
        $this->info('User created: Name: '. $user . ' Email: '. $email . ' Password: ' . $password);
    }
}
