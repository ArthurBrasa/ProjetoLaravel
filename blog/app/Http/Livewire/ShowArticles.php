<?php

namespace App\Http\Livewire;

use App\Models\Destaque_articles;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowArticles extends Component
{
    public $articles = null;
    // $articles = Article::get();;
    // public $destaque;

    
    public function anime() 
    {
        $this->articles = DB::select('
        select articles.*, article_has_topics.article from articles
        join article_has_topics on articles.id = article_has_topics.article
        where article_has_topics.topics = 1; 
           
        ');
        
    }
    public function tech() 
    {
        $this->articles = DB::select('
        select articles.*, article_has_topics.article from articles
        join article_has_topics on articles.id = article_has_topics.article
        where article_has_topics.topics = 2; 
           
        ');
        
    }
    public function cosplay() 
    {
        $this->articles = DB::select('
        select articles.*, article_has_topics.article from articles
        join article_has_topics on articles.id = article_has_topics.article
        where article_has_topics.topics = 3; 
           
        ');
        
    }
    public function game() 
    {
        $this->articles = DB::select('
        select articles.*, article_has_topics.article from articles
        join article_has_topics on articles.id = article_has_topics.article
        where article_has_topics.topics = 4; 
           
        ');
        
    }

    public function default(){
        $this->articles = DB::Table('articles')->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        if($this->articles === null){
            $this->default();
        }
    
        return view('livewire.show-articles', [
            'articles' => $this->articles
        ]);
    }



}
