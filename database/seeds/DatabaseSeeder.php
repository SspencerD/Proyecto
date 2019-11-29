<?php

use App\Cause;
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
        $this->call(ProductsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
        $this->call(CausesTableSeeder::class);
        $this->call(ReasonsTableSeeder::class);

=======
      
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c

    }
}
