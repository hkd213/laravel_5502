<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Клиент</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Просмотр записей</h4>
                    </div>

                    <div class="panel-body">
                        <label>Api ключ</label>
                        <p><input type="text" class="form-control" name="token"></p>

                        <label>Адрес</label>
                        <p><input type="text" class="form-control" name="address"></p>

                        <button class="btn btn-success" id="press">Получить</button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <label id="dump"></label>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="/client.js"></script>
</body>
</html>
