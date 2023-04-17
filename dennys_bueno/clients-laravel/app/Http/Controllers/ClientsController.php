<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Lista os clientes
     *
     * @return View
     */
    public function index()
    {
        $clients = Client::get();
        //Buscar clientes no banco

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Mostra um cliente
     *
     * @param interger $id
     * @return View
     */
    public function show(int $id)
    {
        $client = Client::find($id);
        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Mostra a view de criar novos clientes
     *
     * @return View
     */

    public function create()
    {
        return view('clients.create');
    }

    /**
     * Cria um novo cliente
     *
     * @param Request @request
     * @return RedirectResponse
     */

    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Client::create($dados);
        return redirect('/clients');
    }

    /**
     * Mostra o formulario de editar um determinado cliente
     * @param interger $id
     * @return View
     */

    public function edit(int $id)
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Realiza a edição dos dados de um cliente
     *
     * @param interger $id
     * @param Request @request
     * @return RedirectResponse
     */

    public function update(int $id, Request $request)
    {
        $client = Client::find($id);
        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);
        return redirect('/clients');
    }

    /**
     * Exclui um cliente
     *
     * @param interger $id
     * @return RedirectResponse
     */

    public function destroy(int $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}
