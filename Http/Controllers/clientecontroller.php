<?php

namespace App\Http\Controllers;
use APP\Http\Model\cliente;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;

class clientecontroller extends Controller
{
    public function index()
    {
        
        $cliente = cliente::all();
        

        return view('clients.index')->with('clients', $cliente);

        
        
    }
    public function show($id)
    {
        echo "<h1>Visualizar clientes $id</h1>";

    }
    public function create()
    {
        return view('clients.create');

        
        
        
    }
    public function store(Request $request)
    {
       


        
        
        
    }
}
   
   