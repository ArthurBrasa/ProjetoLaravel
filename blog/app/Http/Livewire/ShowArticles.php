<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowArticles extends Component
{
    public $articles;

    public function render()
    {
        $this->articles = DB::Table('articles')->orderBy('created_at', 'desc')->get();
        // $articles = Article::get();
        
        return view('livewire.show-articles', [
            'articles' => $this->articles
        ]);
    }
}
