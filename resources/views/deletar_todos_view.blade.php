@extends('layout.main_layout')


<title>Deletar Todos</title>

@section('pagina')

<div class="h-screen bg-gray-100">

<div class="h-10"></div>

<div class="mx-2">
<div class="p-5 mx-auto max-w-md bg-orange-500 bg-opacity-40 rounded-lg ">
    <div class="font-semibold text-gray-800">Digite o código para deletar <span class="font-extrabold">TODAS</span> as anotações<br><br></div>
    <div class="text-xs  text-gray-500 mb-2">O código é 2254</div>

    <form action="{{ route('deletar_todos') }}" method="get">
        
        <input type="text" class="p-2 bg-gray-300 mx-auto rounded-lg w-full" name="codigo_txt" maxlength="4">
        
        <div class="mt-3 justify-between flex">

        <input type="submit" value="Deletar" class="bg-orange-400 p-2 rounded-lg text-orange-800 font-semibold">

        <a href="{{ route('home') }}" class="mx-2 text-sm text-yellow-700 hover:text-yellow-800">Cancelar</a>
    </div>
        
    </form>
    {{-- <form action="{{ route('atualizar_isso', $tarefa_ed->id) }}" method="post">
        @csrf
        <input type="text" class="p-2 bg-gray-300 mx-auto rounded-lg w-full" value="{{ $tarefa_ed->tarefas }}" name="txt_pra_atualizar" maxlength="250">
        
        <div class="mt-3"></div>
        <input type="submit" value="Salvar" class="bg-orange-400 p-2 rounded-lg text-orange-800 font-semibold">
        
    </form> --}}
</div>

{{-- <div class="p-5 mx-auto max-w-3xl flex justify-center">
    @if ($errors->any())
    <div class="my-2 p-1 rounded-lg bg-yellow-400 bg-opacity-30 max-w-md text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    </div>

</div> --}}

@endsection