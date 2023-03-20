<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UpdateModalArticle extends Component
{

    public $article = [];
    
    public function render()
    {
        return view('livewire.update-modal-article');
    }
}
