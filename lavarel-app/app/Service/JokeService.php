<?php
namespace App\Service;
use App\Repository\JokeRepository;

class JokeService{

    /**
     * @var JokeRepository
     */
    protected $jokeRepository;
    /**
     * JokeService constructor
     * @param JokeRepository $jokeRepository
     */
    public function __construct(JokeRepository $jokeRepository){
        $this->jokeRepository = $jokeRepository;
    }
    /**
     * Get All Joke
     * @return String
     */

     public function getAll(){
        return $this->jokeRepository->getAllJoke();
     }
     public function randomJokeId($calledJokes){
        return $this->jokeRepository->getRandomJokeId($calledJokes);
        return $randomJokeId;
     }
}