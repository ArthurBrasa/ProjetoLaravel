<div>
    @foreach ($articles as $item)            
        <tr>
        <td  style="width: 80px;">{{$item->id}}</td>
        @role('Super-Admin')
                  <th class="overflow-x-hidden">{{$item->autor}}</th>
        @endrole
        @role('admin')
                  <th class="overflow-x-hidden">{{$item->autor}}</th>
        @endrole
        <td class="overflow-x-hidden" style="width: 100px;">{{$item->title}}</td>
        <td>{{$item->created_at}}</td>
        
        {{-- @can('delete articles') --}}
            <form action="{{ route('deleteArticle', $item->id)}}"   method="post">
                @csrf
                @method('DELETE')
                <td class="text-center"><button type="submit" class="btn btn-sm btn-outline-danger" >Remover</button></td>    
            </form>
        {{-- @else
        @endcan
         --}}
        {{-- @can('edit articles') --}}
            <form action="{{ route('editArticle', $item->id)}}" method="POST">
                @csrf
                @method('PUT')
                <td class="text-center"><button type="submit" class="btn btn-sm btn-outline-warning disabled" >Editar</button></td>
            </form>
        {{-- @endcan  --}}

        @if (session('edit'))
        {{-- @session('edit') --}}
            
            @livewire('update-modal-article')

        @endif
        
      
    
    
    </tr>    
@endforeach
</div>
 