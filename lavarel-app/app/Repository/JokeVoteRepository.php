<?php
namespace App\Repository;
use App\Models\JokeVote;
class JokeVoteRepository {
/**
 * @var JokeVote
 */
protected $jokeVote;
  /**
     * JokeVoteRepository constructor.
     * @param JokeVote $jokeVote
     */
    public function __construct(JokeVote $jokeVote)
    {
        $this->jokeVote = $jokeVote;
    }
    public function update($jokeId, $vote){
        $jokeVote = JokeVote::where('id_joke', $jokeId)->first();
       
        if (!$jokeVote) {
            // Nếu không tìm thấy bản ghi, tạo mới bản ghi
            $jokeVote = new JokeVote();
            $jokeVote->id_joke = $jokeId;
            $jokeVote->like = 0;
            $jokeVote->dislike = 0;
        }

        // Cập nhật số lượng like hoặc dislike
        if ($vote === 'like') {
            $jokeVote->like += 1;
        } elseif ($vote === 'dislike') {
            $jokeVote->dislike += 1;
        }

        // Lưu hoặc cập nhật bản ghi vào cơ sở dữ liệu
        $jokeVote->save();
    }
}