@extends('adminlte.master')

@section('content')
<div class="ml-4 mt-4">
<div class="card">
<div class="card-body">
<h4> {{ $posts->judul }} </h4>
<p> {{ $posts->isi }} </p>
</div>
<div class="card-footer">
<a href="/pertanyaan" action class="btn btn-info">Back</a>
</div>
</div>
</div>

@endsection