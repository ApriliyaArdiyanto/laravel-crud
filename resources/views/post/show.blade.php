@extends('layout')
@section('content')
<style>
    .upper{
        margin-top: 100px;
    }
</style>
<div class="upper">
<div class="container">
    <div class="row">
    <h1>View Data</h1>
      <table class="table table-hover">
      <tr>
        <td>ID</td>
        <td>{{ $book->id }}</td>
      </tr>
      <tr>
        <td>Judul Buku</td>
        <td>{{ $book->judul }}</td>
      </tr>
      <tr>
        <td>Penerbit Buku</td>
        <td>{{ $book->penerbit }}</td>
      </tr>
      <tr>
        <td>Tahun Terbit Buku</td>
        <td>{{ $book->tahun_terbit }}</td>
      </tr>
      <tr>
        <td>Pengarang</td>
        <td>{{ $book->pengarang }}</td>
      </tr>
  </table>
    <a href="{{route('post.index')}}"><button class="btn btn-success">Back</button></a>
</div>
</div>
@endsection

