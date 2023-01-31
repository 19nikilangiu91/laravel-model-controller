@extends('layouts.main-layout')

{{-- 9) Stampo i dati contenuti in $movies --}}
@section('content')
    <h1>Movies</h1>
    <div id="test">
        {{$movies}}
    </div>
@endsection