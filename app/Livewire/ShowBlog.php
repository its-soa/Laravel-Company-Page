<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {
        $blog = Post::latest()->get();
        return view('livewire.show-blog', [
            'blog' => $blog,
        ]);
    }
}