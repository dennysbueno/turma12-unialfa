<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudantesController extends Controller
{
    /**
     * Lista os estudantes
     *
     * @return View
     */
    public function index()
    {
        $estudantes = Estudante::get();
        //Buscar estudantes no banco

        return view('estudantes.index', [
            'estudantes' => $estudantes
        ]);
    }

    /**
     * Mostra um estudante
     *
     * @param interger $id
     * @return View
     */
    public function show(int $id)
    {
        $estudante = Estudante::find($id);
        return view('estudantes.show', [
            'estudante' => $estudante
        ]);
    }

    /**
     * Mostra a view de criar novos estudantes
     *
     * @return View
     */

    public function create()
    {
        return view('estudantes.create');
    }

    /**
     * Cria um novo estudante
     *
     * @param Request @request
     * @return RedirectResponse
     */

    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Estudante::create($dados);
        return redirect('/estudantes');
    }

    /**
     * Mostra o formulario de editar um determinado estudante
     * @param interger $id
     * @return View
     */

    public function edit(int $id)
    {
        $estudante = Estudante::find($id);

        return view('estudantes.edit', [
            'estudante' => $estudante
        ]);
    }

    /**
     * Realiza a edição dos dados de um estudante
     *
     * @param interger $id
     * @param Request @request
     * @return RedirectResponse
     */

    public function update(int $id, Request $request)
    {
        $estudante = Estudante::find($id);
        $estudante->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'nascimento' => $request->nascimento,
            'sala_id' => $request->sala_id
        ]);
        return redirect('/estudantes');
    }

    /**
     * Exclui um estudante
     *
     * @param interger $id
     * @return RedirectResponse
     */

    public function destroy(int $id)
    {
        $estudante = Estudante::find($id);
        $estudante->delete();
        return redirect('/estudantes');
    }
}
