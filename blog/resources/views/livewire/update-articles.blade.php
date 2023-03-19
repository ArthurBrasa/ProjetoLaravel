<div>
    @auth
    {{-- CARDS  {{ route('NewArticle') }} --}}
    <div class="my-1"> 
      <form  action="{{ route('NewArticle') }}" method="post" class="">
        @csrf
        <div class="card">
          <h5 class="card-header"><input wire:model="title" name='title' class="form-control" type="text" placeholder="Title"></h5>
          <div class="card-body">
            <h5 class="card-title"><input wire:model="subtitle" name="subtitle" type="text" class="form-control" placeholder="Sub-Title"></h5>
            <textarea wire:model="content" name="content" id="" cols="10" rows="10" class="form-control" style="resize:none" placeholder="..."></textarea>
    
            <button type="submit" class="btn btn-primary mt-1">Post</button>
          </div>
        </div>
        {{-- <input name="user" type="text" > --}}
    </div>
    </form>
    {{-- FIM CARDS --}}    
    @endauth
    
</div>
