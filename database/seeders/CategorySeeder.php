<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->name = ('drinks');
        $category->save();

        $category2 = new Category();
        $category2->name = ('fruts');
        $category2->save();

        $category3 = new Category();
        $category3->name = ('burguers');
        $category3->save();
    }
}
