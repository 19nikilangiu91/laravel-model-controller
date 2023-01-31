@extends('layouts.main-layout')

{{-- 9) Stampo i dati contenuti in $movies --}}
@section('content')
    <h1>Movies</h1>
    {{-- <div id="test">
        {{$movies}}
    </div> --}}
    <ul>
        {{-- @foreach ($movies as $movie)
            <li>{{$movie ['id']}} - {{$movie ['title']}} - {{$movie ['original_title']}} - {{$movie ['nationality']}} - {{$movie ['date']}} - {{$movie ['vote']}} </li>
        @endforeach --}}

        @foreach ($movies as $movie)
            <li>{{$movie-> id}} - {{$movie-> title}} - {{$movie -> original_title}} - {{$movie -> nationality}} - {{$movie -> date}} - {{$movie -> vote}} </li>
        @endforeach
    </ul>
@endsection