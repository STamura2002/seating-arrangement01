<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'subject' => "Math"
        ]);
         DB::table('types')->insert([
            'subject' => "Japanese"
        ]);
         DB::table('types')->insert([
            'subject' => "English"
        ]);
    }
}
