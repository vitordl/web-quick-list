@extends('layout.main_layout')

<title>Home</title>

@section('pagina')


<div class="max-w-3xl mt-5 mx-auto">
<a href="{{ route('novo_item') }}" class=" text-white p-2 rounded  bg-orange-600 font-semibold hover:bg-orange-700 mx-2 md:mx-1 lg:mx-0 text-sm md:text-base">Novo</a>

@if ($tarefa->count() == 0)
    
@else
  <a href="{{ route('habilitar_edicao') }}" class=" text-white p-2 rounded  bg-gray-600 font-semibold hover:bg-gray-700 mx-2 md:mx-1 lg:mx-0 md:hidden text-sm md:text-base">Habilitar edição</a>
@endif




<div class="h-10"></div>
</div>

<div class=" lg:pb-4">
<div class="max-w-3xl mx-auto bg-white rounded-lg shadow  hidden md:block ">
 
    <table class="w-full">
      <thead class="bg-gray-50 border-b-2 border-gray-200 ">
        <tr class=" tracking-widest ">
          <th class="text-left  px-3 py-2 font-semibold text-sm ">Tarefas</th>
          <th class="text-left px-3 font-semibold text-sm "></th>
        </tr>
      </thead>
  
      <tbody class="divide-y divide-gray-100">
        @foreach ($tarefa as $item)
        <tr class="text-sm text-gray-700">
        <td class="p-3 ">
            {{ $item->tarefas }}
        </td>
         <td class="p-3 w-48">
            <a href="{{ route('editar_isso', $item->id)  }}" class="text-orange-700 bg-orange-200 p-1 rounded">Editar</a>
            <a href="{{ route('deletar_isso', $item->id) }}" class="mx-6 rounded text-blue-800 bg-blue-300 p-1">Deletar</a> 
         </td>
         
        </tr>
        @endforeach
      </tbody>  
    </table> 
</div>

@if ($tarefa->count() == 0)
    
@else
  <div class="mt-5 mx-auto text-end hidden md:block  max-w-3xl"> 
    <a href="{{ route('deletar_todos_view') }}" class=" text-white  p-1 rounded  bg-red-600 font-semibold hover:bg-red-700 mx-2 md:mx-1 lg:mx-0 text-xs ">Deletar todos</a>
 </div>
@endif


</div>
    
    <div class="p-2 grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden text-sm text-gray-700">
        
    @foreach ($tarefa as $item)
    
     <div class="bg-white rounded p-2 shadow ">
        <div class="text-sm font-semibold text-gray-700 "></div>
        <div>{{ $item->tarefas }}</div>
       
     </div>

    @endforeach
    
    </div>


@endsection

