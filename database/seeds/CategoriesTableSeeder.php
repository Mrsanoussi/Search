<?php

use Carbon\Carbon;
use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'BasicFit', 'slug' => 'basicfit', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'The Fitness Lounge', 'slug' => 'the fitness lounge', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'David Lloyd', 'slug' => 'david lloyd', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'MyLife', 'slug' => 'mylife', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fit for Free', 'slug' => 'fit for free', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
