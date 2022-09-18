<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class Main extends Controller
{
    
    public function index()
    {
       $tbtarefas = Tarefa::orderBy('id', 'desc')->get();
       
       return view('home', ['tarefa' => $tbtarefas]);
    }
   
    public function create()
    {
       
        return view('novo');

    }
   
    public function store(Request $request)
    {
        
        $t = new Tarefa();
        $nova_tarefa = $request->input('novo_item');

        $t->tarefas = $nova_tarefa;
        $t->created_at = now();
        $t->updated_at = now();

        $validated = $request->validate([
            'novo_item' => 'required|max:250',
        ]);


        if($t->count() >= 15){
            return view('excessao');
        }else{
            $t->save();
            return redirect()->route('home');
        }
    }

   
    public function show()
    {
       $tbtarefas = Tarefa::orderBy('id', 'desc')->get();
      
       return view('habilitar_edicao', ['tarefa' => $tbtarefas]);
    }


   
    public function edit($id)
    {
        $tarefa_pra_editar = Tarefa::find($id);

       

        return view('editar', ['tarefa_ed' =>$tarefa_pra_editar]);
    }

    public function update(Request $request, $id)
    {
        $tarefa = Tarefa::find($id);
       
        $tarefa_descricao = $request->input('txt_pra_atualizar');
        $tarefa->tarefas = $tarefa_descricao;

        $tarefa->created_at = now();
        $tarefa->updated_at = now();

        $validated = $request->validate([
            'txt_pra_atualizar' => 'required|max:250',
        ]);
        
        $tarefa->save();
        return redirect()->route('home');

    }

   
    public function destroy($id)
    {
        $tarefa = Tarefa::find($id);

        $tarefa->delete();
        
        return redirect()->route('home');
    }

    public function deleteAll(Request $request){

        $codigo = $request->input('codigo_txt');
        if($codigo == 2254){
            Tarefa::truncate();
            return redirect()->route('home');
        }else{
            return view('deletar_todos_view');
        }
        
    }
}
