<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se!</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme23.css')}}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

@if(session('status'))
    <script>
        Swal.fire({
            title: 'Atenção!',
            text: '{{ session('status') }}',
            icon: 'info',
            confirmButtonColor: '#7592a4',
            confirmButtonText: 'Ok'
        }).then(function () {
            location.reload();
        });
    </script>
    {{Session::forget('status')}}
@endif

@if($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            Swal.fire({
                title: 'Opa!',
                text: '{{ $error }}',
                icon: 'error',
                confirmButtonColor: '#7592a4',
                confirmButtonText: 'Ok'
            });
        </script>
    @endforeach
@endif

<div class="form-body on-top-mobile">
    <div class="row">
        <div style="background-color: #fff;" class="img-holder">
            <div class="bg"></div>
            <div class="info-holder simple-info">
                <div><img src="{{asset('images/logo1.png')}}" alt=""><img class="ml-md-3" src="{{asset('images/logo2_n.png')}}" alt=""></div>
                <!--
                <div><h3 style="color: black;">Cadastre-se em nossa plataforma!</h3></div>
                <div><p style="color: black;">Preencha seus dados aqui e receba <br>seu código de acesso à plataforma.</p></div>
                -->
            </div>
        </div>
        <div class="form-holder">
            <div style="background-color: #B5CCB5" class="form-content">
                <div class="form-items">
                    <form method="POST" class="bg-white p-4 rounded" action="{{route('store.lead')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="nome"><b>Nome:</b></label>
                                <input required id="nome" value="{{old('nome')}}" name="nome" type="text" class="form-control" placeholder="Digite seu nome completo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="telefone"><b>Telefone:</b></label>
                                <input required id="telefone" value="{{old('telefone')}}" name="telefone" type="text" data-mask="(00)99999-9999" class="form-control" placeholder="(DDD)99999-9999">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="email"><b>E-mail:</b></label>
                                <input required id="email" value="{{old('email')}}" name="email" type="email" class="form-control" placeholder="Digite seu e-mail">
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label for="empresa">Empresa:</label>
                                <input required id="empresa" value="" name="empresa" type="text" class="form-control" placeholder="Digite o nome de sua empresa">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="cargo">Cargo:</label>
                                <input required id="cargo" value="" name="cargo" type="text" class="form-control" placeholder="Digite o seu cargo">
                            </div>
                        </div>
                        -->
                        <div class="row">
                            <div class="col-12">
                                <label><b>Você é:</b></label><br>
                                <input class="form-control" type="radio" id="estudante" name="cargo" value="Estudante">
                                <label for="estudante">Estudante</label><br>
                                <input class="form-control" type="radio" id="produtor" name="cargo" value="Produtor">
                                <label for="produtor">Produtor</label><br>
                                <input class="form-control" type="radio" id="visitante" name="cargo" value="Visitante">
                                <label for="visitante">Visitante</label><br>
                                <input class="form-control" type="radio" id="comercial" name="cargo" value="Comercial">
                                <label for="comercial">Comercial</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-button">
                                    <button style="background-color: green; color: white" id="submit" type="submit" class="ibtn">Enviar</button>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-12">
                                <center>
                                <img src="{{asset('images/logobox.png')}}" alt="">
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.mask.js')}}"></script>

<script>
    $(document).ready(function(){
        $('#telefone').mask('(00)00000-0000');
    });
</script>

</body>
</html>
