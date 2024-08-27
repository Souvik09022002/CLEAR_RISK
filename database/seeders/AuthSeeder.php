<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //$faker = new Faker::create();
    public function run(): void
    {
        $user = new User();
        $user->Email = "irm.somnath@gmail.com";
        $user->password ='$2y$12$LET/UD/n8IET/ZO7ZaMdi.QDD4K8PKizFPl5WxJ3zAnFwZvIJejDy';
        $user->user_type = 1;
        $user->save();
    }
}
