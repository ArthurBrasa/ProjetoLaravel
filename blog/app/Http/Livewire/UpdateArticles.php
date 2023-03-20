<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\TopicHasArticles;
use App\Models\Topics;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UpdateArticles extends Component
{
    public $title;
    public $subtitle;
    public $content;

    public $anime;
    public $tech;
    public $cosplay;
    public $game;

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
        
       
               
        if($this->game){
            $game = DB::select('select id from topics where type = "game";');
            $topics_has_articles = new TopicHasArticles();
            $topics_has_articles->article = $article->id;
            $topics_has_articles->topics = $game[0]->id;
            $topics_has_articles->save();
        }

        $article->save();

       


        // $this->title = '';
        // $this->subtitle = '';
        // $this->content = '';

        return view('store.dashboard');
    }
}
