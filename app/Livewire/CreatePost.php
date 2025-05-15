<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $posttitle = '';
    public $postcontent = '';
    public $postphoto;

    public function save()
    {

        $this->validate([
            'posttitle' => 'required|string|max:255',
            'postcontent' => 'required',
            'postphoto' => 'image|max:1024', // 1MB Max
        ]);

        $post = new Post();
        $post->posttitle = $this->posttitle;
        $post->postcontent = $this->postcontent;
        $post->postphoto = $this->postphoto->store(path: 'user_uploads');
        $post->save();

    }
}
