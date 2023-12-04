<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo electronico</h1>
    <p>Este es el primer correo que mandariamos por Laravel</p>
    <p><strong>{{ __('Name') }}: </strong>{{ $data['name'] }}</p>
    <p><strong>{{ __('Email') }}: </strong>{{ $data['email'] }}</p>
    <p><strong>{{ __('Message') }}: </strong>{{ $data['message'] }}</p>
</body>
</html>