<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset3 span6">
                <form action="/" method="post">
                    <fieldset>
                        <legend>{{ $title }}</legend>
                        @if ($errors->any())
                        <div class="alert alert-error text-left">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </p>
                        </div>
                        @endif
                        @csrf
                        <label for="mensagem">Digite sua mensagem</label>
                        <input type="text" class="input-block-level" name="mensagem" id="mensagem" maxlength="144">
                        <div class="text-center">
                            <button type="submit" name="button" class="btn btn-large">
                                Enviar
                            </button>
                        </div>
                    </fieldset>
                </form>
                <hr>
                @if ($mensagens)
                @foreach ($mensagens as $mensagem)
                <p>{{ $mensagem->mensagem }}</p><hr>
                @endforeach
                @else
                <p>Nenhuma mensagem encontrada.</p>
                @endif
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</body>
</html>
