<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
       // $this->call(BannersTableSeeder::class);
      // $this->call(StoreTableSeeder::class);
      // $this->call(CategoryTableSeeder::class);
     // $this->call(CouponTableSeeder::class);
     // $this->call(DealTableSeeder::class);
     $this->call(BlogTableSeeder::class);

    
    }
}
