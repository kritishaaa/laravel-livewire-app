<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowBlog extends Component
{

    public $blogId;
    
    public function mount($id)
    {
    $this->blogId = $id;
         
    }

    public function render()
    {
        $blog = Article::select('articles.*', 'blog_categories.name as category_name')
        ->leftJoin('blog_categories', 'blog_categories.id', 'articles.category_id')
        ->findOrFail($this->blogId);
        return view('livewire.show-blog',[
            'blog' => $blog
        ]);
    }
}
