<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'posttitle',
        'postcontent',
        'postphoto',
    ];

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'posttitle' => 'required|string|max:255',
            'postcontent' => 'required',
            'postphoto' => 'nullable|image|max:2048', // Max 2MB
        ]);

        $post = new Post();
        $post->posttitle = $request->posttitle;
        $post->postcontent = $request->postcontent;

        if ($request->hasFile('postphoto')) {
            $imagePath = $request->file('postphoto')->store('posts', 'public');
            $post->image = $imagePath;
        }

        $post->save();
    }
}
