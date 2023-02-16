<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
                'id' => '',
                'user_id' => '',
                'type_id' => '',
                'deviation' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
    }
}
