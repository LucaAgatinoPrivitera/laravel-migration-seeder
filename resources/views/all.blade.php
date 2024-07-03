@extends('layouts.app')

@section('content')
	@foreach ($trains as $treno)
		<h4>Ciao il treno parte da: {{ $treno['Stazione di partenza'] }} alle ore: {{ $treno['Orario di partenza'] }}</h4>
		<h4 style="margin-bottom: 4rem">Arriva: {{ $treno['Stazione di arrivo'] }} alle ore: {{ $treno['Orario di arrivo'] }}
		</h4>
	@endforeach

    <a href="/">Qui la lista di tutti i treni di oggi</a>
@endsection
