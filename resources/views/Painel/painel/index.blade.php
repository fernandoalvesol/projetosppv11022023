@extends('Layout.app')

@section('content')

<div class="row">
	
	<div class="col">
	<div class="caixa">
		<p>negativar devedores</p>
	
		<a href="{{ route('blacklist.index') }}">Incluir</a>
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

