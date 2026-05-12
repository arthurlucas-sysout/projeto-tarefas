<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

/**
 * @author Arthur Lucas <arthur.lucas@sysout.com.br>
 * @since 12/05/2026
 */
class UserController extends Controller
{

    // Listar todos os usuários
    public function index()
    {
        return response()->json(User::all());
    }


    // Criar um usuário atráves de um body Json
    public function store(Request $request)
    {
        User::create($this->validation($request));
    }


    // Buscar usuário pelo id
    public function show(int $id)
    {
        return response()->json(User::findOrFail($id));
    }


    // Atualizar um usuário a partir de um id
    public function update(Request $request, int $id)
    {
        $user = User::findOrFail($id);

        $this-> validation($request);

        $task->update($request->all());
    }


    // Remove um usuário conforme um id
    public function destroy(int $id)
    {
        $user = User::findOrFail($id);

        $user->delete($id);
    }


    
}
