<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('painel/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('painel/assets/css/page.css')}}">  
    <title> W|L|C|P </title>
</head>
<body>
<header>
    <div class="cabecalho">
        <a href="" class="logo"><img src="{{url('painel/assets/img/WLCP.png')}}" alt="logo"></a>
    </div>
    
    <div class="cabecalho-texto">
        <h2>Central de atendimento</h2>
        <p>(81) 996071609 <i class='bx bxl-whatsapp'></i></p>
        <p>(81) 4242.1515 <i class='bx bxs-phone'></i></p>
        <p>jausoares@gmail.com <i class='bx bx-envelope'></i></p>
    </div>     

</header>
<nav class="navegation">
    <ul class="nav">
        <li class="nav-item"><i class='bx bxs-home'></i> <a href="">Inicio</a></li>
        <li class="nav-item"><i class='bx bx-search' ></i> <a href="">Consultas</a</li>
        <li class="nav-item"><i class='bx bxs-user-minus'></i> <a href="">Negativação</a</li>
        <li class="nav-item"><i class='bx bx-barcode'></i><a href="">Faturas</a</li>
        <li class="nav-item"><i class='bx bx-group'></i><a href="">Troca de Senha </a</li>
        <li class="nav-item"><i class='bx bx-headphone' ></i><a href="">Atendimento</a></li>
		<li><a href="{{url('/logout')}}" class="nav-item"><i class='bx bx-exit'></i> Sair</a></li>
    </ul>
	
</nav>

<div>
    @yield('content')
</div>

<script src="{{url('painel/assets/js/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>