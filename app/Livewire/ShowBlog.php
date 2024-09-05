<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\BlogCategory;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowBlog extends Component
{
    #[Url]
    public $categorySlug = null;
    public function render()
    {
        $categories = BlogCategory::all();
        if(!empty($this->categorySlug)){
            $category = BlogCategory::where('slug', $this->categorySlug)->first();
            if(empty($category)){
                abort(404);
            }
            $blogs = Article::orderBy('created_at', 'DESC')
                            ->where('category_id', $category->id)
                            ->paginate(2);

        }else{
            $blogs = Article::orderBy('created_at', 'DESC')->paginate(2);
        }

        return view('livewire.show-blog', [
            'blogs' => $blogs,
            'categories' =>$categories
            
        ] );
    }
}
