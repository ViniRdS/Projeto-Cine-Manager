<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reg=Filme::all();
        return view('site.filmes.index', compact('reg'));
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
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
    public function show(Filme $filme, $id)
    {
        $filme = Filme::find($id);
        return view("site.filmes.visualizar",compact('filme'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    
{
    $filme = Filme::find($id);


    return view("site.filmes.editar",  compact('filme'));

}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $filme = Filme::find($id);

    $validator = Validator::make($request->all(), [
        'titulo' => 'required|string|max:255',
        'descricao' => 'required|string',
        'duracao' => ['required', 'regex:/^([0-1][0-9]|2[0-3]):[0-5][0-9]$/'],
        'genero' => 'required|string|max:255',
        'diretor' => 'required|string|max:255',
        'status' => 'required|in:0,1',
        'imagem' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Permite uma nova imagem
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    if ($request->hasFile('imagem')) {
        // Manipulação da nova imagem
        $imageName = time() . '.' . $request->imagem->extension();
        $request->imagem->move(public_path('caminho/para/sua/imagem/'), $imageName);

        // Atualiza o nome da imagem no registro do filme
        $filme->imagem = $imageName;
    }

    // Atualiza os outros campos do filme
    $filme->update($request->except('imagem'));

    return redirect()->route('filmes.listar')->with('success', 'Filme atualizado com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Filme::find($id)->delete();
        return redirect()->route('filmes.listar');
    }
}
