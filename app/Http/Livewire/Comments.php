<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'body'       => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam libero, perferendis dolor provident cum obcaecati a voluptate incidunt velit repellat atque soluta debitis id commodi esse neque, nostrum tempora eveniet?',
            'created_at' => '3 min ago',
            'creator'    => 'Tarek',
        ],
    ];

    public $newComment;

    public function addComment(){
        if($this->newComment == ''){
            return;
        }
        
        array_unshift($this->comments, [
            'body'       => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator'    => 'Akash',
        ]);
        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
