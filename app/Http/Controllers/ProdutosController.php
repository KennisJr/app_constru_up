<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function store(Request $request)
    {
       $marca =  Produtos::create($request->all());
        return $marca;
        
    }

    
    public function show(Produtos $produtos)
    {
        //
    }

   
    public function update(Request $request, Produtos $produtos)
    {
        //
    }

    
    public function destroy(Produtos $produtos)
    {
        //
    }
}
