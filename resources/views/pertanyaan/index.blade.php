@extends ('adminlte.master')

@section ('content')

@if(session('success'))
<div class="alert alert-success">
{{ session('success')}}
</div>
@endif
    <div class="mt-4 mr-4 m-4">
            <div class="card">
            <a class="btn btn-primary " href="/pertanyaan/create">Create New </a>
              <div class="card-header">
                <h3 class="card-title">Tabel Pertanyaan</h3>
                <!-- /.card-header -->
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key => $p)
                        <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $p->judul }} </td>
                        <td> {{ $p->isi  }}</td>
                        <td> 
                        <a href="/pertanyaan/show/{{ $p->id }}" class="btn btn-info btn-sn">Show</a><br><br>
                            <a href="/pertanyaan/edit/{{ $p->id }}" class="btn btn-success">Edit</a><br><br>
                            <form action="/pertanyaan/Hapus/{{ $p->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <a href="/pertanyaan/create" action class="btn btn-info">Buat Pertanyaan Baru</a>
                </div>
            </div>
    </div>
                
@endsection