@extends('layouts.master')

@section('content')
    <h1>Add a Playlist</h1>
    <form method="POST" action="{{route('playlist.store')}}">
        @csrf
        <label>Vul een naam voor het playlist in</label>
        <input name="name" type="text">
        <input type="submit" value="Send me!">
    </form>
@endsection
