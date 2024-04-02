<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // Thêm dữ liệu giả
       \App\App\Models\joke::create([
            'name' => 'Funny Joke 1',
            'author_name' => 'Author 1',
            'joke_text' => 'Why don\'t scientists trust atoms? Because they make up everything!'
        ]);

        \App\App\Models\joke::create([
            'name' => 'Hilarious Joke 2',
            'author_name' => 'Author 2',
            'joke_text' => 'Why did the scarecrow win an award? Because he was outstanding in his field!'
        ]);
        
        echo "Jokes added successfully!";

    }
}
