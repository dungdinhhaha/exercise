<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\joke::create([
            'name' => 'Funny Joke 1',
            'author_name' => 'Author 1',
            'joke_text' => 'A child asked his father, "How were people born?" So his father said, "Adam and Eve made babies, then their babies became adults and made babies, and so on."

            The child then went to his mother, asked her the same question and she told him, "We were monkeys then we evolved to become like we are now."
            
            The child ran back to his father and said, "You lied to me!" His father replied, "No, your mom was talking about her side of the family."'
        ]);

        \App\Models\joke::create([
            'name' => 'Hilarious Joke 2',
            'author_name' => 'Author 2',
            'joke_text' => 'Teacher: "Kids,what does the chicken give you?" Student: "Meat!" Teacher: "Very good! Now what does the pig give you?" Student: "Bacon!" Teacher: "Great! And what does the fat cow give you?" Student: "Homework!"'
        ]);
        \App\Models\joke::create([
            'name' => 'Hilarious Joke 3',
            'author_name' => 'Author 4',
            'joke_text' => '"The teacher asked Jimmy, "Why is your cat at school today Jimmy?" Jimmy replied crying, 
            "Because I heard my daddy tell my mommy, I am going to eat that pussy once Jimmy leaves for school today!"'
        ]);
        \App\Models\joke::create([
            'name' => 'Hilarious Joke 2',
            'author_name' => 'Author 2',
            'joke_text' => 'A housewife, an accountant and a lawyer were asked "How much is 2+2?" 
            The housewife replies: "Four!". The accountant says: "I think it`s either 3 or 4. Let me run those figures through my spreadsheet one more time." The lawyer pulls the drapes, dims the lights and asks in a hushed voice, "How much do you want it to be?"'
        ]);
        
        echo "Jokes added successfully!";
    }
}
