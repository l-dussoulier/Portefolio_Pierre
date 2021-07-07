<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DessinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dessins')->insert(
            [
                [
                    'title' => "Mon dessin 1",
                    'description' => "Il est beau eingegnçeoghnzeoungzoeui",
                    'author_id' => 1,
                    'created_at' => Carbon::now()
                ],
                [
                    'title' => "Mon dessin 2",
                    'description' => "Il est beau eingegnçeoghnzeoungzoeui",
                    'author_id' => 1,
                    'created_at' => Carbon::now()
                ],
                [
                    'title' => "Mon dessin 3",
                    'description' => "Il est beau eingegnçeoghnzeoungzoeui",
                    'author_id' => 1,
                    'created_at' => Carbon::now()
                ]
            ]
        );
    }
}
