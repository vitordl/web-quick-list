@extends('layout.main_layout')


<title>Editar</title>

@section('pagina')

<div class="h-screen bg-gray-100">

<div class="h-10"></div>

<div class="mx-2">
<div class="p-5 mx-auto max-w-3xl bg-yellow-200 bg-opacity-40 rounded-lg ">
    <div class="font-semibold">Editar anotação<br><br></div>
    
    <form action="{{ route('atualizar_isso', $tarefa_ed->id) }}" method="post">
        
        <input type="text" class="p-2 mx-auto rounded-lg w-full" value="{{ $tarefa_ed->tarefas }}" name="txt_pra_atualizar" maxlength="250">
        
        <div class="mt-3"></div>
        <input type="submit" value="Salvar" class="bg-orange-400 p-2 rounded-lg text-orange-800 font-semibold">
        
    </form>
</div>

<div class="p-5 mx-auto max-w-3xl flex justify-center">
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

</div>

@endsection