<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $translationPath = 'resources/sql/products.sql';
        $this->command->info('Seeding products table...');
        DB::unprepared(file_get_contents($translationPath));
        $this->command->info('Product seeding complete.');
        //$this->call(ProductSeeder::class);
    }
}
