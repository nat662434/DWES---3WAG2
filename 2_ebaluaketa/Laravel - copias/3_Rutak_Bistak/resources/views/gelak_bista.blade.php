@extends('welcome')
@section('hasiera')
<h1>GELEN TAULA</h1>
@if($zbk==1)
<p>Gure gela: {{$zbk}}</p>
@else
<p>Agur</p>
@endif
@endsection