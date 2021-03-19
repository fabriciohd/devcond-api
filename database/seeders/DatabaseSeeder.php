<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use App\Modes\User;;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'name' => 'APT 100',
            'id_owner' => '1',
        ]);
        DB::table('units')->insert([
            'name' => 'APT 101',
            'id_owner' => '1',
        ]);
        DB::table('units')->insert([
            'name' => 'APT 200',
            'id_owner' => '0',
        ]);
        DB::table('units')->insert([
            'name' => 'APT 201',
            'id_owner' => '0',
        ]);

        DB::table('areas')->insert([
            'allowed' => '1',
            'title' => 'Academia',
            'cover' => 'gym.jpg',
            'days' => '1,2,4,5',
            'start_time' => '06:00:00',
            'end_time' => '22:00:00'
        ]);
        DB::table('areas')->insert([
            'allowed' => '1',
            'title' => 'Piscina',
            'cover' => 'poll.jpg',
            'days' => '1,2,3,4,5',
            'start_time' => '07:00:00',
            'end_time' => '23:00:00'
        ]);
        DB::table('areas')->insert([
            'allowed' => '1',
            'title' => 'Churrasqueira',
            'cover' => 'barbecue.jpg',
            'days' => '4,5,6',
            'start_time' => '09:00:00',
            'end_time' => '23:00:00'
        ]);

        DB::table('walls')->insert([
            'title' => 'Título de Aviso de Teste',
            'body' => 'É importante questionar o quanto a consulta aos diversos militantes possibilita uma melhor visão global dos paradigmas corporativos.',
            'datecreated' => '2020-12-20 15:00:00'            
        ]);
        DB::table('walls')->insert([
            'title' => 'Alerta geral para todos',
            'body' => 'Todavia, o entendimento das metas propostas facilita a criação das diversas correntes de pensamento.',
            'datecreated' => '2020-12-24 20:00:00'            
        ]);
    }
}
