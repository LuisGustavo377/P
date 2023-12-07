<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Evento;
use Illuminate\Support\Facades\DB;

class Eventos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id(); // Obtém o ID do usuário atualmente autenticado


        $eventos = Evento::all();

        return view('eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            if (auth()->check()) {
                $user_id = auth()->id(); // Recupera o ID do usuário da sessão

            DB::beginTransaction();

            // Atualizando os campos necessários       

            $evento = new Evento();

            $evento->nome = $request->nome;
            $evento->horario = $request->horario;
            $evento->data = $request->data;
            $evento->local = $request->local;
            $evento->descricao = $request->descricao;
           
            // $evento->user_id = auth()->id(); // Preencha automaticamente os campos user_id e estabelecimento_id


            $evento->save();


            // Aqui, você pode fazer outras operações relacionadas ao cliente,
            // como atualizar relacionamentos ou outras tabelas, se necessário.

            // Se todas as operações foram concluídas com sucesso, faça o commit da transação.
            DB::commit();

            return redirect()->route('eventos.index')->with('msg', 'Evento criado com sucesso!');
            }  
        } catch (\Exception $e) {
            // Em caso de erro, reverta a transação e lance a exceção novamente.
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $evento = Evento::findOrFail($id);
       
        return view('eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $evento = Evento::findOrFail($id);
       
        return view('eventos.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
