<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class GetRememberToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remembertoken:get {user : The ID of the user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the remember token that owns the user';

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
     * @return mixed
     */
    public function handle()
    {
        $userId = $this->argument('user');
        
        $user = User::find($userId);

        ($user !== null) ?
            $this->info($user->remember_token) :
            $this->error("User not found");
    }
}
