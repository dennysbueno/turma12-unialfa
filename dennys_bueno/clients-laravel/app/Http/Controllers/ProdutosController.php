<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::get();
        return view('produtos.index', [
            'produtos' => $produtos
        ]);
    }

    public function show(int $id)
    {
        $produtos = Produtos::find($id);
        return view('produtos.show', [
            'produto' => $produtos
        ]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Produtos::create($dados);
        return redirect('/produtos');
    }

    public function edit(int $id)
    {
        $produto = Produtos::find($id);
        return view('produtos.edit', [
            'produto' => $produto
        ]);
    }

    public function update(int $id, Request $request)
    {
        $produto = Produtos::find($id);
        $produto->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'descricao' => $request->descricao
        ]);
        return redirect('/produtos');
    }

    public function destroy(int $id)
    {
        $produto = Produtos::find($id);
        $produto->delete();
        return redirect('/produtos');
    }
}
