<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

/**
 * @author Arthur Lucas <arthur.lucas@sysout.com.br>
 * @since 12/05/2026
 */
class TaskController extends Controller
{

    // Listar todas as tasks
    public function index()
    {
        return response()->json(Task::all());
    }


    // Criar uma task atráves de um body Json
    public function store(Request $request)
    {
        Task::create($this->validation($request));
    }


    // Buscar task pelo id
    public function show(int $id)
    {
        return response()->json(Task::findOrFail($id));
    }


    // Atualizar uma task a partir de um id
    public function update(Request $request, int $id)
    {
        $task = Task::findOrFail($id);

        $this->validation($request);

        $task->update($request->all());
    }


    // Remove uma task conforme um id
    public function destroy(int $id)
    {
        $task = Task::findOrFail($id);

        $task->delete($id);
    }


    /**
     * Método para validar os dados recebidos pelo Json
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    private function validation(Request $request): void
    {
        $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3'],
            'user_id' => ['required', 'exists:App\Models\User,id'],
        ], [
            'title.required' => 'O título é obrigatório',
            'title.min' => 'O título deve ter no mínimo 3 caracteres',
            'title.max' => 'O título deve ter no máximo 255 caracteres',

            'description' => 'A descrição é obrigatória',
            'description' => 'A descrição deve conter no mínimo 3 carateres',

            'user_id' => 'O id do usuário é obrigatório',
            'user_id' => 'Não existe usuário com esse id'
        ]);
    }
}
