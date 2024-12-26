<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowSinglePost extends Component
{
    public $postID;
    public function mount($id)
    {
        $this->postID = $id;
        // dd($this->post);
    }

    public function render()
    {
        $post = Post::select('posts.*', 'categories.title as category_name', 'users.name as author_name')
        ->leftJoin('categories', 'categories.id', 'posts.category_id')
        ->leftJoin('users', 'users.id', 'posts.user_id')
        ->findOrfail($this->postID);
        return view('livewire.show-single-post', [
            'post' => $post
        ]);
    }
}