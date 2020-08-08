<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('pertanyaan.create');

    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
        ]);

        //dd(($request)->all());
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
        ]);

        return redirect ('/pertanyaan')->with('success', 'Berhasil Membuat Pertanyaan!');
    }

    public function index()
    {
        $post= DB::table('pertanyaan')->get();
        //dd($post);
        return view ('pertanyaan.index',compact('post'));
    }

    public function show($id){
        $posts = DB::table('pertanyaan')->where('id', $id)->first();
        //dd($posts);
        return view('pertanyaan.show', compact('posts'));
    }

    public function edit($id){
        $posts = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('posts'));
    }

    public function update($id, request $request){
        $request->validate([
            'judul' => 'required',
            'isi'   => 'required'
        ]);

        $query = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi'   => $request['isi']
                    ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Update!');

    }

    public function destroy($id){
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Berhasil Dihaspus!');
    }
}
