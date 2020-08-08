<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index()
    {
        $post= DB::table('post')->get();
        //dd($post);
        return view ('post.index',compact('post'));
    }
    
    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'tgl_dibuat' => 'required',
        ]);

        $query = DB::table('post')->insert([
            "title" => $request["title"],
            "body" => $request["body"],
        ]);

        return redirect ('/post/create');
    }

    public function show($id)
    {
        $post = DB::table('post')->where('id',$id)->first();
        return view('post.show',compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('post')->where('id',$id)->first();

        return view('post.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
        ]);

        $query = DB::table('post')
            ->where('id',$id)
            ->update([
                'judul' => $request['judul'],
                'isi'=>$request['isi'],
            ]);

            return redirect ('/post/create');
    }

    public function destroy($id)
    {
        $query = DB::table('post')->where('id',$id)->delete();
        return redirect ('/post/create');
    }
}
