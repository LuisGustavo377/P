<?php

namespace App\Http\Controllers;

use App\Models\Musico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Musicos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id(); // Obtém o ID do usuário atualmente autenticado


        $musicos = Musico::all();
        return view('musicos.index', compact('musicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('musicos.create');
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

                $musico = new Musico();

                $musico->nome = $request->nome;
                $musico->dataNascimento = $request->dataNascimento;
                $musico->endereco = $request->endereco;
                $musico->email = $request->email;
                $musico->dataRegistro = $request->dataRegistro;
                $musico->frequencia = $request->frequencia;


                // $evento->user_id = auth()->id(); // Preencha automaticamente os campos user_id e estabelecimento_id


                $musico->save();


                // Aqui, você pode fazer outras operações relacionadas ao cliente,
                // como atualizar relacionamentos ou outras tabelas, se necessário.

                // Se todas as operações foram concluídas com sucesso, faça o commit da transação.
                DB::commit();

                return redirect()->route('musicos.index')->with('msg', 'Músico adicionado com sucesso!');
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
        $musico = Musico::findOrFail($id);

        return view('musicos.show', compact('musico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $musico = Musico::findOrFail($id);

        return view('musicos.edit', compact('musico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Musico $musico)
    {
        try {
            DB::beginTransaction();

            // Recuperando o evento pelo ID
            $musico = Musico::findOrFail($musico->id);

            if (!$musico) {
                throw new \Exception('Evento não encontrado');
            }

            // Atualizando os campos necessários       
            $musico->nome = $request->nome;
            $musico->dataNascimento = $request->dataNascimento;
            $musico->endereco = $request->endereco;
            $musico->email = $request->email;
            $musico->dataRegistro = $request->dataRegistro;
            $musico->frequencia = $request->frequencia;

            $musico->save();

            // Se todas as operações foram concluídas com sucesso, faça o commit da transação.
            DB::commit();

            return redirect()->route('musicos.index')->with('msg', 'Músico alterado com sucesso!');
        } catch (\Exception $e) {
            // Em caso de erro, reverta a transação e lance a exceção novamente.
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
