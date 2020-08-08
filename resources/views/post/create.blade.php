@extends('adminlte.master')

@section('content')
        <div class="ml-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/post" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
                  <div class="form-group">
                    <label for="body">Isi Pertanyaan</label>
                    <input type="text" class="form-control" name="body" id="body" placeholder="Body">
                    @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection