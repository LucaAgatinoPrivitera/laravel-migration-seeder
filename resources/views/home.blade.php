@extends('layouts.app')

@section('content')
	@foreach ($trains as $treno)
		if($treno['Stazione di arrivo'] = 'Giarre'){
		<h4>Ciao il treno parte da: {{ $treno['Stazione di partenza'] }} alle ore: {{ $treno['Orario di partenza'] }}</h4>
		<h4 style="margin-bottom: 4rem">Arriva: {{ $treno['Stazione di arrivo'] }} alle ore: {{ $treno['Orario di arrivo'] }}
		</h4>
	@endforeach

    <a href="/all">Qui la lista di tutti i treni, non solo quelli di oggi</a>
@endsection
