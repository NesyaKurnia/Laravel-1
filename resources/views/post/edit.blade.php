@extends ('adminlte.master')
@section ('content')

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/post/{{$post->id}}" method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{old('title',$post->title)}}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
                  <div class="form-group">
                    <label for="body">Isi Pertanyaan</label>
                    <input type="text" class="form-control" name="body" id="body" value="{{old('body',$post->body)}}">
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