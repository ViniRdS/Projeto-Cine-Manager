<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */

    public function index()
     {
        return view('site.login.index');
     }
    
    public function create()
    {
        return view('site.login.cadastrar');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
        ]);
    
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function login(Request $request)
    {
        $credenciais = $request->only('username', 'password');
        if(Auth::attempt($credenciais)){
            return redirect()->route('filmes.listar');
        }else{
            session()->flash('error', 'Credenciais inválidas');
            return redirect()->route('user.index');
        }
    
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Implemente a lógica para exibir o formulário de edição, se necessário.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implemente a lógica para atualizar um usuário, se necessário.
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('user.index');
    }
}