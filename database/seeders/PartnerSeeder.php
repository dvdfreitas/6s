<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'name' => 'AEG1',
            'image' => 'image1.jpg',
            'url' => 'www.aeg1.pt'
        ]);

        Partner::create([
            'name' => 'Microsoft',
            'image' => 'microsoft.jpg',
            'url' => 'www.microsoft.pt'
        ]);
    }
}
