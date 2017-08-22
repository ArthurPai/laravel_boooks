@extends('layouts.app')

@section('content')
    <h1 style="text-align: center;">我的書店</h1>
    <a href="{{ route('books.index') }}">All Books</a>
@endsection
