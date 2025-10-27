<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create-user {--name=Admin} {--email=admin@example.com} {--password=password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin user for the admin panel';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->option('name');
        $email = $this->option('email');
        $password = $this->option('password');

        // Check if user already exists
        if (User::where('email', $email)->exists()) {
            $this->error("User with email {$email} already exists!");
            return 1;
        }

        // Create the admin user
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'email_verified_at' => now(),
        ]);

        $this->info("Admin user created successfully!");
        $this->line("Name: {$user->name}");
        $this->line("Email: {$user->email}");
        $this->line("Password: {$password}");
        $this->line("");
        $this->line("You can now login to the admin panel at: /admin/login");

        return 0;
    }
}