<?php

namespace App\Http\Livewire;


use App\Models\tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $message = 'Funcionando';

    protected $rules = 
    [
        'message' => 'required|min:3|max:10000'
    ];

    public function render()
    {
        $tweets = tweet::with('user')->get();

        return view('livewire.show-tweets',[

            'tweets' => $tweets,

        ]);
    }

    public function create()
    {
        $this->validate();

        Tweet::create([
            'content' =>$this->message,
            'user_id' =>1,
        ]);
        
        $this->message= '';
    }
}
