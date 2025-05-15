<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPosts extends Component
{
    public function render()
    {
        return view('livewire.list-posts')->with([
            'posts' => Post::all(),
        ]);
    }
}
