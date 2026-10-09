<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('id')->get();

        return view('produtos.index', [
            'produtos' => $produtos,
        ]);
    }

    public function show(int $id)
    {
        $produto = Produto::findOrFail($id);

        return view('produtos.show', [
            'produto' => $produto,
        ]);
    }
}
