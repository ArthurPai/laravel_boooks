@extends('layouts.app')

@section('content')
  <h1>我的書籍</h1>
  <table class="table table-responsive table-hover">
    <thead>
    <tr>
        <th>編號</th>
        <th>書名</th>
        <th>描述</th>
        <th>加入時間</th>
        <th>更新時間</th>
    </tr>
    </thead>
    <tbody>
        @each('books.item', $books, 'book')
    </tbody>
  </table>
@endsection
