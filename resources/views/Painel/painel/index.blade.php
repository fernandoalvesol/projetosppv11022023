@extends('Layout.app')

@section('content')

<div class="row">
	<section class="container">
		<div class="title-pag">
			<h2>Negativação de Clientes</h2>
		</div>
		<div class="title-pag">
			<p>Bem vind!</p>
			<p>Login: <span>cliente</span></p>
			<p>Ip: <span>177.71.48.10</span></p>
		</div>
	</section>
	<div class="col">
	<div class="caixa">
		<p>negativar devedores</p>
	
		<button>incluir</button>
	</div>
	<div class="caixa">
		<p>baixar devedores</p>
		<button>baixar</button>
	</div>
	<div class="caixa">
		<p>relatório de devedores</p>
		<button>listar</button>
	</div>
	<div class="caixa">
		<p>mensagens devedores</p>
		<button>ver mensagns</button>
	</div>
</div>

</div>

@endsection

