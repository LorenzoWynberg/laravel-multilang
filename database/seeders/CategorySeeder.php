<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $json = File::get("database/data/category.json");
        $categories = json_decode($json, true);

        foreach ($categories as $c) {
            Category::create($c);
        }
    }
}
