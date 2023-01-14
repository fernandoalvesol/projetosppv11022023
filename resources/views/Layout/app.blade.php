<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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


<div class="content">
    @yield('content')
</div>

<script src="{{url('painel/assets/js/script.js')}}"></script>

</body>

</html>