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
            <div class="offset3 span6 text-center">
                <h1>{{ $title }}</h1>
                <form action="/" method="post">
                    @csrf
                    <input type="text" class="input-block-level" name="mensagem" placeholder="Digite sua mensagem aqui e clique em enviar">
                    <button type="submit" name="button" class="btn btn-large">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</body>
</html>
