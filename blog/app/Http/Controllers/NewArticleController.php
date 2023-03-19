<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\_article;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //
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
        $article->delete();

        return redirect()->route('dashboard')->with('success', 'Postagem Removida com Sucesso');
    }
}
