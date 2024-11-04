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
        Category::create([
            'name' => 'Corridas',
            'slug' => 'corridas',
            'description' => 'Notícias relacionadas com corridas.'
        ]);

        Category::create([
            'name' => 'Prémios',
            'slug' => 'premios',            
        ]);

        Category::create([
            'name' => 'Cidadania e Desenvolvimento',
            'slug' => 'ced',            
        ]);
        
    }
}
