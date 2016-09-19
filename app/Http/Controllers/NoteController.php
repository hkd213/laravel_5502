<?php
/**
 * Created by PhpStorm.
 * User: hkd
 * Date: 18.09.16
 * Time: 9:54
 */

namespace App\Http\Controllers;


use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function create()
    {
        return view('note.create');
    }

    public function store(Request $request)
    {
        $img_path = new Note();
        $img = $img_path->file_save($request->img);
        Note::create([
            'title' => $request->title,
            'description' => $request->description,
            'img' => $img
        ]);
        return redirect('/');

    }

    public function edit($id){
        $note = Note::find($id);
        return view('note.edit',['note' => $note]);
    }

     public function update($id,Request $request){
         $note = Note::find($id);
         $img = $note->file_save($request->img);
         $note->title = $request->title;
         $note->description = $request->description;
         $note->img = $img;
         $note->save();
         return redirect('/');
     }

    public function show($id){
        $note = Note::find($id);
        $note->delete();
        return redirect('/');
    }
}