<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Worksheet;

class WorkTaskSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_tojson = [
            1 => 'Russia',
            2 => 'USA',
            3 => 'China',
            4 => 'Hungary',
        ];
        $arr_tojson2 = [
            1 => 'You',
            2 => 'George',
            3 => 'Joe',
            4 => 'Andris',
        ];
        $arr_tojson3 = [
            1 => 'Gomez',
            2 => 'Rocky',
            3 => 'You',
            4 => 'Pewdiepie',
        ];

        $arr_json = json_encode($arr_tojson);
        $arr_json2 = json_encode($arr_tojson2);
        $arr_json3 = json_encode($arr_tojson3);

        Worksheet::insert([
            'instruction' => 'Which is the largest country?',
            'options' => $arr_json,
            'ganswer' => 1,
            'place' => 1,
        ]);
        Worksheet::insert([
            'instruction' => 'Who was the first president of the US?',
            'options' => $arr_json2,
            'ganswer' => 2,
            'place' => 2,
        ]);
        Worksheet::insert([
            'instruction' => 'Who is the most famous singer?',
            'options' => $arr_json3,
            'ganswer' => 4,
            'place' => 3,
        ]);
    }
}
