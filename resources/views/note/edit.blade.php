@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit note #{{$note->id}}</div>

                    <div class="panel-body">
                        <form action='/note/{{$note->id}}' method='post' enctype='multipart/form-data'>
                            <input type="hidden" name="_method" value="PUT">
                            {!! csrf_field() !!}
                            <input type="text" class="form-control" value="{{$note->title}}" name="title" placeholder="Заголовок" required>
                            <br>
                            <textarea name="description" class="form-control" placeholder="Описание">{{$note->description}}</textarea>
                            <br>
                            @if($note->img)
                            <img src="/profilepics/{{$note->img}}">
                            @endif
                            <input type="file"  name="img">
                            <input type="submit" name="load" class="btn btn-success navbar-btn" value="Изменить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
