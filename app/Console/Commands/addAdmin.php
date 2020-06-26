<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class addAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Admin User';

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
        $admin=User::where('type','admin')->first();
        if ($admin===null){
            $firstname=$this->ask('Enter The firstname');
            $lastname=$this->ask('Enter The lastname');
            $email=$this->ask('Enter the email');
            $password=$this->secret('Enter The Password');
            if ($this->confirm('Do you wish to continue?')) {
                $user=User::create([
                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'email'=>$email,
                    'password'=>Hash::make($password),
                    'type'=>'admin'
                ]);
                return $this->info('Admin added with name:' . $user->firstname);
            }
        }
        else{
            $this->warn('Admin already exists with name:' . $admin->firstname);
        }
    }
}
