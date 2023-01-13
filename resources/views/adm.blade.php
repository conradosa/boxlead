<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme11.css')}}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

@if(session('success'))
    <script>
        Swal.fire({
            title: 'Oba!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonColor: '#7592a4',
            confirmButtonText: 'Ok'
        }).then(function () {
            location.reload();
        });
    </script>
    {{Session::forget('success')}}
@endif

@if(session('error'))
    <script>
        Swal.fire({
            title: 'Opa!',
            text: '{{ session('error') }}',
            icon: 'warning',
            confirmButtonColor: '#7592a4',
            confirmButtonText: 'Ok'
        }).then(function () {
            location.reload();
        });
    </script>
    {{Session::forget('error')}}
@endif

<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Funções de Administrador</h3>
                    <br>
                    <form method="POST" action="{{route('adm.generate')}}">
                        @csrf
                        <button class="btn btn-primary rounded" type="submit">Gerar Tabela Excel</button>
                    </form>
                    <form id="reset" method="POST" action="{{route('adm.reset')}}">
                        @csrf
                        <a class="btn btn-secondary rounded" onclick="
                        Swal.fire({
                        title: 'Tem certeza?',
                        text: 'Você não terá como desfazer isso!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#20c997',
                        cancelButtonColor: 'red',
                        cancelButtonText: 'Não',
                        confirmButtonText: 'Sim, resetar Leads.'
                        }).then((result) => {
                        if (result.isConfirmed) {
                        let form = document.getElementById('reset');
                        form.submit();
                        }
                        });
                        ">Resetar Banco de Dados</a>
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
</body>
</html>
