<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'admin',
            'email' => 'admin@mangudemaailm.ee',
            'password' => bcrypt('admin'),
            'superAdmin' => true,
            'email_verified_at' => now(),
        ]);
        $user->save();
        $this->call(ProductSeeder::class);
    }
}
