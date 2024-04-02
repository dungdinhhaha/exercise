<?php
namespace App\Repository;

use App\Models\Joke;

class JokeRepository {
    /**
     * @var Joke
     */
    protected $joke1;

    /**
     * JokeRepository constructor.
     * @param Joke $joke1
     */
    public function __construct(Joke $joke1)
    {
        $this->joke1 = $joke1;
    }
    /**
     * Get All Joke
     * @return Joke $joke1
     */

     public function getAllJoke(){
        return $this->joke1->get();
     }
 /**
     * Get All Joke
     * @return Joke $joke1
     */
     public function getRandomJokeId(array $excludedJokes = [])
     {
         return Joke::whereNotIn('id', $excludedJokes)->inRandomOrder()->value('id');
     }
}
