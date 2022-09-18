

{{-- echo "nao pode salvar mais do que 15. Esse banco de dados é gratuito não vamos extrapolar né?"; --}}

@extends('layout.main_layout')


<title>Exception</title>

@section('pagina')


<div class="h-screen bg-gray-100">

<div class="h-10"></div>
<div class="mx-2">
<div class="text-center text-lg p-2 mx-auto max-w-3xl bg-red-200  bg-opacity-40 rounded-lg">
    <div class="text-gray-700 font-medium">Não foi possível salvar, pois esse banco de dados gratuito tem limite de 15 itens.</div>

    <div class="mt-10">
        <a href="{{ route('home') }}" class="text-sm mt-5 text-purple-500 border p-1 border-purple-500 rounded hover:text-purple-600">Voltar para Home</a>
    </div>
    
    
  
</div>

    @if ($errors->any())
    <div class="my-2 p-1 rounded-lg bg-orange-200 max-w-md text-center">
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

