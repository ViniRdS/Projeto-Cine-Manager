<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.filmes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.filmes.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'descricao' => 'required|string',
            'duracao' => ['required', 'regex:/^([0-1][0-9]|2[0-3]):[0-5][0-9]$/'],
            'genero' => 'required|string|max:255',
            'diretor' => 'required|string|max:255',
            'status' => 'required|in:0,1',
        ]);
    
        // Manipulação da imagem, se presente
        if ($request->hasFile('imagem')) {
            $imageName = time() . '.' . $request->imagem->extension();  
            $request->imagem->move(public_path('img'), $imageName);
            $validatedData['imagem'] = $imageName; // Altera a chave 'imagem' para o nome do arquivo
        }
    
        // Cria o filme com os dados validados
        Filme::create($validatedData);
    
        // Redireciona para a lista de filmes com uma mensagem de sucesso
        return redirect()->route('filmes.listar')->with('success', 'Filme cadastrado com sucesso!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Filme $filme)
    {
        return view("site.filmes.visualizar");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filme $filme)
    {
        return view("site.filmes.editar");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filme $filme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filme $filme)
    {
        //
    }
}
