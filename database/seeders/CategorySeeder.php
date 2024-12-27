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
        //
        Category::create([
            'name' => 'WEB Programing',
            'slug'=> 'web-programing',
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug'=> 'ui-ux',
        ]);
        Category::create([
            'name' => 'WEB Design',
            'slug'=> 'web-design',
        ]);
        Category::create([
            'name' => 'WEB Backend',
            'slug'=> 'web-backend',
        ]);
       
}
}