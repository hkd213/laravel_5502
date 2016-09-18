@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="table-responsive datatable-scroll">
                            <table class="table datatable-basic">
                                <thead>
                                <tr>
                                    <th>Заголовок</th>
                                    <th>Дата</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notes as $note)
                                    <tr id="{{$note->id}}">
                                        <td>{{$note->title}}</td>
                                        <td>{{$note->description}}</td>
                                        <td><a href="">Редактировать</a> <a href="">Удалить</a></td>

                                    </tr>
                                @endforeach
                                <tr>
                                    <td><a href="note/create">...</a></td>
                                    <td><a href="note/create">...</a></td>
                                    <td><a href="note/create">...</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
