<?php

namespace Database\Seeders;

use App\Models\Story;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Story::create([
            'title' => 'Sexto Sentido Inspirador',
            'date' => '2024-02-05',
            'image' => 'story1.png',
            'summary' => 'Notícia da TVI jornal sobre o Sexto Sentido.',
            'url' => 'https://tviplayer.iol.pt/programa/tvi-jornal/63ef5eb50cf2665294d5f87a/video/65c0eb7d0cf25f99539878d9'
        ]);

        Story::create([
            'title' => 'Apresentação Projeto Sexto Sentido',                    
            'url' => 'https://herois.pt/atletas-herois/projeto-sexto-sentido/',
            'image' => 'story2.png'
        ]);

        Story::create([
            'title' => 'Projeto Sexto Sentido',
            'subtitle' => 'Desporto para todos e todos pelo desporto',
            'date' => '2023-08-01',
            'image' => 'story3.png',
            'url' => 'https://www.prorunners.pt/artigo/43/2107/projeto-sexto-sentido-desporto-para-todos-e-todos-pelo-desporto/'
        ]);

        Story::create([
            'title' => 'Heróis Betano',
            'subtitle' => 'Projeto Sexto Sentido',
            'date' => '2023-04-10',            
            'image' => 'story4.png',
            'url' => 'https://youtu.be/wW4-RXkAeDM?si=PI-MWuh4aEKngdJc'
        ]);

        Story::create([
            'title' => 'Projeto Sexto Sentido na PRO RUNNERS 17',            
            'date' => '2023-06-30',            
            'image' => 'story5.png',
            'url' => 'https://www.prorunners.pt/noticia/16/1881/projeto-sexto-sentido-na-pro-runners-17/'
        ]);

        Story::create([
            'title' => '"Sexto Sentido',            
            'date' => '2023-05-17',            
            'summary' => 'Projeto de corrida para cegos criado no Brasil já reúne 20 duplas no Porto.',
            'image' => 'story6.png',
            'url' => 'https://portocanal.sapo.pt/noticia/327385ÍDEO'
        ]);
        

        Story::create([
            'title' => 'Sapo Desporto',            
            'date' => '2023-05-18',            
            'summary' => 'Projeto de corrida para cegos criado no Brasil já reúne 20 duplas no Porto.',
            'image' => 'story7.png',
            'url' => 'https://desporto.sapo.pt/modalidades/atletismo/artigos/video-projeto-de-corrida-para-cegos-criado-no-brasil-ja-reune-20-duplas-no-porto'
        ]);

        Story::create([
            'title' => 'Sexto Sentido',
            'subtitle' => 'Um por todos e todos pela paixão da corrida',
            'url' => 'https://issuu.com/betano.pt/docs/_betanomag_9_final/s/22074305',
            'image' => 'story8.png'
        ]);

    }

}
