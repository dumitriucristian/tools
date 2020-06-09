<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'title' => "Do  something else",
            'due_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'done' => 1
        ]);

        DB::table('todos')->insert([
            'title' => "Do something",
            'due_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'done' => 0
        ]);

        DB::table('todos')->insert([
            'title' => "Do nothing",
            'due_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'done' => 0
        ]);
    }
}
