@extends ('adminlte.master')

@section ('content')

<div class="col-12">
            <div class="card">
            <a class="btn btn-primary " href="/post/create">Create New </a>
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($post as $key => $post)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$post->judul}}</td>
                      <td><span class="tag tag-success">{{$post->isi}}</span></td>
                      <td>
                        <a href="/post/{{$post->id}}" class="btn btn-info btn-sm">Show</a>
                        <a href="/post/{{$post->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <form action="/post/{{$post->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-lg">
                        </form>
                      </td>
                    </tr>
                    @empty
                    <p>empty<p>
                 @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
@endsection