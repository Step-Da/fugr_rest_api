<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    /**
     * Функция для вывода инфрмации из модели Notebook в View
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function view()
    {
        $notes = Notebook::paginate(2);
        return view('notebook', ['notes' => $notes]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Notebook::paginate(5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createNote = Notebook::create($request->all());
        return response()->json($createNote);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selectNote = Notebook::findOrFail($id);
        return response()->json($selectNote);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $selectNote = Notebook::findOrFail($id);
        $selectNote->fill($request->except($id));
        $selectNote->save();

        return response()->json($selectNote);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedNote = Notebook::findOrFail($id);
        $deletedNote->delete();
        return response()->json("Запись #{$deletedNote->id} удалена");
    }
}
