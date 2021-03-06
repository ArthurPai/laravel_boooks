@extends('layouts.app')

@section('content')

@if (session('success'))
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ session('success') }}
</div>
@endif

<div class="">
  <a href="{{ route('books.create') }}" class="btn btn-primary pull-right">新增</a>
  <h1>我的書籍</h1>
</div>

  <table class="table table-responsive table-hover">
    <thead>
    <tr>
        <th>編號</th>
        <th>書名</th>
        <th>擁有者</th>
        <th>描述</th>
        <th>加入時間</th>
        <th>更新時間</th>
        <th>動作</th>
    </tr>
    </thead>
    <tbody>
        @each('books.item', $books, 'book')
    </tbody>
  </table>
@endsection
