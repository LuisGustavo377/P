<?php

namespace App\Http\Controllers;

use App\Models\Instrumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Instrumentos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id(); // Obtém o ID do usuário atualmente autenticado


        $instrumentos = Instrumento::all();
        return view('instrumentos.index', compact('instrumentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instrumentos.create');
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

                $instrumento = new Instrumento();

                $instrumento->nome = $request->nome;
                $instrumento->marca = $request->marca;
                $instrumento->modelo = $request->modelo;
                $instrumento->dataAquisicao = $request->dataAquisicao;
                $instrumento->dataUltimoReparo = $request->dataUltimoReparo;
                $instrumento->condicao = $request->condicao;
                $instrumento->musicoResponsavel = $request->musicoResponsavel;

                // $evento->user_id = auth()->id(); // Preencha automaticamente os campos user_id e estabelecimento_id


                $instrumento->save();


                // Aqui, você pode fazer outras operações relacionadas ao cliente,
                // como atualizar relacionamentos ou outras tabelas, se necessário.

                // Se todas as operações foram concluídas com sucesso, faça o commit da transação.
                DB::commit();

                return redirect()->route('instrumentos.index')->with('msg', 'Instrumento criado com sucesso!');
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
        $instrumento = Instrumento::findOrFail($id);

        return view('instrumentos.show', compact('instrumento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $instrumento = Instrumento::findOrFail($id);

        return view('instrumentos.edit', compact('instrumento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instrumento $instrumento)
    {
        try {
            DB::beginTransaction();

            // Recuperando o evento pelo ID
            $instrumento = Instrumento::findOrFail($instrumento->id);

            if (!$instrumento) {
                throw new \Exception('Evento não encontrado');
            }

            // Atualizando os campos necessários       
            $instrumento->nome = $request->nome;
            $instrumento->marca = $request->marca;
            $instrumento->modelo = $request->modelo;
            $instrumento->dataAquisicao = $request->dataAquisicao;
            $instrumento->dataUltimoReparo = $request->dataUltimoReparo;
            $instrumento->condicao = $request->condicao;
            $instrumento->musicoResponsavel = $request->musicoResponsavel;

            $instrumento->save();

            // Se todas as operações foram concluídas com sucesso, faça o commit da transação.
            DB::commit();

            return redirect()->route('instrumentos.index')->with('msg', 'Instrumento alterado com sucesso!');
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
