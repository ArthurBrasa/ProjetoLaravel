<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Article_has_topics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title =  $request->title;
        $article->subtitle =  $request->subtitle;
        $article->content =  $request->content;
        $article->idUser = Auth::id();

        $article->save();
        

        
        if($request->Game != null){
            $topic = new Article_has_topics();
            $topic->topics = 4;
            $topic->article = $article->id;

            $topic->save();
          
        }
        
        if($request->Coplay != null){
            $topic = new Article_has_topics();
            $topic->topics = 3;
            $topic->article = $article->id;

            $topic->save();
          
        }
        if($request->Tech != null){
            $topic = new Article_has_topics();
            $topic->topics = 2;
            $topic->article = $article->id;

            $topic->save();
          
        }
        if($request->Anime != null){
            $topic = new Article_has_topics();
            $topic->topics = 1;
            $topic->article = $article->id;

            $topic->save();
          
        }

        return redirect()->route('dashboard')->with('add', 'Novo Post Adicionado!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        
        return redirect()->route('dashboard')->with('edit', $article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article_has_topic = DB::delete(
            'delete from article_has_topics where article = ?;', [$id]
        );
        // dd($article_has_topic);
        $article->delete();

        return redirect()->route('dashboard')->with('success', 'Postagem Removida com Sucesso');
    }
}
