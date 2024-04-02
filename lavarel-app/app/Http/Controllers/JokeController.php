<?php

namespace App\Http\Controllers;

use App\Models\joke;
use App\Service\JokeService;
use App\Service\JokeVoteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class JokeController extends Controller
{
    /**
     * @var JokeService
     */
    protected $jokeService;
    /**
     * JokeService constructor
     * @param JokeService $jokeService
     */

       /**
     * @var JokeVoteService
     */
    protected $jokeVoteService;
    /**
     * JokeService constructor
     * @param JokeVoteService $jokeVoteService
     */

     public function __construct(JokeService $jokeService, JokeVoteService $jokeVoteService)
     {
         $this->jokeService = $jokeService;
         $this->jokeVoteService = $jokeVoteService;
     }
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
       
        try{
            
            $calledJokes = json_decode(Cookie::get('called_jokes'), true) ?? [];
            $randomJokeId = $this->jokeService->randomJokeId($calledJokes);
            if ($randomJokeId === null) {
                $currentJoke = null;
            } else {
                // Lưu joke đã gọi vào danh sách
                $calledJokes[] = $randomJokeId;
                // Lấy thông tin của joke
                $currentJoke = Joke::find($randomJokeId);
            }
            $currentJoke = $currentJoke;
    
        }
        catch(Exception $e){
            return view('errors.500');
        }
        return view('joke', compact('currentJoke'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
       /**
     * vote
     *
     * @return \Illuminate\Http\Response
     */
    public function vote(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'joke_id' => 'required|numeric|exists:joke,id',
            'vote' => 'required|in:like,dislike' 
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $jokeId = $request->input('joke_id');
        $calledJokes = json_decode(Cookie::get('called_jokes'), true) ?? [];
        $calledJokes[] = $jokeId;
        Cookie::queue('called_jokes', json_encode($calledJokes), 60*24*7); // Lưu cookie trong 1 tuần
        $vote = $request->input('vote');
        $this->jokeVoteService->updateVote($jokeId, $vote);
        return redirect()->route('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function show(joke $joke)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function edit(joke $joke)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, joke $joke)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function destroy(joke $joke)
    {
        //
    }
}
