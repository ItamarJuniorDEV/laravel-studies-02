@extends('layouts.main_layout')
@section('content')

{{-- usando o continue e break --}}
@for ($index = 0; $index < 10; $index++)

  {{-- continue --}}
  @if($index==5)
  @continue
  @endif

  <p>Index: {{ $index }}</p>

  {{-- break --}}
  @if($index == 7)
  @break
  @endif
  @endfor
  {{-- loop variable --}}

  @foreach($cities as $city)

  <h1>{{ $city }}</h1>
  <h3>{{ $loop->index }}</h3>

  @if($loop->first)
  <p>Primeira cidade</p>
  @endif

  @if($loop->last)
  <p>Última cidade</p>
  @endif

  @endforeach

  @endsection