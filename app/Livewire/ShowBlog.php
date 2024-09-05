<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {
        $blogs = Article::orderBy('created_at', 'DESC')->get();
        return view('livewire.show-blog', [
            'blogs' => $blogs,
        ] );
    }
}
