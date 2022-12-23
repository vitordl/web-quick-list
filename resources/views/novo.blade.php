@extends('layout.main_layout')


<title>Novo</title>

@section('pagina')


<div class="h-screen bg-gray-100">

<div class="h-10"></div>
<div class="mx-2">
<div class="p-5 mx-auto max-w-3xl bg-blue-200  bg-opacity-40 rounded-lg ">
    <div class="font-semibold">Nova anotação<br><br></div>
    
    <form action="{{ route('salvar_aqui') }}" method="post">
        
        <input type="text" class="p-2  mx-auto rounded-lg w-full" name="novo_item" maxlength="250" placeholder="Digite aqui" autofocus="autofocus">
        
        <div class="mt-3"></div>
        <input type="submit" value="Salvar" class="bg-blue-400 p-2 rounded-lg text-blue-800 font-semibold">
        
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

</div>
@endsection

