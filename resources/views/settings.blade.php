@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                            <h4>Api ключ</h4>
                            <form action="/user/{{$user->id}}" method="post">
                                {!! csrf_field() !!}
                            <input type="text" class="form-control" name="token" value="{{$user->token}}">
                                <input type="submit" name="save" class="btn btn-success navbar-btn" value="Сохранить">
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
