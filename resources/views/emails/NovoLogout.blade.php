<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Logout</title>
</head>
<body>
    <h4>Seja Bem vindo, {{ $nome }}</h4>
    <p>Sua conta email: {{ $email}} realizou logout do sistema</p>
    <p>Data e Hora: {{$datahora}}</p>

    <div>
        <img width="20%"
            src=" {{$message->embed( public_path() . '/img/login.png')}} "
        >
    </div>
</body>
</html>
