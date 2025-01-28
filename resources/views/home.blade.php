@extends('layouts.main_layout')
@section('content')

{{-- se não existe / empty --}}
@empty($value)
<h1>NÃO EXISTE</h1>
@else
<h1>EXISTE</h1>
@endempty

{{-- se a variável está definida / isset --}}
@isset($value)
<h1>EXISTE A VARIÁVEL</h1>
@else
<h1>NÃO EXISTE A VARIÁVEL</h1>
@endisset

{{-- a menos que / unless --}}
@unless($value != 100 )
<h1>OK!!!!</h1>
@endunless

@endsection