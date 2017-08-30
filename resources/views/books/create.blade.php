@extends('layouts.app')

@section('content')
<div class="">
  <h1>新增書籍</h1>
</div>

<div class="">
  <form action="{{ route("books.store") }}" method="POST" class="form-horizontal">
  {{ csrf_field() }}

  <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title" placeholder="Input Title">

      @if ($errors->has('title'))
          <span class="help-block">
              <strong>{{ $errors->first('title') }}</strong>
          </span>
      @endif
    </div>
  </div>
  <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
      <textarea id="description" name="description" class="form-control" rows="3"></textarea>

      @if ($errors->has('description'))
          <span class="help-block">
              <strong>{{ $errors->first('description') }}</strong>
          </span>
      @endif
    </div>
  </div>
  <div class="form-group {{ $errors->has('cover') ? 'has-error' : '' }}">
    <label for="cover" class="col-sm-2 control-label">Cover</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cover" name="cover" placeholder="Input Cover Url">

        @if ($errors->has('cover'))
            <span class="help-block">
                <strong>{{ $errors->first('cover') }}</strong>
            </span>
        @endif
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">新增</button>
      <a href="{{ route("books.index") }}" class="btn btn-default">返回</a>
    </div>
  </div>
  </form>
</div>
@endsection
