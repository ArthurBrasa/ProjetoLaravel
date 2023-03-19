<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Jetstream\Rules\Role;
use Livewire\Component;

class MinhasPostagens extends Component
{
    public $articles = [];
    
    public function render()
    {
        // dd(auth()->user()->name);
        if(auth()->user()->name === 'Super Admin' || auth()->user()->name === 'Admin'){
            $this->articles = DB::select('
            SELECT articles.id, articles.title, articles.created_at, users.name AS autor FROM articles
            JOIN users ON users.id = articles.idUser
            ORDER BY created_at DESC;
            ');
           
        }else {
            $this->articles = DB::table('articles')->orderBy('created_at', 'desc')->get()->where('idUser', '=', Auth::id());
        }
        return view('livewire.minhas-postagens');
    }

}
