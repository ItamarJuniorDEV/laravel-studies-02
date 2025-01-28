@extends('layouts.main_layout')
@section('content')

{{-- for --}}
@for($index = 0; $index < 5; $index++)
  <h1>Index: {{ $index }}</h1>
  @endfor

  {{-- foreach --}}
  @foreach($cities as $city)
  <h1>City: {{ $city }}</h1>
  @endforeach

  {{-- forelse --}}
  @forelse($names as $name)
  <p>Name: {{ $name }}</p>
  @empty
  <p>Names está vazio</p>
  @endforelse

  {{-- while --}}
  @while($indice < 10)
    <h1>Índice: {{ $indice++ }}</h1>
    @endwhile

    @endsection