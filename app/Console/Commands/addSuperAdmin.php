<?php

namespace App\Console\Commands;

use App\Admin;
use App\Permission;
use App\Role;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class addSuperAdmin extends Command
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
        $admin=Admin::where('is_super',1)->first();
        if ($admin===null){
            $first_name=$this->ask('Enter The FirstName');
            $last_name=$this->ask('Enter The LastName');
            $email=$this->ask('Enter The email for admin');
            $password=$this->secret('Enter The Password');
            $confirm_password=$this->secret('Enter The Confirmation Password');
            if($password == $confirm_password){
                if ($this->confirm('Do you wish to continue?')) {
                    $admin=Admin::create([
                        'first_name'=>$first_name,
                        'last_name'=>$last_name,
                        'email'=>$email,
                        'password'=>Hash::make($password),
                        'is_admin'=>'1'
                    ]);
                    $role=Role::create(['title'=>'SuperAdmin']);
                    $role->permissions()->sync(Permission::all());
                    $admin->roles()->sync($role);
                    return $this->info('Admin added with name:' . $admin->first_name . '. Now login and Verify Email');

                }
            }
            else{
                $this->warn('Password Confirmation Mismatch');
            }
        }
        else{
            $this->warn('Admin already exists with name : ' . $admin->getfullName());
        }
    }
}
