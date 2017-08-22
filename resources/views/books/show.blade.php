@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ $book->cover }}" alt="{{ $book->title }}">
                    <div class="caption">
                        <h3>{{ $book->title }}</h3>
                        <p>{{ $book->description }}</p>
                        <p><a href="{{ route('books.index') }}" class="btn btn-primary" role="button">Back</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
