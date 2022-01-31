<?php

namespace App\Http\Livewire;


use App\Models\tweet;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweets extends Component
{
    use WithPagination;

    public $content = 'Funcionando';

    protected $rules = 
    [
        'content' => 'required|min:3|max:10000'
    ];

    public function render()
    {
        $tweets = tweet::with('user')->latest()->paginate(10);

        return view('livewire.show-tweets',[

            'tweets' => $tweets,

        ]);
    }

    public function create()
    {
        $this->validate();

            
             auth()->user()->tweets()->create([
            'content' => $this->content,
            ]);
            
        
        
        $this->content= '';
    }

    public function like($idTweet)
        {
            $tweet =Tweet::find($idTweet);

            $tweet = likes()->create([
                'user_id', auth()->user()->id
            ]);
        }


        public function unlike(tweet $tweet)
        {
            $tweet = likes()->delete();
            
        }
}
