<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $categories= [
            ['name' => 'Crème'],
            ['name' => 'Gamme'],
            ['name' => 'Gel de douche'],
            ['name' => 'Gommage'],
            ['name' => 'Kit'],
            ['name' => 'Lait de corps'],
            ['name' => 'Lotion'],
            ['name' => 'Savon'],
            ['name' => 'Sérum'],
        ];

        foreach($categories as $category){
            Category::create($category);
        }

    }
}
