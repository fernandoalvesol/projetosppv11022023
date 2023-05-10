@extends('Layout.app')

@section('content')

<div class="row">
	
	<div class="col">
	<div class="caixa">
		<p>negativar devedores</p>	
		<a href="{{ route('blacklist.index') }}" class="btn-negativar">INCLUIR</a>
	</div>
	<div class="caixa">
		<p>baixar devedores</p>
		<a href="{{ route('blacklist.black') }}" class="btn-negativar">BAIXAR</a>
	</div>
	<div class="caixa">
		<p>consultar de devedores</p>
		<a href="{{ route('blacklist.lista') }}" class="btn-negativar">CONSULTAR</a>
	</div>
	<div class="caixa">
		<p>mensagens devedores</p>
		<button>ver mensagns</button>
	</div>
</div>

</div>

@endsection

