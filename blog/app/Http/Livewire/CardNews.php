<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CardNews extends Component
{
    

    public function render()
    {
        $articles = DB::Table('articles')->orderBy('created_at', 'desc')->get();
        // $articles = Article::get();
        
        return view('livewire.card-news', [
            'articles' => $articles
        ]);
    }
}
