<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
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
    
        return redirect()->route('user.login')->with('success', 'Usuário cadastrado com sucesso!');
    }
    


    /**
     * Display the specified resource.
     */
    public function showLoginForm()
    {
        return view('site.login.index');
    }

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
    public function destroy(string $id)
    {
        // Implemente a lógica para excluir um usuário, se necessário.
    }
}