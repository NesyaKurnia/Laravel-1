@extends ('adminlte.master')

@section ('content')
          <div class=ml-3>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputPertanyaan">Judul Pertanyaan</label>
                    <input type="text" class="form-control" name="judul" id="judul" value=" {{ old ('judul', '') }} " placeholder="Masukkan judul pertanyaan">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi Pertanyaan</label>
                    <input type="text" class="form-control" name="isi" id="isi" value=" {{ old ('isi', '') }} " placeholder="Masukkan isi pertanyaan">
                    @error('isi')
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