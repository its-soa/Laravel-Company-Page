<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Url;

class ShowBlog extends Component
{
    
    #[Url]
    public $categorySlug = null;
        
    public function render()
    {
        // echo $this->categorySlug;
        $categories = Category::latest()->get();
        if(!empty($this->categorySlug)){
            $category = Category::where('short_desc', $this->categorySlug)->first();
            if (empty($category)){
                abort(404);
            }
            
            $blog = Post::where('category_id', $category->id)->where('status', 1)->latest()->paginate(2);
        }else{
            $blog = Post::latest()->where('status', 1)->paginate(2);
        }

        $latestBlog = Post::where('status', 1)->latest()->take(3)->get();
  
        return view('livewire.show-blog', [
            'posts' => $blog,
            'categories' => $categories,
            'latestBlog' => $latestBlog
        ]);
    }
}