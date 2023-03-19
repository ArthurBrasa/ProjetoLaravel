

<div>
    @foreach ($articles as $article)
            
        <div class="card my-2">
                <h5 class="card-header">{{$article->title}}</h5>
                <div class="card-body">
                <h6 class="card-title text-muted"> {{$article->subTitle}}</h6>
                <p class="card-text">
                    {{$article->content}}
                </p>
                <a href="#" class="btn btn-primary">More</a>
                </div>
        </div> 
        
    @endforeach    
</div>
