@extends('adminlte.master')

@section('content')
<div class="ml-4 mr-4 m-4">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan {{ $posts->id }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pertanyaan/edit/{{ $posts->id }}" method="POST">
            @csrf
            @method('PUT')
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul" value="{{ $posts->judul }}" id="judul" placeholder="Judul" required>
                    @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="isi" value="{{ $posts->isi }}" id="isi" placeholder="Isi" required>
                      @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                  <a href="/pertanyaan" class="btn btn-default float-right">Back</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            </div>
@endsection