<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
   
    public function index()
    {
        $produtos = Produtos::all();
        return $produtos;
    }

   
    public function store(Request $request)
    {
       $produto =  Produtos::create($request->all());
        return $produto;
        
    }

    
    public function show($id)
    {
        
        return Produtos::findOrFail($id);
    }

   
    public function update(Request $request, $id)
    {
       $produto = Produtos::findOrFail($id);
       $produto->update($request->all());
    }

    
    public function destroy($id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->delete();
    }
}
