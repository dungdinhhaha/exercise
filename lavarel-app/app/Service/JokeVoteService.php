<?php
namespace App\Service;
use App\Repository\JokeVoteRepository;

class JokeVoteService{

    /**
     * @var JokeVoteRepository
     */
    protected $jokeVoteRepository;
    /**
     * JokeService constructor
     * @param JokeVoteRepository $jokeVoteRepository
     */
    public function __construct(JokeVoteRepository $jokeVoteRepository){
        $this->jokeVoteRepository = $jokeVoteRepository;
    }
    /**
     * Get All Joke
     * @return String
     */

   public function updateVote($jokeId, $vote){
    $this->jokeVoteRepository->update($jokeId, $vote);
   }
}