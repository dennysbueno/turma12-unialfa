<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::get();
        dd($produtos);
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
}
