<?php

//O seeders é para inserir dados ficticio
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegmentosSeeder extends Seeder
{
    public function run()
    {
        DB::table('segmentos')->insert([
            ['nome' => 'Tecnologia'],
            ['nome' => 'Esporte'],
            ['nome' => 'Saúde'],
        ]);
    }
}
