
<div class="row">
    <div class="col-3"></div>
    <div class="row col-9">
        
        <div class="col-8 shadow py-3">
            @foreach ($articles as $article)
                {{-- @dd(DB::select("SELECT * FROM articles;"))     --}}
          
                <div class="card my-2">
                    <h5 class="card-header">{{$article->title}}</h5>
                    <div class="card-body">
                    <h6 class="card-title text-muted"> {{$article->subTitle}}</h6>
                    <p class="card-text">
                        {{$article->content}}
                    </p>
                    <a href="#" class="btn btn-outline-primary">Curti</a>
                    </div>
                </div> 
           
                
                
                
            @endforeach  
        </div>
        <div class='col'>
            <div class="shadow sticky-top side-box ms-0 ms-md-5 " >
                <div class="height-nav"></div>
                <div class="px-3 body-side-box">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    
                    <li class="nav-item ">
                        <button class="x-1" wire:click="default">Todos</button>
                    
                    </li>
            
                    <li class="nav-item ">
                        <button class="x-1" wire:click="anime">Anime</button>
                    </li>
                    <li class="nav-item">
                        <button class="x-1" wire:click="game">Jogos</button>
                    </li>
                    <li class="nav-item">
                          <button class="x-1" wire:click="cosplay">Cosplay</button>
                    </li>
                    <li class="nav-item">
                        <button class="x-1" wire:click="tech">Tech</button>
                    </li>
                    
                    </ul>
                </div>
            </div>
        </div>
    <div>

   

</div>

