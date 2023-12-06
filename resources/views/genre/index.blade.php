@push('style')
    <link rel="stylesheet" href="{{asset('css/genre.style.css')}}">
@endpush

@extends('layouts.master')



@section('content')
    <h1>DIt is een totaaloverzicht van alle Genres</h1>
    <ul>
    @foreach($genres as $genre)
        <li>{{$genre->name}} <a href="{{route('genre.destroy', ['genre' => $genre->id])}}">X</a></li>
    @endforeach
    </ul>

    <a href="{{route('genre.create')}}">Create a genre</a>
    Er zijn op dit moment {{$genres->count()}} genres

@endsection



