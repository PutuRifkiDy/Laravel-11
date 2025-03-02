<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::get();
        return view('todo.app', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request); // untuk melihat request

        // untuk validasi dan mengubah pesan error menjadi bahasa indonesia
        $request->validate([
            'task' => 'required|min:3|max:25',

        ], [
            'task.required' => 'task harus diisi',
            'task.min' => 'task minimal 3 karakter',
            'task.max' => 'task maksimal 25 karakter',
        ]);

        $data = [
            'task' => $request->input('task'),
        ];

        Todo::create($data);

        return redirect()->route('todo.index')->with('success', 'Berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'task' => 'required|min:3|max:25',

        ], [
            'task.required' => 'task harus diisi',
            'task.min' => 'task minimal 3 karakter',
            'task.max' => 'task maksimal 25 karakter',
        ]);

        $data = [
            'task' => $request->input('task'),
            'is_done' => $request->input('is_done'),
        ];

        Todo::where('id', $id)->update($data);

        return redirect()->route('todo.index')->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todo::where('id', $id)->delete();

        return redirect()->route('todo.index')->with('success', 'Berhasil hapus data');
    }
}
