@extends('layout.main_layout')


<title>Sobre</title>

@section('pagina')


<div class="h-screen bg-gray-100">

<div class="h-10"></div>
<div class="mx-2">
<div class="text-center text-lg p-2 mx-auto max-w-3xl bg-green-200  bg-opacity-40 rounded-lg">
    <div class="text-gray-700 font-extrabold tracking-wider text-xl" >QuickList - Sistema Web</div>

    <div class="mt-4 font-light text-justify">
        O <span class="font-bold text-gray-700">QuickList</span> é uma aplicação Web simples para gerenciar tarefas ou anotações. Com ele você pode criar tarefas, editá-las ou excluí-las quando bem desejar. 
        

    </div>
    <div class=" mt-7 font-bold text-gray-700 bg-gray-200">
        Estrutura do sistema
    </div>
    <div class="mt-1 font-light text-justify">
        O sistema foi desenvolvido com PHP Laravel, conectado ao banco de dados PostgreSQL, que fica responsável pelo armazenamento dos dados. Para a estilização das páginas foi utilizado o framework Tailwind CSS.
        
    </div>

    <div class=" mt-7 font-bold text-gray-700 bg-gray-200">
        Desenvolvedor
    </div>
    <div class="mt-2 font-light text-justify">
        Criado por mim, Vitor de Lucca, com o objetivo de este ser o primeiro projeto do meu portifólio pessoal.
    </div>


    <div class="mt-10">
        <a href="{{ route('home') }}" class="text-sm mt-5 text-purple-500 border p-1 border-purple-500 rounded hover:text-purple-600">Voltar para Home</a>
    </div>
    
  
</div>

</div>

</div>
@endsection

