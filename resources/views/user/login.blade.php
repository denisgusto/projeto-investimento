<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href={{ asset("css/stylesheet.css") }}>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <title>Login | Investindo</title>
</head>
<body>

    {{-- Background --}}
    <div class="background"></div>
    
    {{-- Aba de login --}}
    <section id="conteudo-view" class="login">

        <h1>Investindo</h1>
        <h3>O nosso gerenciador de investimento</h3>
        
        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

        <p>Acesse o sistema</p>

        <label for="">
            {!! Form::text('username', null, ['class' => 'input', 'placeholder' => 'Usuário']) !!}
        </label>

        <label for="">
            {!! Form::password('password', ['class' => 'input', 'placeholder' => 'Senha']) !!}
        </label>

        {!! Form::submit('Entrar') !!}

        {!! FOrm::close() !!}

    </section>

</body>
</html>