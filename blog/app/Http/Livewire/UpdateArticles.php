<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateArticles extends Component
{
    public $title;
    public $subtitle;
    public $content;

    public function render()
    {
        return view('livewire.update-articles');
    }

    public function store(){
        $article = new Article();
        $article->title =  $this->title;
        $article->subtitle =  $this->subtitle;
        $article->content =  $this->content;
        $article->idUser = Auth::id(); 
        
        $article->save();

        $this->title = '';
        $this->subtitle = '';
        $this->content = '';

        return view('store.dashboard');
    }
}
