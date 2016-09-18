@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create note</div>

                    <div class="panel-body">
                        <form action='/note' method='post' enctype='multipart/form-data'>
                            {!! csrf_field() !!}
                        <input type="text" class="form-control" name="title" placeholder="Заголовок" required>
                        <br>
                        <textarea name="description" class="form-control" placeholder="Описание"></textarea>
                        <br>
                        <input type="file"  name="img">
                        <input type="submit" name="load" class="btn btn-success navbar-btn" value="Сохранить">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
