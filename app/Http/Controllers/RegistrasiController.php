<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    //
    public function index() {
        return view('registrasi.index');
    }
    public function create() {

    }
    public function store(Request $request) {
        $nama_depan = $request['firstname'];
        $nama_belakang = $request['lastname'];
        $nama_lengkap = "$nama_depan $nama_belakang";
        return view('registrasi.welcome', compact('nama_lengkap'));
    }
    public function show($id) {

    }
    public function edit($id) {

    }
    public function update(Request $request, $id) {
        
    }
    public function destroy($id){

    }
}
