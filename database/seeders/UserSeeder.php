<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Entities\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = new User;
        $userAdmin->name  = "Admin";
        $userAdmin->email  = "admin@app.com";
        $userAdmin->password  = Hash::make("admin");
        $userAdmin->save();
    }
}
