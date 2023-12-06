@extends('layouts.master')
@push('title')
    Song - All
@endpush
@section('content')
    <h1>DIt is een totaaloverzicht van alle Songs</h1>
    <ul>
    @foreach($songs as $song)
        <li>{{$song->name}} - {{$song->author}} | {{$song->genre?->name}} |  Released in {{$song->releasedate}} | is found in playlist: @foreach($song->playlists as $playlist) {{$playlist->name}}; @endforeach <a href="{{route('song.destroy', ['song' => $song->id])}}">X</a></li>

    @endforeach
    </ul>

    <a href="{{route('song.create')}}">Create a song</a>
@endsection
