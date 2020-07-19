<?php

namespace App\Console\Commands;

use App\Permission;
use App\Role;
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
    protected $signature = 'create:superAdmin';

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
            $email=$this->ask('Enter The email for admin');
            $password=$this->secret('Enter The Password');
            $confirm_password=$this->secret('Enter The Confirmation Password');
            if($password == $confirm_password){
                if ($this->confirm('Do you wish to continue?')) {
                    $user=User::create([
                        'firstname'=>$firstname,
                        'lastname'=>$lastname,
                        'email'=>$email,
                        'password'=>Hash::make($password),
                        'type'=>'admin'
                    ]);
                    $role=Role::create(['title'=>'SuperAdmin']);
                    $role->permissions()->sync(Permission::all());
                    $user->roles()->sync($role);
                    return $this->info('Admin added with name:' . $user->firstname . '. Now login and Verify Email');

                }
            }
            else{
                $this->warn('Password Confirmation Mismatch');
            }
        }
        else{
            $this->warn('Admin already exists with name:' . $admin->firstname);
        }
    }
}
