<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\UserAdditional;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   /* @var $role \App\Models\Role */
        $role = Role::factory()->create();
        User::factory(4)->has(UserAdditional::factory())->create()->each( function (User $user) use ($role) {
            $role->users()->attach($user);
        });
    }
}
