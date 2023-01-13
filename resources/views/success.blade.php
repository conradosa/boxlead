<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso!</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme11.css')}}">
</head>
<body>
<div style="background-color: #20c997" class="form-body">
    <div class="row justify-content-center">
        <div class="form-holder">
            <div class="form-content" style="background-color: #20c997">
                <div class="form-items">
                    <h3>Sucesso!</h3>
                    <p>Aqui está seu código para o acesso na plataforma:</p>
                    <h3 style="font-size: 25px"><strong>{{$lead->codigo}}</strong></h3><br>
                    <p>Aproveite o evento!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
